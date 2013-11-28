<?php

namespace Geekhub\HomeBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;

class SimpleService
{
    protected $name;

    public function __construct($name)
     {
         $this->name = $name;
     }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function show()
    {
        return $this->name;
    }

}
