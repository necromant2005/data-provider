<?php
namespace TweeProvider\Data;

trait SetterGetterTrait
{
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return array_key_exists($name, $this->data) ? $this->data[$name] : null;
    }
}