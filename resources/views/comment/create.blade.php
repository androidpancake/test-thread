@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <div class="card-footer">
                <label for="">Add Comment</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </div>
    </div>
@endsection