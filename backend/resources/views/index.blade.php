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
    <div id="search-top" class="search-box row ml-2 mr-2 d-flex flex-row">
        <div id="search-top-left" class="col-6">
            <div class="form-group">
                <label class="lable-search-top">Ngày đăng:</label>
                <div>
                    <input type="date" class="input-date" id="" aria-describedby="emailHelp" />
                    <input type="date" class="ml-2 input-date" id="" aria-describedby="emailHelp" />
                </div>
            </div>
            <div class="form-group mt-1">
                <label for="" class="lable-search-top">Loại công bố:</label>
                <div>
                    <select class="input-select-box">
                        <option value="1">ddd</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="lable-search-top">Tỉnh/Thành phố nơi đặt trụ sở chính:</label>
                <div>
                    <select class="input-select-box">
                        <option value="1">ddd</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="search-top-right" class="col-6">
            <div id="search-top-right-color">
                <div class="form-group">
                    <label for="" class="lable-search-top">Mã số doanh nghiệp*:</label>
                    <div class="">
                        <input type="" class="input-select-box-right" id=""
                            aria-describedby="emailHelp" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="lable-search-top">Tên doanh nghiệp:</label>
                    <div class="">
                        <input type="" class="input-select-box-right" id=""
                            aria-describedby="emailHelp" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ml-2 mr-2" id="frame-bottom">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Đăng kí mới</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Đăng kí thay đổi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Thông báo thay đổi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Vi phạm/Thu hồi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">Gải thể</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Loại khác</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="label-show-date">
            <label style="font-weight: 600;color: blue;margin-top: 6px;" for="">Thứ Bảy, 4 Tháng Hai,
                2023</label>
            <button class="buton-label-show-date">Tìm báo cáo</button>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="table-name-column" scope="col">Thời gian</th>
                            <th class="table-name-column" scope="col" style="width:40%"> Tên, mã số doanh nghiệp
                            </th>
                            <th class="table-name-column" scope="col"> Mã số doanh nghiệp </th>
                            <th class="table-name-column" scope="col">Địa điểm</th>
                            <th class="table-name-column" scope="col">Loại thông báo</th>
                            <th class="table-name-column" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-show-infomation">34264fsfdf</td>
                            <td id="cell-2" class="table-show-infomation"> CÔNG TY TNHH XÂY hDỰNG DỊCH VỤ VÀ THƯƠNG
                                MẠI
                                ĐỨC HIẾU </td>
                            <td class="table-show-infomation">MÃ SỐ DN:233534534</td>
                            <td class="table-show-infomation">Tỉnh Tuyên Quang</td>
                            <td class="table-show-infomation">Đăng kí mới</td>
                            <td class="table-show-infomation"><a href="">click</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="tabs-2" role="tabpanel">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="table-name-column" scope="col">Thời gian</th>
                            <th class="table-name-column" scope="col" style="width:40%"> Tên, mã số doanh nghiệp
                            </th>
                            <th class="table-name-column" scope="col"> Mã số doanh nghiệp </th>
                            <th class="table-name-column" scope="col">Địa điểm</th>
                            <th class="table-name-column" scope="col">Loại thông báo</th>
                            <th class="table-name-column" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-show-infomation">34264fsfdf</td>
                            <td id="cell-2" class="table-show-infomation"> CÔNG TY TNHH XÂY DỰNG DỊCH VỤ VÀ THƯƠNG
                                MẠI
                                ĐỨC HIẾU </td>
                            <td class="table-show-infomation">MÃ SỐ DN:233534534</td>
                            <td class="table-show-infomation">Tỉnh Tuyên Quang</td>
                            <td class="table-show-infomation">Đăng kí mới</td>
                            <td class="table-show-infomation"><a href="">click</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="tabs-3" role="tabpanel">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="table-name-column" scope="col">Thời gian</th>
                            <th class="table-name-column" scope="col" style="width:40%"> Tên, mã số doanh nghiệp
                            </th>
                            <th class="table-name-column" scope="col"> Mã số doanh nghiệp </th>
                            <th class="table-name-column" scope="col">Địa điểm</th>
                            <th class="table-name-column" scope="col">Loại thông báo</th>
                            <th class="table-name-column" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-show-infomation">34264fsfdf</td>
                            <td id="cell-2" class="table-show-infomation"> CÔNG TY TNHH XÂY hDỰNG DỊCH VỤ VÀ THƯƠNG
                                MẠI
                                ĐỨC HIẾU </td>
                            <td class="table-show-infomation">MÃ SỐ DN:233534534</td>
                            <td class="table-show-infomation">Tỉnh Tuyên Quang</td>
                            <td class="table-show-infomation">Đăng kí mới</td>
                            <td class="table-show-infomation"><a href="">click</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="tabs-4" role="tabpanel">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="table-name-column" scope="col">Thời gian</th>
                            <th class="table-name-column" scope="col" style="width:40%"> Tên, mã số doanh nghiệp
                            </th>
                            <th class="table-name-column" scope="col"> Mã số doanh nghiệp </th>
                            <th class="table-name-column" scope="col">Địa điểm</th>
                            <th class="table-name-column" scope="col">Loại thông báo</th>
                            <th class="table-name-column" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-show-infomation">34264fsfdf</td>
                            <td id="cell-2" class="table-show-infomation"> CÔNG TY TNHH XÂY hDỰNG DỊCH VỤ VÀ THƯƠNG
                                MẠI
                                ĐỨC HIẾU </td>
                            <td class="table-show-infomation">MÃ SỐ DN:233534534</td>
                            <td class="table-show-infomation">Tỉnh Tuyên Quang</td>
                            <td class="table-show-infomation">Đăng kí mới</td>
                            <td class="table-show-infomation"><a href="">click</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="tabs-5" role="tabpanel">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="table-name-column" scope="col">Thời gian</th>
                            <th class="table-name-column" scope="col" style="width:40%"> Tên, mã số doanh nghiệp
                            </th>
                            <th class="table-name-column" scope="col"> Mã số doanh nghiệp </th>
                            <th class="table-name-column" scope="col">Địa điểm</th>
                            <th class="table-name-column" scope="col">Loại thông báo</th>
                            <th class="table-name-column" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-show-infomation">34264fsfdf</td>
                            <td id="cell-2" class="table-show-infomation"> CÔNG TY TNHH XÂY hDỰNG DỊCH VỤ VÀ THƯƠNG
                                MẠI
                                ĐỨC HIẾU </td>
                            <td class="table-show-infomation">MÃ SỐ DN:233534534</td>
                            <td class="table-show-infomation">Tỉnh Tuyên Quang</td>
                            <td class="table-show-infomation">Đăng kí mới</td>
                            <td class="table-show-infomation"><a href="">click</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="tabs-6" role="tabpanel">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="table-name-column" scope="col">Thời gian</th>
                            <th class="table-name-column" scope="col" style="width:40%"> Tên, mã số doanh nghiệp
                            </th>
                            <th class="table-name-column" scope="col"> Mã số doanh nghiệp </th>
                            <th class="table-name-column" scope="col">Địa điểm</th>
                            <th class="table-name-column" scope="col">Loại thông báo</th>
                            <th class="table-name-column" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-show-infomation">34264fsfdf</td>
                            <td id="cell-2" class="table-show-infomation"> CÔNG TY TNHH XÂY hDỰNG DỊCH VỤ VÀ THƯƠNG
                                MẠI
                                ĐỨC HIẾU </td>
                            <td class="table-show-infomation">MÃ SỐ DN:233534534</td>
                            <td class="table-show-infomation">Tỉnh Tuyên Quang</td>
                            <td class="table-show-infomation">Đăng kí mới</td>
                            <td class="table-show-infomation"><a href="">click</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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