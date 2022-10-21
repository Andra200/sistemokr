<!DOCTYPE html>
<html>
<head>
    <title>addinitiative</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">	<script type="text/javascript" src="js/jquery.js"></script>
    <scrip type="text/javascrip" src="js/bootstrap.js"></script>
</head>

<body>
<div class="container">
<div class="panel panel-default">
			<div class="panel-heading">
      <h3>Add Initiative</h3>
    			</div>
			<div class="panel-body">



        <form action="/team/store" method="post">
            {{ csrf_field() }}
            
            <div class="form-group row">
    <label for="inputInitiative" class="col-sm-2 col-form-label">Initiative</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputInitiative" placeholder="Initiative" >
    </div>
    </div>
    <div class="form-group row">
    <label for="inputStartdate" class="col-sm-2 col-form-label">Start Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputStartdate" placeholder="Startdate" >
    </div>
    </div>
    <div class="form-group row">
    <label for="inputFinishdate" class="col-sm-2 col-form-label">Finish Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputFinishdate" placeholder="Finishdate" >
    </div>
  </div>
  <center>
<a href="/team/details" class="btn btn-primary btn-sm">Simpan Data</a>
<a href="/team/details" class="btn btn-danger btn-sm">Kembali</a>
</center>
        </form>

        </div>
				<br/>

</body>
</html>