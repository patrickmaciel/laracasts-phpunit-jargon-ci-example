<?php

namespace App;

class User
{
    protected $name;
    /**
     * @var true
     */
    protected bool $subscribed = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isSubscribed()
    {
        return $this->subscribed;
    }

    public function markAsSubscribed()
    {
        $this->subscribed = true;
    }
}