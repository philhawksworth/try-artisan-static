@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>

    <ul>
        @foreach ($posts->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ date('M j, Y', $post->date) }}</small>
            </li>
        @endforeach
    </ul>
@endsection
