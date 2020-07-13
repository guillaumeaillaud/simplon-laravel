@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($level_skill_user as $lSu)
            <div class="card">
                <div class="card-header">Compétences de tous les utilisateurs :</div>
                <div class="card-body">
                    <div>
                     {{ "id de l'utilisateur : "}}   {{ $lSu->user_id}}
                    </div>
                    <div>
                        {{ "id de la competence : "}} {{ $lSu->skill_id}}
                    </div>
                    <div>
                        {{ "id du level : "}} {{ $lSu->level_id}}
                    </div>
                    <div>
                        {{ "id du level : "}} {{ $lSu->users}}
                    </div>
                    <div class="row align-items-center">
                        <a href="{{ route('level_skill_user')}}">View</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection