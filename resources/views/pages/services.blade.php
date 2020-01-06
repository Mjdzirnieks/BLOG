@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group">
            <li class="list-group-item"><h2>You have to register!</h2></li>
            <li class="list-group-item"><h2>After registration you can write on your blog</h2></li>
            <li class="list-group-item"><h2>If you want to change something in your post go to edit</h2></li>
        </ul>
    @endif
@endsection

