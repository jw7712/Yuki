<?php

namespace FunkyTime;


class ResponseException extends \Exception
{
    private $repsonse = '';

    public function __construct($message, $repsonse)
    {
        $this->repsonse = $repsonse;
        parent::__construct($message);
    }

    public function getResponse()
    {
        return $this->repsonse;
    }
}
