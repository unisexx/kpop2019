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

        // วนลูปหา link ของเนื้อหา
        $crawler_list = Goutte::request('GET', 'http://koreaseries.fanthai.com/?cat=4691');
        $crawler_list->filter('h2.entry-title a')->each(function ($node) {
            
            // url
            $url = $node->attr('href');
        });

        // $crawler = Goutte::request('GET', 'http://koreaseries.fanthai.com/?p=53138');

        // // หัวข้อ
        // $title = trim($crawler->filter('#main .entry-title')->text());
        
        // // เนื้อหา (วนลูปเก็บตาม p)
        // $paragraph = "";
        // $content = $crawler->filter('#main .entry-content p')->each(function ($node) use($paragraph) {

        //     if ($node->filterXpath('//img')->count() > 0 ) { // ถ้าเป็นลิ้งค์รูป

        //         $path = $node->filterXpath('//img')->extract(array('src'));
        //         // dd($path[0]);
        //         // dd(pathinfo($path[0],PATHINFO_EXTENSION));
        //         // $filename = basename($path[0]);

        //         $imgPath = $path[0];
        //         $name = pathinfo($imgPath, PATHINFO_FILENAME);
        //         $extension = pathinfo($imgPath, PATHINFO_EXTENSION);
        //         $filename = uniqid($name.'_').'.'.$extension;
        //         // dd($filename);

        //         //สร้างรูปภาพ เซฟลงโฟลเดอร์ uploads
        //         Image::make($path[0])->save(public_path('uploads/' . $filename));

        //         // $xxx .= '<p>'.$node->filter('a')->attr('href').'<p>';
        //         $paragraph .= '<p><img src="'.url('uploads/'.$filename).'"><p>';
                
        //     }else{
        //         $paragraph .= '<p>'.$node->text().'<p>'; // ถ้าเป็นข้อความ
        //     }

        //     return $paragraph;
        // });

        // // echo join(" ",$content);
        // $detail = join(" ",$content);

        // // รูปหน้าปก
        // $image =  basename(catch_that_image($detail));

        // // insert ลง db
        // DB::table('kpop_news')->insert(
        //     [
        //         'image'  => $image,
        //         'title'  => $title,
        //         'detail' => $detail,
        //         'url'    => '',
        //         'status' => '1',
        //     ]
        // );
    }
}
