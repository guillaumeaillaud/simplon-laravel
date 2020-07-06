@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit a skill') }} (skill number {{$skill->id}}) </div>

                <div class="card-body">
                    <!--  on va traiter les données envoyées dans la route skills.update qui est dans le fichier web (qui contient les routes)-->
                    <!--  dans le fichier web la route dirige vers le fichier skillController qui appele la methode-->
                    <form method="POST" action="{{ route('skills.update', $skill)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Skill name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') 
                                        is-invalid @enderror" name="name" value="{{ $skill->name }}" 
                                            required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="label" class="col-md-4 col-form-label text-md-right">{{ __('Label') }}</label>

                            <div class="col-md-6">
                                <input id="label" type="text" class="form-control @error('label') 
                                    is-invalid @enderror" name="label" value="{{ $skill->label }}"  
                                    required autocomplete="label">

                                @error('label')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save skill') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection