<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $loggedUser = auth()->user();

        $users = DB::table('users')->get();
        $skills = DB::table("skills")->get();

        // $skills_user_level = DB::table("level_skill_user")->where("user_id", "=", $loggedUser->id)->get();

        $skills_user_level = DB::table('level_skill_user')
        ->select('users.name as username','skills.name', 'levels.level_label')
        ->join('users','users.id','=',$loggedUser->id)
        ->join("skills", 'skills.id', "=", "skill_id")
        ->join("levels", 'levels.id', "=", "level_id")
        ->where("user_id", "=", $loggedUser->id)
        ->get();

        // dd($skills_user_level);



        return view('home', [
            "users" => $users,
            "skills" => $skills,
            "skills_user_level" => $skills_user_level
        ]);
    }

}
