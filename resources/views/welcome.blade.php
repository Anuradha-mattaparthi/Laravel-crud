<h1>Home: First Page</h1>
<a href="{{route('blog')}}">Blog</a>
{{-- {{ 5 + 2 }}

<br><br>


{{"Hello world "}}

<br><br>

{{-- {!!"<script>alert('Hello world')</script>"!!}
 --}}
{{-- {!!"<h1>Hello world</h1>"!!}

@php
    $user='Anu';
@endphp

{{ $user }}

@php
    $names = ['Anu','Naveen','Sai','kanha','Angel'];
@endphp

<ul>
    @foreach ($names as $name)
    <li>{{$loop->parent}}{{$name}}</li>
    @endforeach
</ul>  --}}


{{-- @php
    $names = ['one'=>'Anu','two'=>'Naveen','three'=>'Sai','four'=>'kanha','five'=>'Angel'];
@endphp

@include("about")
@php
    $val="";
@endphp
@includeWhen(empty($val),'post',['names'=>$names] ) --}}
{{-- @extends('layout.layout')
@section('content')
<h2>Homepage</h2>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, animi impedit? Dolor porro asperiores odit? Non provident pariatur rem molestias, vero nisi doloribus excepturi, iure nostrum vitae tempora dolore ut!
@endsection

@section('title')
Home
@endsection
@push('scripts')
    <script src="/jquery.js"></script>
    <script src="/bootstrap.js"></script>
    <script src="/example.js"></script>
@endpush
@push('scripts')
    <script src="/vue.js"></script>
    <script src="/node.js"></script>
    <script src="/express.js"></script>
@endpush
@push('style')
    <link rel="stylesheet" href="css/bootstrap.css">
@endpush

@prepend('style')
    <style>
        #wrapper{
            background: tan;
        }
    </style>
@endprepend --}}

