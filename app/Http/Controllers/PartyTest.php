<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GrahamCampbell\GitHub\Facades\GitHub;

class PartyTest extends Controller
{
    public function index() {
        //dd(GitHub::repo()->show('rickoneeleven', 'pinescore_engine'));
        dd(GitHub::user()->show('rickoneeleven'));
        //$client->api('user')->show('KnpLabs');
    }
    
}
