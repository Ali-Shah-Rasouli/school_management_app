
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
     <strong>Users List</strong>
    <table class="table-table-striped">
        <thead>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>

        </thead>
        <tbody>
           @foreach ( $users as $user )
           <tr>
            <td>{{ $user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{ $user->email}}</td>
           </tr>
               
           @endforeach
        </tbody>
    </table>
</body>
</html>
 