<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GrahamCampbell\GitHub\Facades\GitHub;

class PartyTest extends Controller
{
    public function index() {
        //dd(GitHub::repo()->show('rickoneeleven', 'pinescore_engine'));

        //dd(GitHub::user()->events('rickoneeleven'));
        echo GitHub::user()->events('rickoneeleven')[0]["created_at"];
        
        
        //$json = file_get_contents("https://api.github.com/users/rickoneeleven/events");
        //$data = json_decode($json, true);
        //dd($data);

        //$client->api('user')->show('KnpLabs');
    }
    
}
