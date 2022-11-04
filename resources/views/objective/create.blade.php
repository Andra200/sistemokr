<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/objective"> Kembali</a>

	<br/>
	<br/>

	<form action="/objective/store" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		Objective <input type="text" name="objective" required="required"> <br/>
		Objective Details <input type="text" name="objectivedetails" required="required"> <br/>
		finish <input type="date" name="finish" required="required"> <br/>
        progress <input type="number" name="progress" required="required"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>
