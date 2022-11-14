<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Objective</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('succes'))
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
                        <a href="{{ route('keyresult.create') }}" class="btn btn-md btn-success mb-3 float-right">new keyresult</a>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Keyresult</th>
                                    <th scope="col">Keyresult Details</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">Finish Date</th>
                                    <th scope="col">Porgress</th>


                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($keyresults as $key=>$value)

                                <tr>
                                    <td>{{ $value->keyresult_name }}</td>
                                    <td>{{ $value->keyresult_details }}</td>
                                    <td></td>
                                    <td>{{ $value->keyresult_finish }}</td>
                                    <td>{{ $value->progress }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('keyresult.edit', $value->id) }}"
                                            class="btn btn-sm btn-info shadow">Edit<a/>
                                        <form onsubmit="return confirm('Apakah Anda yakin?');"
                                        action="{{ route('keyresult.destroy', ['id'=> $value->id]) }}" method="POST">

                                            @csrf

                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="4">Data objective tidak tersedia</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
