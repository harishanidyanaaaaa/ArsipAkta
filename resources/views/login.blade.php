<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Login Form</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/lineicons.css" />
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/main.css" />
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    
    
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
     
      <!-- ========== header end ========== -->

      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Login Form</h2>
                </div>
              </div>
              <!-- end col -->
            
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== form-elements-wrapper start ========== -->
          <div class="form-elements-wrapper">
            <div class="row">
              <div class="col-lg-6">
                <!-- input style start -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">Silahkan Login Terlebih dahulu</h6>
                 <form action="{{ route('check') }}" method="POST">
                              @csrf
                  <!-- end input -->
                  <div class="input-style-2">
                    <input type="email" placeholder="Email Anda" required name="email"/>
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>
                    <div class="input-style-2">
                    <input type="password" placeholder="Password Anda" required name="password"/>
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>
               
                                <button type="submit" value="Login" class="btn btn-primary">Sign in</button>
                </form>
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->

                <!-- ======= select style start ======= -->
               
                  <!-- end select -->
                </div>
                <!-- end card -->
                <!-- ======= select style end ======= -->

                <!-- ======= select style start ======= -->
            
                <!-- end card -->
                <!-- ======= input style end ======= -->

                <!-- ======= input switch style start ======= -->
               
                <!-- ======= input switch style end ======= -->
              </div>
              <!-- end col -->
              <div class="col-lg-6">
                <!-- ======= textarea style start ======= -->
               
                <!-- ======= textarea style end ======= -->

                <!-- ======= checkbox style start ======= -->
              
                <!-- ======= checkbox style end ======= -->

                <!-- ======= radio style start ======= -->
               
                  <!-- end radio -->
                  
                  <!-- end radio -->
                </div>
                <!-- ======= radio style end ======= -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== tab components end ========== -->

      <!-- ========== footer start =========== -->
      
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ url('') }}/theme/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('') }}/theme/assets/js/Chart.min.js"></script>
    <script src="{{ url('') }}/theme/assets/js/dynamic-pie-chart.js"></script>
    <script src="{{ url('') }}/theme/assets/js/moment.min.js"></script>
    <script src="{{ url('') }}/theme/assets/js/fullcalendar.js"></script>
    <script src="{{ url('') }}/theme/assets/js/jvectormap.min.js"></script>
    <script src="{{ url('') }}/theme/assets/js/world-merc.js"></script>
    <script src="{{ url('') }}/theme/assets/js/polyfill.js"></script>
    <script src="{{ url('') }}/theme/assets/js/main.js"></script>
  </body>
</html>
