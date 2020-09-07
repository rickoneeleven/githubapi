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

        //if (strtotime($lastCommitTime) <= strtotime('-12 hours')) {
        if(date('Ymd') != date('Ymd', strtotime($lastCommitTime))) {
            if($light->isOn()) { //no commit today
                $light->setHue("4541 4");
                $light->setBrightness(180); 
            }
        } else { //commit today
            $light->setOn(True);
            $light->setBrightness(180);
            $light->setRGB(138, 245, 66); //green
        }
    }

    
    
}