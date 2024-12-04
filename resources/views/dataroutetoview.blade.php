<h1>Hi Iam what to send a  dataa from route to view</h1>

@forelse ($user as $id => $details)
    <h3>{{$id}} => {{ $details['name']}} | {{ $details['phone']}} | {{ $details['city']}} 
        <a href="{{route('view.dataroutetoview',$id)}}">Show</a>
    </h3>

    @empty
  <h1>Not found</h1>  
@endforelse
{{-- <h3>Helo {{ $user }}</h3>
<h3> city {{ $userid }}</h3> --}}