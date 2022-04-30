@extends('layouts.main')

@section('konten')
<h1>{{ $post["judul"] }}</h1>
<h5>Penulis : {{ $post["author"] }}</h5>
<p>{{ $post["posting"] }}</p>

<a href="/blog">Kembali</a>
@endsection