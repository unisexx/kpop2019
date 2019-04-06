<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Kpopnew;

use DB;
use Goutte;
use Image;


class CrawlerController extends Controller
{

    public function test(){
        $crawler = Goutte::request('GET', 'http://koreaseries.fanthai.com/?p=53138');

        // หัวข้อ
        $title = trim($crawler->filter('#main .entry-title')->text());
        
        // เนื้อหา
        $xxx = "";
        $content = $crawler->filter('#main .entry-content p')->each(function ($node) use($xxx) {

            if ($node->filterXpath('//img')->count() > 0 ) { // ถ้าเป็นลิ้งค์รูป

                $path = $node->filterXpath('//img')->extract(array('src'));
                // dd($path[0]);

                dd(pathinfo($path[0]));
                $filename = basename($path[0]);
                // $filename = time();
                Image::make($path[0])->save(public_path('uploads/' . $filename));

                $xxx .= '<p>'.$node->filter('a')->attr('href').'<p>';
                $xxx .= '<p>'.$filename.'<p>';
                
            }else{
                $xxx .= '<p>'.$node->text().'<p>'; // ถ้าเป็นข้อความ
            }

            return $xxx;
        });

        echo join(" ",$content);
        // print_r($content);
    }
}
