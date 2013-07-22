<?php
namespace TweeProvider\Data;

trait ConstructorTrait
{
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}