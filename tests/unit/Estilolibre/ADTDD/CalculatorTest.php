<?php

namespace UnitTest\Estilolibre\ADTDD;

/**
 * Description of CalculatorTest
 *
 * @author isidromerayo
 */
class CalculatorTest extends \PHPUnit_Framework_TestCase {
    
    private $calculator;
    public function setUp() {
        $this->calculator = new \Estilolibre\ADTDD\Calculator();
    }

    /** @test */
    public function add() {
        $result = $this->calculator->add(2, 2);
        $this->assertEquals(4, $result);
    }
    /** @test */
    public function addWithDifferentArguments() {
        $result = $this->calculator->add(2, 5);
        $this->assertEquals(7, $result);
    }
    /** @test */
    public function substract() {
        $result = $this->calculator->substract(5, 3);
        $this->assertEquals(2, $result);
    }
}
