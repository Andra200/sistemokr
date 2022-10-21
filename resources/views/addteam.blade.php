<!DOCTYPE html>
<html>
<head>
    <title>addteam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascrip" src="js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<div class="panel panel-default">
			<div class="panel-heading">
      <h4>Add New Team</h4>
    			</div>
			<div class="panel-body">


        <form action="/team/store" method="post">
            {{ csrf_field() }}
            
            <div class="form-group row">
    <label for="inputTeamnama" class="col-sm-2 col-form-label">Team Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTeamNama" placeholder="Team nama" >
    </div>
  </div>
  <center>
<a href="/team" class="btn btn-primary btn-sm">Simpan Data</a>
<a href="/team" class="btn btn-danger btn-sm">Kembali</a>
</center>
        </form>

        </div>
				<br/>

</body>
</html>