<?php

namespace App\DataFixtures;

use App\Entity\Projets;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($count = 0; $count < 20; $count++) {
            $projet = new Projets();
            $projet->setTitle("Titre " . $count);
            $projet->setContent("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at enim vel leo tempus congue nec vel ipsum. Etiam sed urna ut orci rhoncus tincidunt id id tortor. Quisque molestie nisi sed ex venenatis vehicula. Sed molestie magna magna, a scelerisque diam iaculis et. Curabitur et mi et est finibus convallis. Sed eu nunc viverra, sagittis sem sed, bibendum purus. Etiam mi eros, facilisis id arcu ut, finibus lacinia est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum nisi dolor, sed vestibulum purus luctus vitae. Sed a metus nec massa semper convallis vel sit amet neque. Curabitur at ornare dui. Vivamus eu efficitur nisi.

            Suspendisse ac varius est. Proin quis massa a ex lacinia porttitor id ut libero. In odio sem, condimentum quis efficitur tincidunt, rutrum sit amet odio. Vestibulum posuere diam eget est ullamcorper pharetra nec a tortor. Etiam condimentum nunc id metus viverra posuere. Nulla faucibus dolor rutrum ante pulvinar, vel cursus orci sollicitudin. Donec vitae odio faucibus, consequat urna a, varius libero. Vivamus ut lorem nec orci maximus malesuada nec semper nibh. Donec consectetur massa elit, sed rutrum neque ullamcorper in. Nunc dictum tellus sed arcu convallis aliquet. Nullam tempor ultricies elit quis eleifend.
            
            Curabitur rutrum mollis ante a ultrices. Nam felis tellus, cursus sit amet feugiat et, fringilla sed diam. Maecenas at commodo est. In tincidunt augue vitae arcu tincidunt, sed sagittis enim varius. Nulla facilisi. Morbi semper, nibh vitae iaculis blandit, eros lectus volutpat dolor, quis imperdiet enim mi non ante. Nulla facilisi. Nulla tincidunt elit dui, a fermentum ex hendrerit elementum. Fusce iaculis purus ac bibendum malesuada. Phasellus sollicitudin, leo ut consequat dapibus, purus diam condimentum ipsum, in vulputate odio nisl non ex. Ut consectetur auctor diam id volutpat. Nulla diam magna, vehicula sit amet aliquet sit amet, tristique eget ante. Morbi gravida ut lacus eget ultrices. In ac sagittis libero. Nam ullamcorper neque tortor, nec tempor velit scelerisque et.
            
            Donec molestie molestie tortor. Phasellus vel dictum elit, et hendrerit justo. Suspendisse a massa non velit accumsan sodales. Morbi placerat id lacus vitae facilisis. Mauris rutrum congue ipsum, eu ornare magna suscipit quis. Cras sed massa id quam placerat elementum. Curabitur porttitor mauris at vulputate sollicitudin. Vestibulum imperdiet felis nec est viverra bibendum. Suspendisse sagittis dui ex, id bibendum diam mattis vitae. Ut dignissim lacinia libero, ac posuere dolor. Donec ac leo quis orci hendrerit fringilla. Sed vulputate congue quam id scelerisque. Phasellus porta tellus sed placerat tincidunt. Nam vulputate eu lorem eget suscipit.
            
            Sed vel nulla eu dui condimentum malesuada. Mauris tristique quis augue non placerat. Duis sed arcu sed mauris fringilla tempor. Mauris sed eros tincidunt, gravida erat vel, tincidunt mauris. Fusce euismod libero nec viverra maximus. Nulla tempus ipsum enim, et eleifend ex scelerisque in. Integer euismod mauris imperdiet dui placerat elementum. Phasellus elit felis, rhoncus vel mauris venenatis, suscipit tristique libero. Maecenas luctus vestibulum porttitor. Phasellus sollicitudin viverra velit ac pulvinar.");
            $projet->setImage("https://source.unsplash.com/random/800x600");
            $projet->setCreatedAt(new \DateTime('now' , new \DateTimeZone('Europe/Berlin') ));
            $manager->persist($projet);
        }
        $manager->flush();
    }
}
