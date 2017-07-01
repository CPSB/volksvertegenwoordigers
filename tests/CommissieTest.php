<?php

namespace ActivismeBe\Parlement\Tests;

use ActivismeBe\Parlement\Commissie;
use PHPUnit\Framework\TestCase;

class CommissieTest extends TestCase
{
    public function testCommissieHuidige()
    {
        $libraryInit = new Commissie();
        $data        = json_decode($libraryInit->huidige(), true);

        $this->assertArrayhasKey('disclaimer', $data);
        $this->assertArrayHasKey('titel', $data['items'][1]['commissie']);
        $this->assertArrayHasKey('id', $data['items'][1]['commissie']);
        $this->assertArrayHasKey('datumvan', $data['items'][1]['commissie']);
        $this->assertArrayHasKey('link',  $data['items'][1]['commissie']);

        $this->assertArrayHasKey('href', $data['items'][1]['commissie']['link'][0]);
        $this->assertArrayHasKey('rel', $data['items'][1]['commissie']['link'][0]);
    }

    public function testCommissieLijstOneId()
    {
        $libraryInit = new Commissie();
        $data        = json_decode($libraryInit->lijst('948588'), true);

        $this->assertArrayhasKey('disclaimer', $data);
        $this->assertArrayHasKey('titel', $data['items'][0]['commissie']);
        $this->assertArrayHasKey('id', $data['items'][0]['commissie']);
        $this->assertArrayHasKey('datumvan', $data['items'][0]['commissie']);
        $this->assertArrayHasKey('link',  $data['items'][0]['commissie']);

        $this->assertArrayHasKey('href', $data['items'][0]['commissie']['link'][0]);
        $this->assertArrayHasKey('rel', $data['items'][0]['commissie']['link'][0]);
    }

    public function testComissieNoValidId()
    {

    }
}
