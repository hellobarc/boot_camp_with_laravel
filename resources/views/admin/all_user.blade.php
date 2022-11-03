<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                   <div class="dashboard_left">
                        <ul>
                            <li><a href="{{route('admin.dashboard.user')}}">All User</a></li>
                            <li><a href="{{route('admin.dashboard.purchase')}}">Purchase</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                   </div>
                </div>
                <div class="col-md-10">
                    <div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                            </thead>
                            <tbody>
                                @foreach ( $users as $rows)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$rows->name}}</td>
                                    <td>
                                        @if($rows->email == 'minar.barc@gmail.com')
                                            <p class="badge badge-warning">Admin</p>
                                        @else
                                        {{$rows->email}}
                                        @endif
                                    </td>
                                    <td>{{$rows->updated_at}}</td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>