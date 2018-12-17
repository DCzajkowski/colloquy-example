<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketsForm;

class TicketController extends Controller
{
    private $form;
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getPickSeats()
    {
        $this->form = new TicketsForm;

        return view('tickets.pick-seats');
    }

    public function postPickSeats()
    {
        $this->form->seats = $this->request->seats;

        return redirect()->route('getPickTickets');
    }

    public function getPickTickets()
    {
        return view('tickets.pick-tickets');
    }

    public function postPickTickets()
    {
        $this->form->ticketType = $this->request->type;

        return redirect()->route('getUserDetails');
    }

    public function getUserDetails()
    {
        return view('tickets.user-details');
    }

    public function postUserDetails()
    {
        $this->form->user->name = $this->request->name;
        $this->form->user->email = $this->request->email;

        return redirect()->route('getPayment');
    }

    public function getPayment()
    {
        return view('tickets.payment');
    }

    public function postPayment()
    {
        $this->form->paid = $this->request->paid;

        return redirect()->route('getDone');
    }

    public function getDone()
    {
        dd($this->form);
    }
}
