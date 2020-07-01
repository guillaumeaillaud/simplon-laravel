@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>Liste des utilisateurs</p>
                </div>
                @foreach ($users as $user)
                <div class="card-body">
                    <div class="mt-4">
                            <p>User name {{ $user->name }}</p>
                            <p>User email {{ $user->email }}</p>
                        </div>
                    </div>
                    @endforeach
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <p>Liste des skills</p>
                </div>
                @foreach ($skills as $skill)
                <div class="card-body">
                    <div class="mt-4">
                            <p>Skill name {{ $skill->name }}</p>
                        </div>
                    </div>                    
                    @endforeach
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <p>Liste des competences</p>
                </div>
                @foreach ($skills as $skill)
                <div class="card-body">
                    <div class="mt-4">
                            <p>Nom de la compétence {{ $skill->name }}</p>
                        </div>
                    </div>
                    @endforeach
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <p>Liste des competences pour l'utilisateur {{ $skills_user_level[0]->username }}</p>
                </div>
                <div class="card-body">
                    <div class="mt-4">
                        @foreach ($skills_user_level as $skill_user_level)
                            <div>
                                <p>Nom de la compétence : {{ $skill_user_level->name }}</p>
                                <p>Niveau : {{ $skill_user_level->level_label }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
