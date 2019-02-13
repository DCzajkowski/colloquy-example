<?php

namespace App\Http\Controllers;

use App\TicketsForm;
use App\ColloquyContexts;
use Illuminate\Http\Request;

/** @ColloquyContext('session') */
class TicketController extends Controller
{
    use ColloquyContexts;

    /** @ColloquyPersist */
    private $form;

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    private function getStartTicketFlow()
    {
        if ($this->form && $this->form->step !== 0) {
            $routeName = ['getPickSeats', 'getPickTickets', 'getUserDetails', 'getPayment', 'getDone'][$this->form->step];

            return redirect()->route($routeName);
        }

        return redirect()->route('getPickSeats');
    }

    /** @ColloquyBegin */
    private function getPickSeats()
    {
        $this->form = new TicketsForm;

        return view('tickets.pick-seats');
    }

    private function postPickSeats()
    {
        $this->form->step = 1;
        $this->form->seats = $this->request->seats;

        return redirect()->route('getPickTickets');
    }

    private function getPickTickets()
    {
        return view('tickets.pick-tickets');
    }

    private function postPickTickets()
    {
        $this->form->step += 1;
        $this->form->ticketType = $this->request->type;

        return redirect()->route('getUserDetails');
    }

    private function getUserDetails()
    {
        return view('tickets.user-details');
    }

    private function postUserDetails()
    {
        $this->form->step += 1;
        $this->form->user->name = $this->request->name;
        $this->form->user->email = $this->request->email;

        return redirect()->route('getPayment');
    }

    private function getPayment()
    {
        return view('tickets.payment');
    }

    private function postPayment()
    {
        $this->form->step += 1;
        $this->form->paid = $this->request->paid;

        return redirect()->route('getDone');
    }

    /** @ColloquyEnd */
    private function getDone()
    {
        dd($this->form);
    }
}
