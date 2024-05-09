@extends('app')

@section('content')
    <h2>dentro posts</h2>
    <ul>
        @foreach($posts as $post)
            <li class="@if($post == 1){{'bg-danger'}}@endif">{{$post}}</li>

        @endforeach

    </ul>
@endsection
