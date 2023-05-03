@extends('layouts.app')

@section('page.main')
    
    <section class="my-container">

        <div class="container-comics-list">
            <h2 class="title-section">CURRENT SERIES</h2>
            <div class="comics-list">
                @foreach ($comics as $item)
                    @include('partials.comic_card')
                @endforeach
            </div>
            <div class="button">
                <button>LOAD MORE</button>
            </div>

        </div>
    </section>
@endsection
