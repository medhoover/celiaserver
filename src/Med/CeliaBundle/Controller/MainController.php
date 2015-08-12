<?php   

namespace Med\CeliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Model\User;
use Med\CeliaBundle\Entity\Categorie;
use Med\CeliaBundle\Entity\Marque;
use Symfony\Component\HttpFoundation\Request;


Class MainController extends Controller{
    public function IndexAction(Request $request){
        
        
        //Configuring Manager
        $em= $this->getDoctrine()->getManager();
        
        
        //Generating Categorie And Marqu Forms
        $categorie = new Categorie();
        $formCategorie = $this->get('form.factory')->createBuilder('form', $categorie)
        ->add('nom', 'text')
        ->add('save', 'submit', array('label'=>  'Ajouter'))
        ->getForm();
        
        $marque = new Marque();
        $formMarque = $this->get('form.factory')->createBuilder('form', $marque)
        ->add('nomMarque', 'text')
        ->add('save', 'submit', array('label'=>  'Ajouter'))
        ->getForm();
        
        //Getting Add request
        $formCategorie->handleRequest($request);
        $formMarque->handleRequest($request);
        
        if ($formCategorie->isValid()){
            $em->persist($categorie);
            $em->flush();
            //clearing Marque form
            $formMarque = $this->get('form.factory')->createBuilder('form', $marque)
            ->add('nomMarque', 'text')
            ->add('save', 'submit')
            ->getForm();
        }elseif ($formMarque->isValid()) {
            $em->persist($marque);
            $em->flush();
            //clearing Categorie form
            $formCategorie = $this->get('form.factory')->createBuilder('form', new Categorie())
            ->add('nom', 'text')
            ->add('save', 'submit')
            ->getForm();
        }

                //getting All Categorie(s) from database
        
        $categories = $em->getRepository('MedCeliaBundle:Categorie')->findAllByLatest();
        $Marques = $em->getRepository('MedCeliaBundle:Marque')->findAllByLatest();

        return $this->render('MedCeliaBundle:Main:index.html.twig',array(
            'formCategorie'=>$formCategorie->createView(),
            'formMarque'=>$formMarque->createView(),
            'categories'=>$categories,
            'marques'=>$Marques
                ));
        
    }
    public function DeleteCategorieAction($id){
        
        if ($id != 1) {
            $em= $this->getDoctrine()->getManager();
            $categorie= $em->getRepository('MedCeliaBundle:Categorie')->find($id);
            
            if ($categorie->getNbRecette > 0) {
                $defaultCategorie= $em->getRepository('MedCeliaBundle:Categorie')->find($id);
                if ($defaultCategorie !=null){
                    foreach ($categorie->getProduits() as $recette){
                        $recette->setMarque($defaultCategorie);
                    }
                }
            }
            $em->remove($categorie);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('med_celia_main'));
    }
    
    public function DeleteMarqueAction($id){
        
        if ($id != 1) {
            $marque= new Marque();
            $em= $this->getDoctrine()->getManager();
            $marque = $em->getRepository('MedCeliaBundle:Marque')->find($id);

            if ($marque->getNbProd() > 0) {
                $defaultMarque = $em->getRepository('MedCeliaBundle:Marque')->find(1);
                if ($defaultMarque !=null){
                    foreach ($marque->getProduits() as $produit){
                        $produit->setMarque($defaultMarque);
                    }
                }
            }
            $em->remove($marque);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('med_celia_main'));
    }
}

