<?php

namespace Med\CeliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Med\CeliaBundle\Entity\Recette;
use Med\CeliaBundle\Entity\Produit;
use JMS\Serializer\SerializerBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;


class RestController extends Controller
{
    public function getAllProduitsAction(){
        
        $em= $this->getDoctrine()->getManager();
        $produits = $em->getRepository('MedCeliaBundle:Produit')->findAllByLatest();
        
        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($produits, 'json');
        return new Response($jsonObject, 201);

    }
    public function getAllRecettesAction(){

        $em= $this->getDoctrine()->getManager();
        $recettes = $em->getRepository('MedCeliaBundle:Recette')->findAllByLatest();
        foreach ($recettes as $recette){
            $recette->setIngredients("");
            $recette->setDirection("");
        }
        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($recettes, 'json');

        return new Response($jsonObject, 201);
    }
    
    /**
    * @ParamConverter("Recette", options={"mapping": {"recette_id": "id"}})
    */
    public function getAction(Recette $recette){

        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($recette, 'json');

        return new Response($jsonObject, 201);
        
    }
}
