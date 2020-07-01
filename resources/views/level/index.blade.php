
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($levels as $level)
            <div class="card">
                <div class="card-header">{{ $level->id }}</div>

                <div class="card-body">
                    {{  $level->level_label }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection