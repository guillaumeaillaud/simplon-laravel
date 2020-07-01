@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $skill->name }}</div>
                <div class="card-body">
                    vous avez la skill : {{  $skill->label }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection