<h1>post page</h1>
{{-- <a href="/">Home</a>
<a href="/about">About</a> --}}
{{-- @forelse ($names as $index=>$val)
    <ul><li>{{$index}}-{{$val}}</li></ul>
@empty
    <h1>not found</h1>
@endforelse --}}
@extends('layout.layout')
@section('content')
<h2>Post page</h2>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, animi impedit? Dolor porro asperiores odit? Non provident pariatur rem molestias, vero nisi doloribus excepturi, iure nostrum vitae tempora dolore ut! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat eius pariatur veritatis, necessitatibus aliquid, animi dicta mollitia, atque placeat omnis ad rem fugit nulla excepturi perferendis enim ipsum voluptatem natus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit veritatis voluptas alias sapiente quos vitae modi, magnam officia, natus velit illo. Laborum vitae sed dolore tempora dolor. Accusantium, voluptatibus adipisci.
@endsection

{{-- @section('title')
Post
@endsection --}}

@section('sidebar')
@parent
<p>This is a aditional content of sidebar</p>
    
@endsection



