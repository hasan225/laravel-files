<h1>users page </h1>


@if($user=="joy" || $user=='bijoy')

<h1>hello {{$user}}</h1>

@else

<h1>who are you</h1>
@endif


@for($x=0;$x<=10;$x++)

<h6>{{$x}}</h6>

@endfor
