<h1>
    <table border="1px">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>address</td>
            <td>joined</td>
        </tr>

        @foreach ($members as $member)

         <tr>
            <td>{{$member['id']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['email']}}</td>
            <td>{{$member['address']}}</td>
            <td>{{$member['dt']}}</td>
        </tr>


        @endforeach
    </table>
</h1>
