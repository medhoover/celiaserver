<?php

namespace Med\CeliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Med\CeliaBundle\Entity\Recette;
use Med\CeliaBundle\Form\RecetteType;
use Med\CeliaBundle\Form\RecetteEditType;


class RecetteController extends Controller
{
    
    public function indexAction()
    {
        $em= $this->getDoctrine()->getManager();
        
        //getting All Categorie(s) from database
        
        $recettes = $em->getRepository('MedCeliaBundle:Recette')->findAllByLatest();
        
        return $this->render('MedCeliaBundle:Recette:index.html.twig', array('recettes'=>$recettes));
    }
    
    public function viewAction($id,Request $request){
            $em = $this->getDoctrine()->getManager();

            // On récupère l'annonce $id
            $recette = $em->getRepository('MedCeliaBundle:Recette')->find($id);

            if (null === $recette) {
              throw new NotFoundHttpException("La Recette d'id ".$id." n'existe pas.");
            }

            $form = $this->createForm(new RecetteEditType(), $recette);

            if ($form->handleRequest($request)->isValid()) {
              // Inutile de persister ici, Doctrine connait déjà notre annonce
              $em->flush();

              $request->getSession()->getFlashBag()->add('notice', 'Recette bien modifiée.');

              return $this->redirect($this->generateUrl('med_celia_view_recette', array('id' => $recette->getId())));
            }

            return $this->render('MedCeliaBundle:Recette:view.html.twig', array(
              'form'   => $form->createView(),
              'recette' => $recette
            ));
       
    }
    
    public function deleteAction($id){
        $em= $this->getDoctrine()->getManager();
        $recette= $em->getRepository('MedCeliaBundle:Recette')->find($id);
        if ($recette) {
            $em->remove($recette);
            $em->flush();   
        }
        return $this->redirectToRoute('med_celia_recette');
    }

    public function addAction(Request $request)
    {
        $recette = new Recette();
        $form = $this->createForm(new RecetteType(), $recette);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($recette);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Recette bien enregistrée.');

          return $this->redirect($this->generateUrl('med_celia_recette', array('id' => $recette->getId())));
        }


        return $this->render('MedCeliaBundle:Recette:add.html.twig', array(
          'form' => $form->createView(),
        ));
        
    }
}
