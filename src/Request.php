<?php

namespace Jimdo\Http;

class Request
{
    /** @var string[] */
    private $queryParams;

    /** @var string[] */
    private $formData;

    /** @var Session */
    private $session;

    /**
     * @param string[] $queryParams
     * @param string[] $formData
     * @param Session
     */
    public function __construct(array $queryParams, array $formData, Session $session)
    {
        $this->queryParams = $queryParams;
        $this->formData = $formData;
        $this->session = $session;
    }

    /**
     * @param string $key
     * @param string $default
     * @return mixed
     */
    public function getQueryParams(string $key = null, string $default = null)
    {
        if ($key !== null) {
            if (array_key_exists($key, $this->queryParams) === false) {
                return $default;
            }
            return $this->queryParams[$key];
        }
        return $this->queryParams;
    }

    /**
     * @param string $key
     * @param string $default
     * @return mixed
     */
    public function getFormData(string $key = null, string $default = null)
    {
        if ($key !== null) {
            if (array_key_exists($key, $this->formData) === false) {
                return $default;
            }
            return $this->formData[$key];
        }
        return $this->formData;
    }

    /**
     * @param string $key
     * @param string $default
     * @return mixed
     */
    public function getSessionData(string $key = null, string $default = null)
    {
        if ($key !== null) {
            if (array_key_exists($key, $this->sessionData) === false) {
                return $default;
            }
            return $this->sessionData[$key];
        }
        return $this->sessionData;
    }
}