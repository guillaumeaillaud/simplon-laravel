@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update profile</div>
                <div class="card-body">
                    {{--set up flash message for user feedback (message de confirmation du update user)--}}
                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    {{-- on check si le user est connecte--}}
                    @if (Auth::user())
                    {{--il faut donner a l'attribut action du formulaire la reference d'une route--}}
                    <form action="{{ route('user.update', ['user' => Auth::user()])}}" method="post">
                        {{-- on check si on a bien le token d'identification de user avec le csrf--}}
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('User name')}}</label>
                            <input type="text" name="name" id="name" class="form-control" @error('name') is-invalid @enderror required autocomplete="name" autofocus value="{{ Auth::user()->name}}">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{__('User email')}}</label>
                            <input type="email" name="email" id="email" class="form-control" @error('email') is-invalid @enderror required autocomplete="email" autofocus value="{{ Auth::user()->email}}">
                        </div>
                        <div class="form groupe">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update user') }}
                            </button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection