@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row mb-3">
            <div class="col-2">
                <form action="/" method="get">
                        <select class="form-control" name="category" id="">
                            <option selected disabled value="">Pilih</option>
                            @foreach($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="col">
                        <button type="submit" class="btn btn-primary">Cari</button>
                </form> 
            </div>
        </div>

        <div class="row">
            @foreach($post as $item)

                <div class="col-md-4 mb-4">
                
                <!-- Card -->
                    <div class="card" style="width: 100%; height:100%">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><b>{{ $item->user->name }}</b></h6>
                            <p class="card-text">{!! $item->body !!}</p>
                            <a href="/blog/{{ $item->slug }}" class="card-link">Selengkapnya...</a>
                        </div>
                    </div>
                <!-- End Card -->

                </div>

            @endforeach
        </div>
    </div>

@endsection