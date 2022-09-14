@extends('layouts.main')
@section('container')
    <h1>Halaman Posts</h1>

    @foreach ($posts as $post)
        <article class="mb-5">
            <h3><a href="/posts/{{ $post['slug'] }}">{{ $post['judul'] }}</a></h3>
            <h5>By: {{ $post['nama'] }}</h5>
            <p>{{ $post['teks'] }}</p>
        </article>
    @endforeach
@endsection()

