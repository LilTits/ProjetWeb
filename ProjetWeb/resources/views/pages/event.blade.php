@extends('layout.app')

@section('content')

    <section id="event">
        <div class="content_section container">
            <h3 class="title_section">Evènement</h3>
            <div class="row">
                @if(count($event) > 0)
                    @foreach ($event as $item)
                    <div class="twelve columns event">
                        {{$item}}
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    
@endsection