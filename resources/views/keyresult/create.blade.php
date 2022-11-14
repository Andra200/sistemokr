<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Create Objective</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">

                <!--notif pake flash session data-->
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

                        <form action="{{ route('keyresult.store') }}" method="POST">
                            @csrf

                            <div class="form-group">


                            <div class="form-group">
                                 <label for="name"> objective</label>
                                   <select name="objective_id" class="form-control" required>
                                    @foreach ($objective as $objec)

                                    <option value="{{ $objec->id  }}" >{{ $objec->objective_name }}</option>
                                    @endforeach

                                  </select>
                             </div>

                                <!-- error massage untuk title -->
                                @error('id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="keyresult_name">keyresult</label>
                                <input name="keyresult_name" id="keyresult_name" type="text" class="form-control" id="keyresult_name" required>
                            </div>
                            <div class="form-group">
                                <label for="keyresult_details">keyresult details</label>
                                <input name="keyresult_details" type="text" class="form-control" id="keyresultDetails" placeholder="keyresultDetails">
                            </div>
                            <div class="form-group">
                                <label for="keyresult_finish">finish</label>
                                <input name="keyresult_finish" type="date" class="form-control" id="finish" placeholder="finish">
                            </div>
                            <div class="form-group">
                                <label for="progress">progress</label>
                                <input name="progress" type="text" class="form-control" id="progress" placeholder="progress">
                            </div>



                            <button type="submit" class="btn btn-md btn-primary">Save</button>
                            <a href="{{ route('keyresult.index') }}" class="btn btn-md btn-secondary">back</a>

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

