<?php
namespace TweeProvider\Data;
use PHPUnit_Framework_TestCase;
include_once '_files/SetterGetterTraitMock.php';

class SetterGetterTraitTest extends PHPUnit_Framework_TestCase
{
    public function testSetGet()
    {
        $mock = new SetterGetterTraitTest\SetterGetterTraitMock(array());
        $mock->abc = '123';
        $this->assertEquals('123', $mock->abc);
        $this->assertNull($mock->nonexists);
    }
}