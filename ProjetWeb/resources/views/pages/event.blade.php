@extends('layout.app')

@section('content')

    <section id="event">
        <div class="content_section container">
            <h3 class="title_section">Evènement</h3>
            @if(count($event) > 0)
                @foreach ($event as $item_event)
                    <div class="row">
                        <div class="one-third column frame">
                            <h5>Nom : </h5>
                            <h5>Date :</h5>
                            <h5>Prix :</h5>
                        </div>
                        <div class="two-thirds column item_event">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repellat temporibus quod harum nisi porro nostrum ratione cum ex, suscipit dolores accusamus facere pariatur repellendus iusto assumenda illum impedit deserunt. Est, eos. Aut consequatur quaerat explicabo a tempora facilis saepe?
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>

@endsection