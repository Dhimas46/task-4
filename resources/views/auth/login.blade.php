<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('template/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('template/')}}/dist/css/adminlte.min.css">
    <title></title>
  </head>
  <body>
      <div id="flashError" data-flash="{{session()->get('error')}}"></div>
    <section class="vh-100" style="background-color: #20BF06;">

    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <p class="text-center text-white fw-700" style="font-family: 'Poppins', sans-serif; font-size: 50px;">Udacoding</p>
          <div class="card item-center">
            <div class="card-body">
              <form role="form" action="{{url('login')}}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                  </div>
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" id="Password" name="password" placeholder="Enter Password">
                  <div class="float-right">
                    <a class="float-right mt-2" href="#" style="color: #20BF06; text-decoration: underline;">Forgot Your Password?</a>
                  </div>
                  <div class="row mt-5">
                    <button type="submit" class="btn btn btn-block text-white text-bold btn-rounded btn-lg" style="background-color: #20BF06; border-radius: 40px;">Login</button>
                </div>
                <div class="mt-5 text-center">
                  Don't have an account&nbsp<span><a class="mt-5" href="#" style="color: #20BF06; margin-top: 20px; text-decoration: underline;">Sign up</a></span>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </body>
  <script src="{{asset('template/')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('template/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('template/')}}/dist/js/adminlte.min.js"></script>
<script src="{{asset('template/')}}/sweetalert2/dist/sweetalert2.all.js"></script>
</body>
</html>
<script type="text/javascript">
          var flashError =$('#flashError').data('flash');
          if (flashError) {
              Swal.fire({
              icon: 'error',
              title: 'Error',
              text: flashError,
            })
          }
            var flash =$('#flash').data('flash');
            if (flash) {
                Swal.fire({
                icon: 'success',
                title: 'Success',
                text: flash,
              })
            }
            $(document).on('click', '#btn-hapus', function(e){
              e.preventDefault();
              var link = $(this).attr('href');
              Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                confirmButtonColor: '#00a65a',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                showCancelButton: true,
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location = link;
                }
              })
            })
          </script>
</html>
