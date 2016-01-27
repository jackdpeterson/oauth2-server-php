<?php
namespace OAuth2\ObserverPattern;

class Oauth2ObservableEvent
{

    protected $type;

    protected $message;

    protected $details;

    public function __construct($type, $message, $details = null)
    {
        $this->type = $type;
        $this->message = $message;
        $this->details = $details;
    }

    /**
     *
     * @return the $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @return the $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     *
     * @return the $details
     */
    public function getDetails()
    {
        return $this->details;
    }
}