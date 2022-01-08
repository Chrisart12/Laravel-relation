<?php

namespace App\Http\Controllers;

use App\Adress;
use App\Client;
use App\Commande;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
//    public function client()
//    {
//         $clients = Client::select('clients.firstname', 'clients.lastname', 'commandes.name')
//                     ->join('commandes', 'clients.id', '=', 'commandes.client_id')
//                     ->get();
//                     dd($clients);
//        // return "Je suis là";
//    }

   public function commande()
   {
        $commandes = Commande::select('commandes.name', 'adresses.ville', 'adresses.code_postal')
                    ->join('adresses', 'commandes.client_id', '=', 'adresses.client_id')
                    ->get(); 
                    dd($commandes);

    //return "Je ne  suis pas là";
   }

   public function adresse()
   {
     $adresses = Adress::select('adresses.ville', 'adresses.code_postal', 'commandes.name')
        ->join('commandes', 'adresses.client_id', '=', 'commandes.client_id')
                ->get();
                dd($adresses);
     //return "J'ai dit là";
   }
}
