<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

public function newsIndex()
{
    $url = "https://www.hltv.org/rss/news";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    $data = curl_exec($ch);
    $title = [];
    curl_close($ch);

    $xml = simplexml_load_string($data);
    
   
  
        
    return view('News.News', compact('xml'));
}
}
