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
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 50px;">
        <p style="right: 5%; position: absolute;align-items: center; margin-bottom:0px ;">Đỗ Đức Anh</p>
    </nav>
    <section>
        <div style="background-color: #919191">
            <div class="container" >
                <form>
                    <div class="row">
                        <div class="col-6 px-4 py-2">
                            <div class="form-group">
                                <label class="d-block my-2"> Ngày đăng </label>
                                <div class="row container">
                                    <input type="date" class="col-5 form-control" id="" />
                                    <span class="col-1 text-center" > - </span>
                                    <input type="date" class="col-5 form-control" id="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block my-2"> Loại công bố </label>
                                <input type="text" class="form-control" id="" />
                            </div>
                            <div class="form-group">
                                <label class="d-block my-2"> Tỉnh/Tp nơi đặt trụ sợ chính </label>
                                <input type="text" class="form-control" id="" />
                            </div>
                        </div>
                        <div class="col-6 px-4 py-2">
                            <div class="form-group">
                                <label class="d-block my-2"> Mã số doanh nghiệp </label>
                                <input type="text" class="form-control" id="" />
                            </div>
                            <div class="form-group">
                                <label class="d-block my-2"> Tên doanh nghiệp </label>
                                <input type="text" class="form-control" id="" />
                            </div>
                            <div class="form-group">
                                <label class="d-block my-2"> &nbsp; </label>
                                <button style="width: fit-content; float: right" class="btn btn-primary form-control">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="ml-2 mr-2" id="frame-bottom">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-item nav-link active" data-toggle="tab" href="/category_id=1" role="tab">Đăng kí mới</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" data-toggle="tab" href="/category_id=2" role="tab">Đăng kí thay đổi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" data-toggle="tab" href="/category_id=3" role="tab">Thông báo thay đổi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" data-toggle="tab" href="/category_id=4" role="tab">Vi phạm/Thu hồi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" data-toggle="tab" href="/category_id=5" role="tab">Gải thể</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" data-toggle="tab" href="/category_id=6" role="tab">Loại khác</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <span class="text-primary py-2 d-block"> <i> {{ $now }} </i></span>
                @if (count($dns) == 0)
                    <div class="alert alert-danger" role="alert">
                        Không có kết quả nào.
                    </div>
                @else
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <table class="table table-striped table-responsive table-bordered">
                                <thead>
                                    <tr style="background-color: #919191">
                                        <th scope="col">Thời gian</th>
                                        <th scope="col"> Tên doanh nghiệp
                                        </th>
                                        <th scope="col"> MS doanh nghiệp </th>
                                        <th scope="col">Địa điểm</th>
                                        <th scope="col">Loại thông báo</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dns as $dn)
                                        <tr>
                                            <td>{{ $dn->thoi_gian }}</td>
                                            <td>{{ $dn->ten }}</td>
                                            <td>{{ $dn->ma_so }}</td>
                                            <td>{{ $dn->dia_chi }}</td>
                                            <td>{{ $dn->loai_thong_bao }}</td>
                                            <td><a href="#">PDF</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
                
            </div>
        </div>
    </section>
    
   
    <!-- core  -->
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
