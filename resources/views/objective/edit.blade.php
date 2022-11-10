<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Objective</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action={{route ("objective.update",['id'=>$objectives->id])}} method="POST">
                            {{ method_field("put") }}
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="team_id"></label>
                                <input type="hidden" class="form-control @error('team_id') is-invalid @enderror"
                                    name="team_id" value="{{ $objectives->team_id }}" required>

                            <div class="form-group">
                                 <label for="name">Team Name</label>
                                   <select name="team_id" class="form-control" required>
                                    @foreach ($teams as $team)

                                    <option value="{{ $team->id  }}" >{{ $team->name }}</option>
                                    @endforeach

                                  </select>
                             </div>


                                <!-- error message untuk title -->
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="objective_name">objective</label>
                                <input name="objective_name" id="objective_name" type="text" class="form-control" id="objective_name" value="{{ $objectives->objective_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="objective_details">objective details</label>
                                <input name="objective_details" type="text" class="form-control" id="objectiveDetails" placeholder="objectiveDetails" value="{{ $objectives->objective_details }}">
                            </div>
                            <div class="form-group">
                                <label for="objective_finish">finish</label>
                                <input name="objective_finish" type="date" class="form-control" id="finish" placeholder="finish" value="{{ $objectives->objective_finish }}">
                            </div>
                            <div class="form-group">
                                <label for="progress">progress</label>
                                <input name="progress" type="number" class="form-control" id="progress" placeholder="progress" value="{{ $objectives->progress }}">
                            </div>

                                <!-- error message untuk content -->
                                @error('content')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('objective.index') }}" class="btn btn-md btn-secondary">back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- include summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250, //set editable area's height
            });
        })
    </script>


</body>
</html>
