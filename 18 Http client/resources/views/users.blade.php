<h1>user list</h1>

<table border="1px solid red">

    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>Profile Photo</td>
    </tr>

  @foreach ($item as $item)
        <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src="{{$item['avatar']}}" alt=""></td>
    </tr>

  @endforeach
</table>
