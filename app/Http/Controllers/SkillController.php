<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // le modele,sert a interagir avec la base de données
        // le controller gere en fonction d ela route quel actionon va mener
        //on va chercher toutes les données dans la table skill 
        $skill = Skill::all();
        // on va chercher la vue dans laquel on veut afficher les resultat
        //dans les parametres on a le nom de la vue et les données qu'on veut afficher 
        // skill.index correspond au fichier index.blade.php qui est dans le dossier skill
        //pour le nom de clé skill dans le tableau asso cette clé skill va contenir le tableau des skills
        return view('skill.index', ['skills' => $skill]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = new Skill();
        $validatedData = $request->validate([
            'name' => 'required|unique:skills',
            'label' => 'required'
        ]);
        $skill->name = $validatedData['name'];
        $skill->label = $validatedData['label'];
        $skill->save();
        return redirect()->route('skills');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {   // on va aller dans les views chercher la methode show qui rend en parametre skill
        return view('skill.show', ['skill' => $skill]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('skill.edit', ['skill' => $skill]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
       // validate est une fonction native
        $validatedData = $request->validate([
            'name' => 'required|unique:skills',
            'label' => 'required'
        ]);
        $skill->name = $validatedData['name'];
        $skill->label = $validatedData['label'];
        $skill->update();
        // on revient sur la route skill avec les données actualisées
        return redirect()->route('skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skills');
    }
}
