@extends('layouts.app')

@section('content')
    <section>
        <div class="container py-5 my-5">
            <div class="row row-cols-5 g-5">
                @forelse ($movies as $movie)
                    <div class="col-auto">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{ $movie->path_img }}" alt="" class="card-img-top">
                            </div>
                            <div class="card-body text-center">
                                <h3 class="crad-title">
                                    {{ $movie->title }}
                                </h3>
                                <p class="card-text">
                                    {{ $movie->overview }}
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="m-0 text-center text-success fw-bolder ">
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