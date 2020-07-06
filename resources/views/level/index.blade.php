@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($levels as $level)
            <div class="card">
                <div class="card-header">{{ $level->id }}</div>
                <div class="card-body">
                    {{ $level->level_label }}
                    <div class="row align-items-center">
                        <a href="{{ route('levels.show', ['level' => $level])}}" class="btn btn-dark">View</a>
                        <a href="{{ route('levels.edit', ['level' => $level])}}" class="btn btn-success">Edit</a>
                        {{-- on fait un formulaire car c'est le bouton qui va faire une action--}}
                        <form method="POST" action="{{action('LevelController@destroy', ['level'=> $level])}}">
                            {{-- csrf est une protection contre les attaques --}}
                            @csrf
                            {{-- on specifie que la method HTTP est delete --}}
                            @method('DELETE')
                            {{-- la directive @method permet de simuler une requete http autre que GET ou POST
                                elle ajour automatiquement pour vous dans le formulaire un input de type hidden
                                qui aura pour name =_method" et poour value le nom de la requete HTTP(PUT, PATCH, DELETE...)--}}
                            <button class="btn btn-md btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <br><a href="{{route('levels.create')}}" class="btn btn btn-success">Add level</a>
        </div>
    </div>
</div>
@endsection