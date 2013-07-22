<?php
namespace TweeProvider\Data;
use PHPUnit_Framework_TestCase;
include_once '_files/SetterGetterTraitMock.php';

class ConstructorTraitTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $mock = new SetterGetterTraitTest\SetterGetterTraitMock(array(
            'abc' => '123',
        ));
        $this->assertEquals('123', $mock->abc);
        $this->assertNull($mock->nonexists);
    }
}