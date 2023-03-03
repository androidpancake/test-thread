@extends('layouts.app')
@section('content')
<div class="container">
    @forelse($post as $data)
        <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title">{{ $data->title }}</h5>
                <p class="card-text">{{ $data->body }}</p>
            </div>
        </div>
    @empty
    @endforelse
</div>
@endsection