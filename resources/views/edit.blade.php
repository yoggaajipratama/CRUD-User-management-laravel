<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
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
    <center>
      <h2>Edit data user</h2><br/>
    </center>
    <div class="border">
      <div class="container">
          <form method="post" action="{{action('EmployeeController@update', $id)}}">
          @csrf
          <input name="_method" type="hidden" value="PATCH">
          <div class="row">
            <div class="col-md-12"></div>
            <div class="form-group col-md-4">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{$employee->name}}">

              <label for="jk">Jenis Kelamin:</label>
              <input type="text" class="form-control" name="jk" value="{{$employee->jk}}">

              <label for="email">Email:</label>
              <input type="text" class="form-control" name="pekerjaan" value="{{$employee->email}}">

              <label for="hak">Hak Akses:</label>
              <input type="text" class="form-control" name="pekerjaan" value="{{$employee->hak}}">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12"></div>
            <div class="form-group col-md-12" style="margin-top:10px">
              <button type="submit" class="btn btn-success">Update</button>
              &nbsp;&nbsp;&nbsp;
              <button type="button" class="btn btn-danger"><a href="{{action('EmployeeController@index', $employee['id'])}}">Batal</a></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>