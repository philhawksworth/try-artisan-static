@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>

    <p><strong>{{ date('F j, Y', $page->date) }}</strong></p>

    <p><em>DISCLAIMER: Any 3rd-party services in these posts and in the config are only recommendations/suggestions. I am not affiliated with any of them.</em></p>

    <hr>

    @yield('postContent')

    <hr>

    @if ($page->comments)
        @include('_partials.disqus')
    @else
        <p>Comments are not enabled for this post.</p>
    @endif
@endsection
