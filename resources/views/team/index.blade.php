<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Team Index</title>
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
                        <a href="{{ route('team.create') }}" class="btn btn-md btn-success mb-3 float-right">new team</a>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Team Name</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($teams as $key=>$group)

                                <tr>
                                    <td>{{ $group->name }}</td>
                                    <td></td>


                                    <td class="text-center">
                                        <a href=""
                                            class="btn btn-sm btn-info shadow">Edit<a/>
                                        <form onsubmit="return confirm('Apakah Anda yakin?');"
                                        action=">

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
