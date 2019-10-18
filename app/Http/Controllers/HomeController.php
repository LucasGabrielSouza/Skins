<?php
namespace App\Http\Controllers;
use App\Skins;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $url = "https://www.hltv.org/rss/news";
        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
    
        $data = curl_exec($ch);
        $title = [];
        curl_close($ch);
    
        $xml = simplexml_load_string($data);

        // 

        $skins = Skins::get();


        return view('Home.Home', compact('xml', 'skins' ));
    }


public function news(){
    return view('News.News');
}

}