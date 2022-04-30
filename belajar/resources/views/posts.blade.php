@extends('layouts.main')
@section('konten')


@foreach ($posts as $post)
    <article class="mb-5">
        <h1><a href="/posts/{{ $post["slug"] }}">{{ $post["judul"] }}</a></h1>
        <h5>Penulis : {{ $post["author"] }}</h5>
        <p>{{ $post["posting"] }}</p>
    </article>
@endforeach

@endsection

