<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body>
    <table>
        <thead>
            <tr>                                                    
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date Of Birth</th>
            </tr>
        </thead>              
        @foreach($users as $user)
            <tr>
                <td>{{ htmlspecialchars($user->name) }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ htmlspecialchars($user->address) }}</td>
                <td>{{ $user->date_of_birth->format('d/m/Y') }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>