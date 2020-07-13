<?php

namespace App\Http\Controllers;

use App\LevelSkillUser;
use Illuminate\Http\Request;

class LevelSkillUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //on appel la class Level qui est une extension de la class Model qui recup automatiquement toutes les données de la table level puis on les mets dans la variable level
        $levelSkillUser = LevelSkillUser::all();
        return view('levelSkillUser.index', ['level_skill_user' => $levelSkillUser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(LevelSkillUser $levelSkillUser)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(LevelSkillUser $levelSkillUser)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,LevelSkillUser $levelSkillUser)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(LevelSkillUser $levelSkillUser)
    {
       
    }
}
