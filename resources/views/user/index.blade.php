<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<h1 class="text-center">Room Table</h1>
<br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">UserID</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Address</th>
        </tr>
        <tbody>
            <tr>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->ID}}</td>
                    <td>{{$user->lastName}}</td>
                    <td>{{$user->firstName}}</td>
                    <td>{{$user->contactNumber}}</td>
                    <td>{{$user->address}}</td>
                </tr>
            </tr>
            @endforeach
        </tbody>
    </thead>
</table>