<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GrahamCampbell\GitHub\Facades\GitHub;

class PartyTest extends Controller
{
    public function index() {
        $lastCommitTime =  GitHub::user()->events('rickoneeleven')[0]["created_at"];

        $client = new \Phue\Client('192.168.1.43', env("PHILIPS_BRIDGE_USERNAME"));
        $lights = $client->getLights();
        $light = $lights[4]; //stripper

        if (strtotime($lastCommitTime) <= strtotime('-36 hours')) {
            if($light->isOn()) { //no commit last 24 hours
                $light->setHue("4541 4");
                $light->setBrightness(180); 
            }
        } else { //commit in last 24 hours
            $light->setOn(True);
            $light->setBrightness(180);
            $light->setRGB(138, 245, 66); //green
        }
    }
    
}