<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace Med\CeliaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Med\CeliaBundle\Entity\Categorie;

class LoadCategory implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
      'Desseurs',
      'Breuvages',
      'Brunch'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $categorie = new Categorie();
      $categorie->setNom($name);

      // On la persiste
      $manager->persist($categorie);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}