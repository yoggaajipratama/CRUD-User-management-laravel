<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar user</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="text-center">
      <h2>Daftar user</h2><br/>
    </div>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <td align="right">
       <a href="{{action('EmployeeController@create')}}" class="btn btn-success">Tambah user</a>
    </td>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Hak Akses</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>

      @foreach($employees as $employee)
      <tr>
        <td>{{$employee['id']}}</td>
        <td>{{$employee['name']}}</td>
        <td>{{$employee['jk']}}</td>
        <td>{{$employee['email']}}</td>
        <td>{{$employee['hak']}}</td>
        <td>{{$employee['password']}}</td>

        <td align="right">
          <a href="{{action('EmployeeController@edit', $employee['id'])}}" class="btn btn-warning">Edit</a>
        </td>
        <td align="left">
          <form action="{{action('EmployeeController@destroy', $employee['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>