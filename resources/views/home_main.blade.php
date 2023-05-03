@extends('layouts.app')

@section('page.main')
    <section id="jumbo"></section>
    <section class="my-container">

        <div class="container-comics-list">
            <h2 class="title-section">CURRENT SERIES</h2>
            <div class="comics-list">
                @each('partials.comic_card', $comics, 'item')
            </div>
            <div class="button">
                <button>LOAD MORE</button>
            </div>

        </div>
    </section>
@endsection
