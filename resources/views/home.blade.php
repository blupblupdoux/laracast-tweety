@extends('layouts.app')

@section('content')
<div class="lg:flex lg:justify-between">
    <div class="lg:w-32">
        @include ('_sidebar-links')
    </div>
    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">

        @include ('_publish-tweet-panel')

        <div class="border border-grey-300 rounded-lg">
            @include ('_tweet')
            @include ('_tweet')
            @include ('_tweet')
            @include ('_tweet')
        </div>
    </div>
    <div class="lg:w-1/6 bg-blue-100 rounded-lg">
        @include ('_friends-list')
    </div>
</div>
@endsection
