
<a class="comic-box" href="{{ route('comic', ['index' => $loop->index]) }}">
    <div class="comic">
        <img src="{{ $item['thumb'] }}" alt="#">
    </div>
    <div class="title">{{ $item['series'] }}</div>
</a>