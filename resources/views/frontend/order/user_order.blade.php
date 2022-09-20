<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>login</title>
  </head>
  <body>
    <section class="login_page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="login_left_side">
                      <a class="navbar-brand" href="{{route('index')}}" > 
                        <img src="{{asset('img/Png-yellow.png')}}" alt="" class="logo">
                      </a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Purchase History</h3>

                            <div id="table_data"></div>

                          
                              <a class="fs-4 text-decoration-none text-dark fw-bold float-right" href="{{ route('index')}}">Go Back Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
{{-- <script>
    $(document).ready(function(){



      $("#login").submit(function(){
        $.ajax({
          type:'POST',
          url:"{{route('loginAuth')}}",
          data:{"action":"login", email:$("#email").val(), password:$("#password").val()},
          dataType: 'json',
          headers: {
            // "Authorization": "Bearer "+token,
            "Accept": "application/json"
          },
          success: function(data){		

          console.log(data.data.token);
          localStorage.setItem("token", data.data.token);
          localStorage.setItem("name", data.data.name);
          // localStorage.getItem("token");
          window.location.href = "/index";
          },
          error: function(data){
            console.log($data);
          }
          
        });

        return false;
      });
    });
</script> --}}

<script>
  $(document).ready(function(){
  var token = localStorage.getItem("token");
    // alert(localStorage.getItem("token"));

      $.ajax({
        type:'GET',
        url:"{{route('payment.history')}}",
        data:{"action":"payment.history"},
        dataType: 'json',
        headers: {
          "Authorization": "Bearer "+token,
          "Accept": "application/json"
        },
        success: function(data){		
          console.log(data);

          let table = `<table class="table table-bordered table-striped">`;
              table +=  `<thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Sl No</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Payment Type</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>`;

          $.each(data.discount, function(i, item) {

              let package = 1;
              let status = 1;

              if(item.product_id==1){
                package = 1;
              }else{
                package = 2;
              }

              if(item.status==1){
                status = "Pending";
              }else{
                status = "Success";
              }

              table += `<tr>
                              <th scope="row">${i}</th>
                              <td class="text-dark">
                                  Package- ${package}
                              </td>
                              <td>${item.payment_type}</td>
                              <td>${item.transaction}</td>
                              <td>
                                ${status}
                              </td>
                            </tr>`;
          });
                table += `</table>`;

           $("#table_data").html(table);     
        
        },
        error: function(data){
          console.log(data);
        }
        
      });
    
  });
</script>
  </body>
</html>