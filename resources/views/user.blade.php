<h1>User Detail</h1>
{{-- <h2>Hello {{$id}}</h2> --}}
{{-- <h3>Name : {{ $id['name']}}</h3>
<h3>Phone : {{$id['phone']}}</h3>
<h3>City : {{$id['city']}}</h3> --}}

@foreach ($data as $id => $user)
    Id :{{$user->id }}
    Name :{{$user->stdname }}
    Marks: {{$user->stdmarks }}
    Email: {{$user->stdemail }}
@endforeach