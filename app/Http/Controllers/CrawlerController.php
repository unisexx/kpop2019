<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Kpopnew;

use DB;
use Goutte;


class CrawlerController extends Controller
{

    public function test(){
        $crawler = Goutte::request('GET', 'http://koreaseries.fanthai.com/?p=53138');
        print_r($crawler);
    }
}
