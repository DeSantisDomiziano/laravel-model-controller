@extends('layouts.app')

@section('content')
    <section>
        <div class="container py-5 my-5">
            <div class="row row-cols-5 g-3">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <div class="card-header p-0">
                                <img src="{{ $movie->path_img }}" alt="" class="card-img-top">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="crad-title">
                                    {{ $movie->title }}
                                </h5>
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