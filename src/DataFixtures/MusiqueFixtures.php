<?php

namespace App\DataFixtures;

use App\Entity\Musique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MusiqueFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $musique1 = new Musique();
         $musique1->setAuteur("Shakira");
         $musique1->setCover("https://i.ytimg.com/vi/pRpeEdMmmQ0/maxresdefault.jpg");
         $musique1->setStyle("Pop");
         $musique1->setTitle("Waka waka");
         $musique1->setUrlYoutube("https://www.youtube.com/embed/pRpeEdMmmQ0");
         $manager->persist($musique1);


         $musique2 = new Musique();
         $musique2->setAuteur("Mj");
         $musique2->setCover("https://leclaireur.fnac.com/wp-content/uploads/2022/11/une-edition-speciale-a-l-occasion-des-40-ans-de-l-album-thriller-de-michael-jackson-6311f8efe1052-1256x720.jpeg");
         $musique2->setStyle("Pop");
         $musique2->setTitle("Le roi de la pop");
         $musique2->setUrlYoutube("https://www.youtube.com/embed/Zi_XLOBDo_Y");
         $manager->persist($musique2);

        $manager->flush();
    }
}
