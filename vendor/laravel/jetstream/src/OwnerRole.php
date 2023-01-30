<?php

namespace Laravel\Jetstream;

class Ownerrolextends role
{

    public function __construct()
    {
        parent::__construct('owner', 'Owner', ['*']);
    }
}
