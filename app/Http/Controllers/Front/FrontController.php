<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home.home');
    }

    public function installations()
    {
        return view('front.installations.installations');
    }

    public function rooms()
    {
        return view('front.rooms.rooms');
    }

    public function visit()
    {
        return view('front.visit.visit');
    }

    public function services()
    {
        return view('front.services.services');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }

    public function eventContact()
    {
        return view('front.event-contact.contact');
    }

    public function restaurantMenu()
    {
        return view('front.restaurant-menu.menu');
    }

    public function restaurantMenuRoomService()
    {
        return view('front.restaurant-menu.menu/room-service');
    }
}
