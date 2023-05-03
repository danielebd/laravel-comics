@extends('layouts.app')

@section('page.main')
    <section id="jumbo"></section>
    <section class="my-container">

        <div class="container-comics-list">
            <h2 class="title-section">CURRENT SERIES</h2>
            <div class="comics-list">
                @foreach ($comics as $item)
                <div class="comic-box">
                    <div class="comic">
                        <img src="{{ $item['thumb'] }}" alt="#">
                    </div>
                    <div class="title">{{ $item['series'] }}</div>
                </div>
                @endforeach
            </div>
            <div class="button">
                <button>LOAD MORE</button>
            </div>

        </div>
    </section>
@endsection
