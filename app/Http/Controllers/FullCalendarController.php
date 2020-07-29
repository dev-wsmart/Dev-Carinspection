<?php

namespace App\Http\Controllers;


use App\add_inspection_car;
use Calendar;
use App\Event;
use Illuminate\Http\Request;
use Redirect,Response;

class FullCalendarController extends Controller
{
    public function index()
    {
      return view('fullcalendar');

    }


}
