@extends('layout')

@section('content')
    @include('tweets.create')
    <div id="tweets">
        @each('tweets.tweet', $tweets, 'tweet')
    </div>
@endsection