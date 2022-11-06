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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <section style="background-color: #cdcdc7; height:100vh" >
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
                    <div class="all_user_table">
                        <h1 class="my-4 fw-bolder">Purchase History</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mt-5" id="dataTable">
                                <thead>
                                    <th>Sl No</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Package Name</th>
                                    <th>Payment Type</th>
                                    <th>Billing Phone</th>
                                    <th>Trnasaction ID</th>
                                    <th>Purchase Date</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ( $orders as $rows)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$rows->user->name}}</td>
                                        <td>{{$rows->user->email}}</td>
                                        <td>
                                            @if($rows->product_id == 1)
                                                <p>Bootcamp Pro</p>
                                            @else
                                                <p>Bootcamp Max</p>
                                            @endif
                                        </td>
                                        <td>{{$rows->payment_type}}</td>
                                        <td>{{$rows->phone}}</td>
                                        <td>{{$rows->transaction}}</td>
                                        <td>{{$rows->updated_at->format('Y-m-d')}}</td>
                                        <td>
                                            
                                            @if($rows->status == 1)
                                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$rows->id}}">Pending</a>
                                            @else
                                            <a href="#" class="btn btn-success">Success</a>
                                            @endif 
                                        </td>
                                    </tr>
                                    {{-- modal start --}}
                                    <div class="modal fade" id="exampleModal_{{$rows->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="{{route('admin.dashboard.purchase.submit', $rows->user_id)}}" method="POST">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Purchase Status Change</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="purchase_status" class="col-form-label">Please change the purchase status</label>
                                                            <select class="form-select" aria-label="Default select example" name="purchase_status">
                                                                <option selected>Please Select One Option</option>
                                                                <option value="1">Pending</option>
                                                                <option value="2">Success</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- modal end --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <<script
    src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
</body>
</html>