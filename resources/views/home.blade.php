@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-5 gap-3">
                @forelse ($movies as $movie)
                    <div class="col-auto">
                        <div class="card">
                            <img src="" alt="" class="card-img-top">
                            <div class="card-body">
                                <h4>
                                    {{ $movie->title }}
                                </h4>
                                <p>
                                    {{ $movie->vote }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <p>
                            No movies found 🤷‍♂️
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection