
@extends("layout.main")

@section("content")

    <main>
        <div class="container cards-container">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card->image}}" alt="{{ $card->title}}">
                    <p>{{ $card->title}}</p>
                </div>
            @endforeach
        </div>
        <button>LOAD MORE</button>
    </main>

@endsection
