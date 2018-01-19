<?php
namespace Supdev\Calendar;

class MyClass
{
    /**
     * @var string
     */
    protected $property;

    public function __construct(string $property)
    {
        $this->setProperty($property);
    }

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @param string $property
     * @return MyClass
     */
    public function setProperty(string $property): MyClass
    {
        $this->property = $property;
        return $this;
    }


}