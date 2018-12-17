<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function getPickSeats()
    {
        return view('tickets.pick-seats');
    }

    public function postPickSeats()
    {

    }

    public function getPickTickets()
    {
        return view('tickets.pick-tickets');
    }

    public function postPickTickets()
    {

    }

    public function getUserDetails()
    {
        return view('tickets.user-details');
    }

    public function postUserDetails()
    {

    }

    public function getPayment()
    {
        return view('tickets.payment');
    }

    public function postPayment()
    {

    }

    public function getDone()
    {
        return view('tickets.done');
    }

    public function postDone()
    {

    }
}
