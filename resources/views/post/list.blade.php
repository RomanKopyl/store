@extends('layouts.post')

@section('post-content')
<div class="card">
    <div class="card-header">Posts</div>
        <div class="card-body">
            <ul>
                @foreach ($posts as $post)
                <li>
                    [<a href="/post/{{ $post->id }}">{{ $post->id }}</a>]
                    {{ $post->created_at }}
                    <br>
                    {{ $post->text }}
                    <br>
                    @auth
                    [<a href="/post/{{ $post->id }}/delete" class="text-danger">Delete</a>]
                    @endauth
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@auth
@if (auth()->user()->role === 'author') 

<div class="card">
    <form action="/post" method="POST">
        @csrf
        <div class="form-group">
            <label for="">New post</label>
            <textarea class="form-control" name="text"></textarea>
            <input class="form-control" type="submit" value="Create post">
        </div>
    </form>
</div>

@endif
@endauth
@endsection
