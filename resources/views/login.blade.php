<x-layout>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-4 border my-3 py-3 px-3">
            <div class="icon nav-link px-0 text-danger h5">
              <div class="py-1 bg-danger text-white">
                <h1 class="text-center">LOGIN</h1>
              </div>

              <div class="mt-3 text-center">
                <img src="./images/login.png" class="img-fluid" alt="login-img">
              </div>

                <form method="get" action="signup.html">

              <div class="py-2">
                <input type="email" class="form-control border-info" name="email" placeholder="Enter Email Address">
              </div>


              <div class="py-2">
                <input type="password" class="form-control border-info" name="password" placeholder="Enter Password">
              </div>

              <div class="py-2">
                <a href="/home" type="button" class="form-control btn-danger text-decoration-none text-white text-center">LOGIN</a>
              </div>

              <div class="py-2">
                <a href="/register" type="button" class="form-control btn btn-info text-white text-decoration-none text-white text-center">REGISTER</a>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
</x-layout>