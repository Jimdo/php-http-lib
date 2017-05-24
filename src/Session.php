<?php

namespace Jimdo\Http;

class Session
{
    /** @var array*/
    private $data = [];

    /**
     * @param array $sessionData
     */
    public function __construct(array $sessionData)
    {
        if ($sessionData !== []) {
            foreach ($sessionData as $key => $value) {

            // $key defines the proberty and $value fill the proberty
            $this->__set($key, $value);
            }
        }
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
     * @return mixed
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }
}