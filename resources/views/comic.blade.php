@extends('layouts.app')

@section('comics.main')
    <div class="bluebar">
        <div class="img-container">
            <div class="img">
                <img src="{{ $dc['thumb'] }}" alt="#">
                <div>VIEW GALLERY</div>
            </div>
        </div>
    </div>
    <div class="details raw">
        <div class="col-9">
            <h2>{{ $dc['title'] }}</h2>
            <div class="check d-flex raw">
                <div class="price-container col-9 d-flex justify-content-between border-end">
                    <span class="price">U.S. price: {{ $dc['price'] }}</span>
                    <span class="avaible ">AVAILABLE</span>
                </div>
                <div class="col-3">
                    <div class="dropdown d-flex align-items-center justify-content-between">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
@endsection
