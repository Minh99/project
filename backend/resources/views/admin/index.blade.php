<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/bootstrap.min.css') }}"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <title>BO CAO</title>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Admin </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul
          class="navbar-nav mr-auto flex-column vertical-nav nav flex-column"
          role="tablist"
        >
          <li class="nav-item">
            <a
              class="nav-link active"
              data-toggle="tab"
              href="#tabs-1"
              role="tab"
              >Tạo tài khoản</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
              >Thông tin người dùng</a
            >
          </li>
        </ul>
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Foo</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              User
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Log Out</a>
            </div>
          </li>
        </ul> -->
      </div>
    </nav>
    <div class="tab-content" id="tab-content-admin">
      <div class="tab-pane active" id="tabs-1" role="tabpanel">
        <section class="vh-100 bg-image"
        style="background-color: white;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create account</h2>
      
                    <form>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1cg">Username</label>
                      </div>
    
      
                      <div class="form-outline mb-4">
                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example4cg">Password</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                      </div>
      
            
      
                      <div class="d-flex justify-content-center">
                        <button type="button"
                          class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                      </div>
      
                      <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                          class="fw-bold text-body"><u>Login here</u></a></p>
      
                    </form>
      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      </div>
      <div class="tab-pane" id="tabs-2" role="tabpanel" >
        <table class="table" style="width:60%; margin-left: auto; margin-right: auto;margin-top: 5%;" >
          <thead>
            <tr>
              <th class="table-name-column" scope="col">ID</th>
              <th class="table-name-column" scope="col">
                Username
              </th>
              <th class="table-name-column" scope="col">
                Ngày đăng ki
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-show-infomation">34264fsfdf</td>
              <td id="cell-2" class="table-show-infomation">
                CÔNG TY TNHH XÂY DỰNG DỊCH VỤ VÀ THƯƠNG MẠI ĐỨC HIẾU
              </td>
              <td class="table-show-infomation">MÃ SỐ DN:233534534</td>
        
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>
    <!-- bootstrap 3 affix -->
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <script src="{{ asset('assets/vendors/js/jquery-3.2.1.slim.min.js') }}"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/vendors/js/popper.min.js') }}"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/vendors/js/bootstrap.min.js') }}"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
  </body>
</html>
