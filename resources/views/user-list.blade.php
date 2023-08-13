<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Users</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  </head>
<body>
<div class="container">
    <br /></br>
	<div class="row">
        <div class="col-md-6"><h2>Users</h2></div>
        <div class="col-md-6"><a href="/export" class="btn btn-success btn-sm float-end">Export</a></div>
    </div>
    <br />
    <table id="table" class="table table-striped">
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
            <td>{{ $user->name }}</td>
		    <td>{{ $user->email }}</td>
		    <td>{{ $user->phone }}</td>
		    <td>{{ $user->address }}</td>
		    <td>{{ $user->date_of_birth->format('d/m/Y') }}</td>
        </tr>
	@endforeach
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>