<?php


namespace App\Models;


use Exception;

class DTO implements \Serializable, \JsonSerializable
{
    private $errorCode;
    private $errorMessage;
    private $data;

    /**
     * DTO constructor.
     * @param $errorCode
     * @param $errorMessage
     * @param $data
     */
    public function __construct($errorCode, $errorMessage, $data)
    {
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->data = $data;
    }

    public function jsonSerialize(){
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param mixed $errorCode
     */
    public function setErrorCode($errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return mixed
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param mixed $errorMessage
     */
    public function setErrorMessage($errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

    public function serialize()
    {
        return $this->serialize();
    }

    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }
}
