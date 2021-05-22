<style>
.w-5{
    display: none;
}
</style>



<h1>
    <table border="1px">
        <tr style="color:rgb(255, 255, 255); background:black; font-size:20px;text-align:center;padding:15px">
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

<span>{{$members->links()}}</span>

