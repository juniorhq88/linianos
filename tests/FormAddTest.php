<?php

namespace Tests;

use Linio\Form;
use PHPUnit\Framework\TestCase;


class FormAddTest extends  TestCase
{

    private $_Form;


    public function setUp(){

        $this ->_Form = new Form();
    }

    public function  testThree(){

        $this->assertEquals(0,$this->_Form->calcRemainder(3,3));
        $this->assertEquals(0,$this->_Form->calcRemainder(12,3));
        $this->assertEquals(0,$this->_Form->calcRemainder(27,3));
    }

    public function  testFive(){

        $this->assertEquals(0,$this->_Form->calcRemainder(5,5));
        $this->assertEquals(0,$this->_Form->calcRemainder(50,5));
        $this->assertEquals(0,$this->_Form->calcRemainder(50,5));
    }

    public function  testThreeAndFive(){

        $this->assertEquals(0,$this->_Form->addRemainder(0,0));
        $this->assertEquals(0,$this->_Form->addRemainder(($this->_Form->calcRemainder(15,5)),($this->_Form->calcRemainder(15,3))));


    }

    public function testNone(){

        $this->assertNotEquals(0,$this->_Form->calcRemainder(4,3));
        $this->assertNotEquals(0,$this->_Form->calcRemainder(7,5));
        $this->assertNotEquals(0,$this->_Form->addRemainder(1,0));
        $this->assertNotEquals(0,$this->_Form->addRemainder(($this->_Form->calcRemainder(17,5)),($this->_Form->calcRemainder(17,3))));
    }
}
