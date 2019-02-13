<?php

namespace App;

use App\GenericUser as User;

class TicketsForm
{
    public $user;
    public $seats;
    public $ticketType;
    public $paid;
    public $step = 0;

    public function __construct()
    {
        $this->user = new User;
    }
}
