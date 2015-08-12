<?php

namespace Med\CeliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\Repository;


class ProduitType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('estAutorise', 'checkbox', array('required' => false))
            ->add('description', 'textarea')
            ->add('marque', 'entity', array(
                'class'    => 'MedCeliaBundle:Marque',
                'property' => 'nomMarque',
                'multiple' => false,
                'expanded' => false,
                'required' => true,
            ))
            ->add('image',      new ImageType(array('source'=>'produit')))
            ->add('save', 'submit')
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Med\CeliaBundle\Entity\Produit'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'med_celiabundle_produit';
    }
}
