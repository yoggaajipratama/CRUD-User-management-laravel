<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah user</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <style type="text/css">
    body{
      background-color: #cecece;
    }
    .border{
      border: solid;
      width: 600px;
      background-color: white;
      margin-left: 400px;
      padding: 30px 30px;
    }
    .btn:hover{
      background-color: black;
      width: 80px;
      height: 40px;
      font-size: 8;
      text-decoration: none;
    }
    a{
      text-decoration: none;
      color: white;
    }
    </style>
  </head>
  <body>
    <div class="text-center">
      <h2>Menambahkan user baru</h2>
    </div>

    <div class="border">
      <div class="container">
        <form method="post" action="{{url('employees')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-12"></div>
              <div class="form-group col-md-4">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" name="name">
                
                <label for="jk">Jenis kelamin:</label>
                <input type="text" class="form-control" name="jk">

                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email">

                <label for="hak">Hak akses:</label>
                <input type="text" class="form-control" name="hak">

                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password">
          </div>

        </div>
        <div class="row">
          <div class="col-md-12"></div>
            <div class="form-group col-md-4" style="margin-top:10px">
              <button type="submit" class="btn btn-success">Submit</button>
              &nbsp;&nbsp;&nbsp;
              <button type="button" class="btn btn-danger">
                <a href="{{action('EmployeeController@index')}}">Batal</a>
              </button>
            </div>
          </div>
      </form>
      </div>
    </div>
  </body>
</html>