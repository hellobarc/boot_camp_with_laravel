<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>payment</title>
  </head>
  <body>
    <section class="login_page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="login_left_side">
                        <h1 class="text-white fw-bolder">Boot<span class="main_color">camp</span></h1>
                    </div>
                    
                </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 {{-- @foreach ($orders as $order) --}}
                     <p class="text-warning fs-4">product_id: {{ $products->id }}</p>
                     <p class="text-warning fs-4">{{ $products->product_name }}</p>
                     <p class="text-warning fs-4">{{ $products->product_price }}/-</p>
                 {{-- @endforeach --}}
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div>
                      <form method="post" id="payment_form">
                        <div class="mb-3">
                          <select class="form_input" id="payment_type" >
                            <option selected>Select Your Payment System</option>
                            <option value="bkash">BKash</option>
                            <option value="nagad">Nagad</option>
                          </select>
                        </div>
                        <div class="mb-3">                                
                          <input type="text" id="phone" class="form_input" placeholder="Enter your mobile number">
                        </div>
                        <div class="mb-3">                                
                          <input type="text" id="transaction" class="form_input" placeholder="Enter your Trnx number">
                        </div>
                        <button type="submit" class="login_button">Payment</button>
                      </form>
                  </div>
                <div class="mt-5">
                  <a href="{{route('registeration.page')}}" class="main_color fs-5 text-decoration-none">Go to Back</a>
                </div>
              </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
      $(document).ready(function(){
      var token = localStorage.getItem("token");
  // alert(localStorage.getItem("token"));
  
        $("#payment_form").submit(function(e){
          e.preventDefault();
          $.ajax({
            type:'POST',
            url:"{{route('order')}}",
            data:{"action":"order", 
                        payment_type:$("#payment_type").val(), 
                        phone:$("#phone").val(), 
                        transaction:$("#transaction").val(),
                        product_id: "{{$products->id}}",
                        status:1
                  },
            dataType: 'json',
            headers: {
              "Authorization": "Bearer "+token,
              "Accept": "application/json"
            },
            success: function(data){		
  
            // console.log(data.data.token);
            // localStorage.setItem("token", data.data.token);
            // localStorage.setItem("name", data.data.name);
            // localStorage.getItem("token");
            window.location.href = "/";
            },
            error: function(data){
              console.log($data);
            }
            
          });
         
  
          return false;
        });
      });
  </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>