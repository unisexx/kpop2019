<?php

namespace App\Http\Controllers;

use App\Model\Kpopnew;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use SEO;
use SEOMeta;
use OpenGraph;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $perPage = 9;
        $kpopnew = Kpopnew::where('status','1')->orderBy('id','desc')->simplePaginate($perPage);
        
        // seo
        SEO::setTitle('อัพเดทข่าวสารวงการบันเทิงเกาหลีล่าสุด');

        return view('home', compact('kpopnew'));
    }

    public function show($id)
    {
        $rs = Kpopnew::findOrFail($id);

        // seo
        SEO::setTitle($rs->title);
		SEO::setDescription(strip_tags($rs->detail));
        SEO::opengraph()->setUrl(url()->current());
        SEO::opengraph()->addProperty('image:alt', $rs->title);
		SEO::addImages(url("uploads/".$rs->image));
		SEO::twitter()->setSite('@kpoplover_th');
		SEOMeta::setKeywords('kpoplover, kpop, k-pop, เกาหลี, ติ่งเกาหลี, ไอดอล, ประเทศเกาหลี, นักแสดง, นักร้อง, บันเทิง, ข่าว, ซิบซิบ, หลุด, ชาวเน็ต');
		SEOMeta::addKeyword('kpoplover, kpop, k-pop, เกาหลี, ติ่งเกาหลี, ไอดอล, ประเทศเกาหลี, นักแสดง, นักร้อง, บันเทิง, ข่าว, ซิบซิบ, หลุด, ชาวเน็ต');
		OpenGraph::addProperty('image:width', '240');
        OpenGraph::addProperty('image:height', '240');
        
        return view('view', compact('rs'));
    }
}
