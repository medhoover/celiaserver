<?php

namespace Med\CeliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\Repository;


class RecetteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('ingredients', 'textarea')
            ->add('direction', 'textarea')
            ->add('temp', 'number')
            ->add('categorie', 'entity', array(
                'class'    => 'MedCeliaBundle:Categorie',
                'property' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'required' => true,
            ))
            ->add('image',      new ImageType())
            ->add('save', 'submit')
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Med\CeliaBundle\Entity\Recette'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'med_celiabundle_recette';
    }
}
