{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> --}}

<div class="container">

    @if ($message = Session::get('success'))
<div>
	<strong>{{ $message }}</strong>
</div>
@endif
    <table border="1px">
         <tr>
             <td>id</td>
             <td>name</td>
             <td>email</td>
             <td>address</td>
             <td>Joined</td>
             <td>operations</td>
         </tr>

         @foreach ($members as $item)
            <tr>
             <td>{{$item['id']}}</td>
             <td>{{$item['name']}}</td>
             <td>{{$item['email']}}</td>
             <td>{{$item['address']}}</td>
             <td>{{$item['dt']}}</td>
             <td><a href={{"delete/".$item['id']}}>delete</a></td>
         </tr>
         @endforeach
    </table>
</div>
