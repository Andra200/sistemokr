<!DOCTYPE html>
<html>
<head>
	<title>Team Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">	
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<div class="container">
<div class="panel panel-default">
			<div class="panel-heading">
			<h2>Team Index</h2>
			</div>
			
			<div class="panel-body">
	@section('option')
	<div class="col">
		<div class="input-group mx-1">
			<label class="font-weight-bold mr-2">
				{{trans('post.form_control.select.team_dosen.label')}}
			</label>
			<select name="dosen" class="custom-select">
				@foreach ($Dosen as $value => $label)
				<option value="{{$value}}" {{ dosenSelected}} >
					{{ $label }}
				</option>
				@endforeach
			</select>
		<div class="input-group-append">
			<button class="btn btn-primary" type="submit">
				{{trans('posts.button.apply.value')}}
			</button>
		</div>
	</div>
</div>
@endsection



  
 
	<table class="table table-bordered">
		<tr>
			<th>Nama</th>
			<th>progress</th>
			<th>Action</th>
			<th>Dosen</th>
		
		</tr>
		@foreach($team as $p)
		<tr>
			<td><p class="text-primary">{{ $p->team_nama }}</p></td>
			<td>
                {{ $p->team_progress }}
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%"  aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
            </td>
			
			<td>
				
                <a class="btn btn-primary " href="/team/details">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-eye-fill" viewBox="0 -3 17 17">
				<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
				<path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
			</svg></a>
			</td>
			<td><p class="text-primary">{{ $p->team_dosen }}</p></td>

		</tr>
		@endforeach
	</table>
	<a href="/team/addteam" class="btn btn-primary btn-sm">Tambah</a>

	
</form>
</form>
</div>
</div>
</div>

</div>		
				
				</div>
				<br/>
		
</script>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>