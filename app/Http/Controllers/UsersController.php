<?php

namespace App\Http\Controllers;


use App\Models\Nom;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    function show()
    {
    $noms = Nom::all();
    //dd($noms);
    return view('page_principal', ['variable1' => $noms]);
    }
    
    function add(Request $request)
    {
        $validated = $request->validate([
        'nom' => 'required|alpha|max:40',
        'prenom' => 'required|alpha|max:40',
        'age' => 'bail|required|integer|gte:0|lte:120',
        ]);


        $user = new Nom;
        $user->nom = $validated['nom'];
        $user->prenom = $validated['prenom'];
        $user->age = $validated['age'];
        //dd($request);
        $user->save();
        return redirect()->route('accueil')->with("succes","L'utilisateur $user->prenom bien été ajouté !");
    }
    
    function supp(Request $request,$id)
    {
        $user = Nom::find($id);
        $user_temp = $user->prenom;
        if($request->submitButton == "oui"){
        
        
        $user->delete();
        
        return redirect()->route('accueil')->with('succés',"L'utilisateur $user_temp a bien été supprimé  !");
        }

        return redirect()->route('accueil')->with("echec", "L'utilisateur $user_temp n'a pas été supprimé ! ");
    }

    function surete(Request $request)
    {
        $id = $request->id;
        $user = Nom::find($id);
        return view('page_verification', ['user' => $user]);
    }

    function modifier(Request $request)
    {
        $id = $request->id;
        $user = Nom::find($id);
        
       return view('modifier', ['user'=>$user]);
    }

    function maj(Request $request,$id)
    {
        $validated = $request->validate([
        'nom' => 'required|alpha|max:40',
        'prenom' => 'required|alpha|max:40',
        'age' => 'bail|required|integer|gte:0|lte:120',
        ]);

        $user1 =Nom::where('id' , $request->id)->first();
        
        $user1->nom = request('nom');
        $user1->prenom = request('prenom');
        $user1->age = request('age');

        $user1->save();

        return redirect()->route('accueil');
    }

}
