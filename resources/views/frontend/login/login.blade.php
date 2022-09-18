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
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login_left_side">
                      <a class="navbar-brand" href="{{route('index')}}" > 
                        <img src="{{asset('img/Png-yellow.png')}}" alt="" class="logo">
                      </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login_right_side">
                        <h1 class="text-white fw-bolder main_color text-center">Login</h1>
                        <div>
                            <form action="" method="post" id='login'>
                              @csrf
                              <div class="mb-3">
                                <input type="email" name="email" id="email" aria-describedby="emailHelp" class="form_input" placeholder="Enter your eamil">
                              </div>
                              <div class="mb-3">                                
                                <input type="password" name="password" id="password" class="form_input" placeholder="*******">
                              </div>
                              <button type="submit" class="login_button">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
               
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="mt-5">
                  <a href="{{route('registeration.page')}}" class="main_color fs-5 text-decoration-none">SignUp</a>
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
<script>
    $(document).ready(function(){

// alert(localStorage.getItem("token"));

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
  </body>
</html>