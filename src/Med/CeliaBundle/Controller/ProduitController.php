<?php

namespace Med\CeliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Med\CeliaBundle\Entity\Produit;
use Med\CeliaBundle\Form\ProduitType;
use Med\CeliaBundle\Form\ProduitEditType;


class ProduitController extends Controller
{

    public function indexAction()
    {
        $em= $this->getDoctrine()->getManager();
        
        //getting All Categorie(s) from database
        
        $produits = $em->getRepository('MedCeliaBundle:Produit')->findAllByLatest();
        
        
        return $this->render('MedCeliaBundle:Produit:index.html.twig', array('produits'=>$produits));
    }
    
    public function viewAction($id,Request $request){
            $em = $this->getDoctrine()->getManager();

            // On récupère l'annonce $id
            $produit = $em->getRepository('MedCeliaBundle:Produit')->find($id);

            if (null === $produit) {
              throw new NotFoundHttpException("Le Produit d'id ".$id." n'existe pas.");
            }

            $form = $this->createForm(new ProduitEditType(), $produit);

            if ($form->handleRequest($request)->isValid()) {
              // Inutile de persister ici, Doctrine connait déjà notre annonce
              $em->flush();

              $request->getSession()->getFlashBag()->add('notice', 'Produit bien modifiée.');

              return $this->redirect($this->generateUrl('med_celia_view_produit', array('id' => $produit->getId())));
            }

            return $this->render('MedCeliaBundle:Produit:view.html.twig', array(
              'form'   => $form->createView(),
              'produit' => $produit
            ));
       
    }
    
    public function deleteAction($id){
        $em= $this->getDoctrine()->getManager();
        $produit= $em->getRepository('MedCeliaBundle:Produit')->find($id);
        if ($produit) {
            $em->remove($produit);
            $em->flush();   
        }
        return $this->redirectToRoute('med_celia_produit');
    }

    public function addAction(Request $request)
    {
        $produit = new Produit();
        $form = $this->createForm(new ProduitType(), $produit);

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($produit);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Produit bien enregistrée.');

          return $this->redirect($this->generateUrl('med_celia_produit', array('id' => $produit->getId())));
        }


        return $this->render('MedCeliaBundle:Produit:add.html.twig', array(
          'form' => $form->createView(),
        ));
        
    }
}
