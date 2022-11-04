<!DOCTYPE html>
<table class="table table-bordered">
    <head>
        <title>Objective</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
        <div class="container">
        <div class="panel panel-default">
			<div class="panel-heading">
			<h2>Objective</h2>
			</div>
        <table class="table table-hover">

            <tr>
                <th>User</th>
                <th>Team</th>
                <th>Objective</th>
                <th>Details</th>
                <th>Finish</th>
                <th>Progress</th>
                <th>Opsi</th>

            </tr>
            <tr>



            @foreach ($objectives as $key =>$value)


                <td><p class="text-primary">{{ $value->team->user->name }} </p></td>
                <td><p class="text-primary">{{ $value->team->name }} </p></td>
                <td><p class="text-primary">{{ $value->objective_name }}</p></td>
                <td><p class="text-primary">{{ $value->objective_details }}</p></td>
                <td><p class="text-primary">{{ $value->objective_finish }}</p></td>
                <td><p class="text-primary">{{ $value->progress }}</p></td>
                <td>
                    <a href="{{route('ObjectiveEdit', ['id' => $value->id])}}">Edit</a>
                    <a href="/objective/hapus{{ $value->id }}">Hapus</a>

                </td>
            </tr>

        @endforeach
</div>
</table>
<a href="/objective/create">Tambah Objective</a>

    </body>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
