@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p5">
            <img src="/img/logo.png" class="w-100 rounded-circle">
        </div>
        <div class="col-9 p-5">

            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-item-center pb-4"><h1>{{ $user->name }}</h1></div>
                <a href="/post/create" class="btn btn-primary">Add New Post</a>
            </div>

            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->post->count() }}</strong> Posts</div>
                <div class="pr-5"><strong>25k</strong> Followers</div>
                <div class="pr-5"><strong>500</strong> Following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{ $user->profile->description}}</div>
            <div><a href="">{{ $user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row">
        @foreach($user->post as $posti)
        <div class="col-4 pb-3">
            <a href="/post/{{ $posti->id }}">
                <img src="/storage/{{ $posti->image}}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
    
</div>
@endsection
