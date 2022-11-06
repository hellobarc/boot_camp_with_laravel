<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
     <!-- add icon link -->
     <link rel = "icon" href = "{{ asset('img/Png-yellow.png') }}" type = "image/x-icon" style="width: 200%;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <section style="background-color: #cdcdc7; height: 100vh;" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <div class="dashboard_right">
                        <strong>{{session()->get('user_data')->name}}</strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                   <div class="dashboard_left">
                        <ul>
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('admin.dashboard.user')}}">All User</a></li>
                            <li><a href="{{route('admin.dashboard.purchase')}}">Purchase</a></li>
                            <form action="{{route('admin.logout')}}" method="POST">
                                @csrf
                                <li>
                                    <button type="submit">Logout</button>
                                </li>
                            </form>
                        </ul>
                   </div>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                    <div class="dashboard_table">
                        <h1 class="mb-4">Admin Dashbord</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <th>Total User</th>
                                    <th>Total Purchase</th>
                                    <th>Total Pending Purchase</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$user_count}}</td>
                                        <td>{{$orders}}</td>
                                        <td>{{$pending_orders}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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