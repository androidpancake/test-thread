@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Post') }}
                </div>
            </div>
            @foreach($post as $data)
                <div class="card my-2">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <p>{{ $data->user->name }}</p>  
                            <a href="{{ route('post.show', $data->id) }}" class="text-decoration-none text-black">View post</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->title}}</h5>
                        <p class="card-text">{{ $data->body }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('comment.create', $data->id) }}" class="btn btn-primary">Comment</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
