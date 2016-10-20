<?php
namespace AppBundle\DataFixtures\ORM;

Use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;


class AppFixtures extends DataFixtureLoader
{

    protected function getFixtures()
    {
       return array(
           __DIR__ . '/giveaways.yml',
       );
    }
}