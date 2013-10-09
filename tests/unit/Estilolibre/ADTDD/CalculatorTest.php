<?php

namespace UnitTest\Estilolibre\ADTDD;

/**
 * Description of CalculatorTest
 *
 * @author isidromerayo
 */
class CalculatorTest extends \PHPUnit_Framework_TestCase {
    /** @test */
    public function add() {
        $calculator = new \Estilolibre\ADTDD\Calculator();
        $result = $calculator->add(2, 2);
        $this->assertEquals(4, $result);
    }
}