<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Spike Free</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/logoSP.png') }}" />
  <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{ asset('img/logoSP.png') }}" width="80" alt="">
                </a>
                <p class="text-center"><b>GastroCare</b></p>
                <form action="{{ route('register') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputtext1" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputtext1" required>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email Address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
                  </div>
                  <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <div class="mb-4">
                      <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Register</button>
                  <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-3 mb-0 fw-bold">Already have an Account?
                      <a class="text-primary fs-3 fw-bold ms-2" href="{{ route('login') }}">Sign In</a></p>
                  </div>
                </form>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>