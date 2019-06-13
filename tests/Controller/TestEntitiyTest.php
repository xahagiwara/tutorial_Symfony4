<?php

namespace App\Tests\Controller;

use App\Entity\TestEntity;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestEntitiyTest extends WebTestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->loadFixtureFiles([
            __DIR__ . '/../Fixtures/testEntity_test.yml',
        ]);
    }


    public function testShowPost()
    {
        $em = static::getContainer()->get('doctrine')->getManager();

        $items = $em->getRepository(TestEntity::class)->findAll();
        foreach ($items as $item) {
            echo get_class($item) . PHP_EOL;
            echo sprintf('%s %s',
                    $item->getName(),
                    $item->getPrice()) . PHP_EOL;
        }
    }
}