<?php
namespace App\Http\Controllers;
use Invisnik\LaravelSteamInventory\SteamInventory;

class InventoryController extends Controller
{
    /**
     * @var SteamInventory
     */
    private $steamInventory;

    public function __construct(SteamInventory $steamInventory)
    {
        $this->steamInventory = $steamInventory;
    }

    public function index()
    {
         
        $user = \App\User::find(2);
        
        
	    // $user->steamid = '765611983099166690';
    	$items = $this->steamInventory
		->loadInventory($user->steamid, 730)->getInventoryWithDescriptions();
        $cont = count($items);
        
        foreach($items as $i){
            echo $items[$cont];
            $cont --;
        }
            //  echo '<pre>';
            //  print_r($items[$i]);
            //  echo '</pre>';
        
        
        //    echo '<pre>';
        //     print_r($items);
        //     echo '</pre>';
        exit;
        
	 return view('inventory.inventory', compact('all'));
    }
}