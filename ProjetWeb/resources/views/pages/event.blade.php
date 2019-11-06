@extends('layout.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($event) > 0)
        <ul>
            @foreach ($event as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    @endif
@endsection