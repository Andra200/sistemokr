<!DOCTYPE html>
<html>
<head>
	<title>edit objective</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>


	<h3>Edit Objective</h3>

	<a href="/objective"> Kembali</a>

	<br/>
	<br/>

	<form action={{route ("ObjectiveUpdate",['id'=>$objectives->id])}} method="post" >
       {{ method_field("put") }}
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $objectives->id }}"> <br/>
		Objective <input type="text" required="required" name="objective" value="{{ $objectives->objective_name }}"> <br/>
		Objective Details <input type="text" required="required" name="objectivedetails" value="{{ $objectives->objective_details }}"> <br/>
		Finish <input type="date" required="required" name="finish" value="{{ $objectives->objective_finish }}"> <br/>
		Progress <input type="number" required="required" name="progress">{{ $objectives->progress }} <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
