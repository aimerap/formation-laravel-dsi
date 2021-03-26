<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function afficheAcceuil()
    {
        // Fonction retournant une page avec des params
        return view('pages.front-office.welcome',
        [
           'nomSite' => 'Service en ligne de mon Ministère',
           'nomMinistere' => 'Ministere de Laravel au Burkina Faso',
        ]
        );
    }

    public function afficheProcedure($param)
    {
        // Fonction retournant une page avec des params recemment entrées
        return view('pages.front-office.procedure',
        [
            'parametre' => $param,
            'question' => 'baba',
        ]);
    }

    // fonction pour creer un nouveau produit - PREMIERE APPROCHE
    public function ajoutProduit()
    {
        $produit = new Produit();

        $produit->uuid = Str::uuid();
        $produit->designation = 'Tomate';
        $produit->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque deleniti quisquam beatae deserunt dicta ipsam tenetur at necessitatibus in, eligendi voluptatibus doloribus earum sed error maiores nam possimus sunt assumenda?';
        $produit->prix = '1000';
        $produit->like = '21';
        $produit->pays_source = 'Burkina Faso';
        $produit->poids = '45.10';

        $produit->save();
    }

    // fonction pour creer un nouveau produit - DEUXIEME APPROCHE
    public function ajoutProduitEncore()
    {
        Produit::create(
            [
                'uuid' => Str::uuid(),
                'designation' => 'Mangue',
                'description' => 'Mangue bien grosse et sucrée! Yaa Proprè !',
                'prix' => 1500,
                'like' => 63,
                'pays_source' => 'Togo',
                'poids' => 89.5,
            ]
        );
    }

    public function getList()
    {
        $produit = Produit::first();
        $user = User::first();
        $produit->users()->attach($user);
        $users = $produit->users;
        $produits = $user->produits;
        dd($produits);

        return view('pages.front-office.list-produits', [
            'lesproduits' => Produit::paginate(6),
            'lescommande' => Commande::paginate(6),
        ]);
    }

    public function modifierProduit($id)
    {
        $produitModifie = Produit::where('id', $id)->update([
            'designation' => 'Orange',
            'description' => 'La description de Orange',
        ]);
    }

    public function supprimer($id)
    {
        Produit::destroy($id);

        return redirect()->back()->with('statut', 'Supprimer avec succes');
    }

    public function deletecommande($id)
    {
        Commande::destroy($id);

        return redirect()->back()->with('statut', 'Commande a été supprimé avec succes');
    }

    public function ajoutercommande($id)
    {
        $commande = new Commande();
        $commande->produit_id = $id;
        $commande->uuid = Str::uuid();
        $commande->save();
        // dd($commande);
        return redirect()->back()->with('statut', 'Commande ajouté avec succes !');
    }
}
