<?php

namespace Jimdo\Http;

class Session
{
    /** @var array*/
    private $data = [];

    /**
     * @param array $sessionData
     */
    public function __construct(array &$sessionData)
    {
        $this->data = &$sessionData;
    }

    /**
     * @param mixed $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param mixed $name
     */
    public function __get($name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        return null;
    }
}