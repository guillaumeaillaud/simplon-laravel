<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // on crée le schema de validation des données formulaire
        $validatedData = $request->validate([
            "name" => "required",
            'email' => 'required'
        ]);
        // on affecte les données validées au modele user
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        // on sauvegarde les modifs ds la base de données
        $user->update();
        //on redirige vers la route home en passant un message de confirmatio qui sera stocké ds la session 
        // (la session est disponible a travers toute l'appli pour un user connecté)
        // 1er parametre : type de message (attention a la casse)
        // 2eme parametre : message
        return redirect()->route('home')->with("success", "profile updated mofo !");
    }

}
