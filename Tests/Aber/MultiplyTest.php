<?php

require_once("../../src/Multiply.php");

class AberTest extends PHPUnit_Framework_TestCase
{

    /* @var $aber Multiply */
    private $multiplyer;

    public function setUp()
    {
        $this->aber = new Aber();
    }

    public function testMultiply()
    {
        $this->assertEquals(4, $this->multiplyer->multiply(2, 2), "no i dupa");
    }
}
