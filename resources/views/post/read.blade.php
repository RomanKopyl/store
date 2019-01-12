@extends('layouts.post')

@section('post-content')
<div class="card">
    <div class="card-header">Post #{{ $post->id }}</div>
        <div class="card-body">
            <h3>{{ $post->created_at }}</h3>
            <p>{{ $post->text }}</p>
        </div>
    </div>
</div>
@endsection
