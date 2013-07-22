<?php
namespace TweeProvider\Data;

trait ConstructorTrait
{
    public function __construct(array $data = array())
    {
        $this->data = $data;
    }
}