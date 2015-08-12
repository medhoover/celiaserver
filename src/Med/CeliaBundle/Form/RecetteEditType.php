<?php


namespace Med\CeliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\Repository;

class RecetteEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->remove('image')
            ->add('image',      new ImageType(array(
                'source'=>'produit','required' => false)));
  }

  public function getName()
  {
    return 'med_celia_view_recette';
  }

  public function getParent()
  {
    return new RecetteType();
  }
}