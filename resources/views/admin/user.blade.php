<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usertype as $user)
        <tr>
            <th scope="row">{{$user['id']}}</th>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            @if($user['usertype'] == 0)
            <td><a href="{{url('/deleteuser',$user['id'])}}">Delete</a></td>
            @endif
        </tr>
        @endforeach
    </tbody>
    </table>
</body>