@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h3>{{ $post['judul'] }}</h3>
        <h5>By: {{ $post['nama'] }}</h5>
        <p>{{ $post['teks'] }}</p>


        <a href="/blog">Back to Posts</a>
    </article>
@endsection