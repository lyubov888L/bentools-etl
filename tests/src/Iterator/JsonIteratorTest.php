<?php

namespace BenTools\ETL\Tests\Iterator;

use BenTools\ETL\Iterator\JsonIterator;
use BenTools\ETL\Tests\TestSuite;
use PHPUnit\Framework\TestCase;

class JsonIteratorTest extends TestCase
{

    public function testIterator()
    {
        $json     = file_get_contents(TestSuite::getDataFile('dictators.json'));
        $iterator = new JsonIterator($json);
        $this->assertEquals([
            'usa'    =>
                [
                    'country' => 'USA',
                    'name'    => 'Donald Trump',
                ],
            'russia' =>
                [
                    'country' => 'Russia',
                    'name'    => 'Vladimir Poutine',
                ],
        ], iterator_to_array($iterator));
    }
}