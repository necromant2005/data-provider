<?php
namespace TweeProvider\Data;
use PHPUnit_Framework_TestCase;
include_once '_files/SetterGetterTraitMock.php';

class PropertyTraitTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $mock = new SetterGetterTraitTest\SetterGetterTraitMock(array(
            'abc' => '123',
        ));
        $mock->foo = 'bar';
        $this->assertEquals('123', $mock->abc);
        $this->assertEquals('bar', $mock->foo);
        $this->assertNull($mock->nonexists);
    }
}