<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //on appel la class Level qui est une extension de la class Model qui recup automatiquement toutes les données de la table level puis on les mets dans la variable level
        $level = Level::all();
        return view('level.index', ['levels' => $level]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('level.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $level = new Level();
        $validatedData = $request->validate([
            'level_label' => 'required|unique:levels',
        ]);
        $level->level_label = $validatedData['level_label'];
        $level->save();
        return redirect()->route('levels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        // la methode show va retourner la vue show.blade.php qui se trouve dans le repertoire ( dossier) ressources/views
        // on passe en parametre a notre vue les données qu'on veut pouvoir aficher
        return view('level.show', ["level" => $level]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        return view('level.edit', ['level' => $level]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        // $level = new Level();
        $validatedData = $request->validate([
            'level_label' => 'required|unique:levels',
        ]);
        $level->level_label = $validatedData['level_label'];
        $level->update();
        return redirect()->route('levels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        $level->delete();
        return redirect()->route('levels');
    }
}
