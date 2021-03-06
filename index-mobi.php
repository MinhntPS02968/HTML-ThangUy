<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Forum</title>
</head>
<body>
<?php
include 'header-mobi.php';
?>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="row m-0">
                <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Sự kiện Sắp Diễn Ra</div>
            </div>
            <div class="row bg-white m-0 mb-4 bottom-radius">
                <div class="col-lg-5 pt-3">
                    <img class="pb-3" src="./img/thumbnail-01.png" height="100%" width="100%">
                </div>
                <div class="col-lg-7">
                    <div class="row border-bottom mx-0 pt-3 pb-2">
                        <div class="col-sm-6 text-left">Nguyễn Văn A</div>
                        <div class="col-sm-6 text-right">01/06/2019</div>
                    </div>
                    <div class="row mx-0">
                        <a href="#"><h5 class="text-danger my-2">Team Building 2019: Mùa Hè Bất Tận</h5></a>
                        <p class="text-break">tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin,
                            tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin,
                            tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, </p>
                    </div>
                    <div class="row countdown mb-3 mx-0 pt-3">
                        <div class="col-sm-6 font-italic">Thời gian còn lại:</div>
                        <div class="col-sm-6 text-danger font-weight-bold"><p id="countdown"></p></div>
                    </div>
                    <div class="row mb-3 mx-0 pt-3">
                        <div class="col-sm-6 border-bottom border-top py-3">
                            <div class="float-left active"><a href="#"><div class="like float-left mx-2"></div></a>90</div>
                            <div class="float-left"><a href="#"><div class="share float-left mx-2"></div></a>29</div>
                            <div class="float-left"><a href="#"><div class="tag float-left mx-2"></div></a>17</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row px-2">
                                <button type="button" class="btn btn-danger col-sm-12 py-3" data-toggle="modal" data-target="#ResigModal">Tham Gia</button>
                            </div>
                            <div class="modal fade" id="ResigModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="ResigModalLabel">Thông Tin Tham Gia</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post">
                                            <div class="modal-body">
                                                <div class="input-group row mb-3">
                                                    <div class="input-group-prepend col-lg-5">
                                                        <span class="input-group-text  border-0 bg-white" id="">Họ & Tên </span>
                                                    </div>
                                                    <input type="text" class="form-control col-lg-7" required>
                                                </div>

                                                <div class="input-group row mb-3">
                                                    <div class="input-group-prepend col-lg-5">
                                                        <span class="input-group-text  border-0 bg-white" id="">Số Điện Thoại </span>
                                                    </div>
                                                    <input type="number" class="form-control col-lg-7" required>
                                                </div>

                                                <div class="input-group row mb-3">
                                                    <div class="input-group-prepend col-lg-5">
                                                        <span class="input-group-text  border-0 bg-white" id="">Công Ty </span>
                                                    </div>
                                                    <input type="text" class="form-control col-lg-7" required>
                                                </div>

                                                <div class="input-group row mb-3">
                                                    <div class="input-group-prepend col-lg-5">
                                                        <span class="input-group-text  border-0 bg-white" id="">Email </span>
                                                    </div>
                                                    <input type="email" class="form-control col-lg-7" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-danger">Gửi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row m-0">
                        <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Tiêu Điểm Trong Tuần</div>
                        <div class="row bg-white m-0 mb-4 bottom-radius">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-5 pt-3">
                                        <img class="pb-3" src="./img/thumbnail-01.png" height="100%" width="100%">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                        </div>
                                        <div class="row mx-0">
                                            <div class="col-lg-12 p-0">
                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019: Mùa Hè Bất
                                                        Tận</h6></a>
                                                <div class="text-break">
                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                        thông tin, tóm tắt thông tin,</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-sm-12 px-0">
                                        <a href="#" class="text-dark"><h6>Tiêu đề tiêu điểm 02  Tiêu đề tiêu điểm 02</h6></a>
                                        <a href="#" class="text-dark"><h6>Tiêu đề tiêu điểm 02  Tiêu đề tiêu điểm 02</h6></a>
                                        <a href="#" class="text-dark"><h6>Tiêu đề tiêu điểm 02  Tiêu đề tiêu điểm 02</h6></a>
                                        <a href="#" class="text-dark"><h6>Tiêu đề tiêu điểm 02  Tiêu đề tiêu điểm 02</h6></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row m-0">
                        <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Tiêu Điểm Trong Tuần</div>
                        <div class="row bg-white m-0 mb-4 bottom-radius">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-5 pt-3">
                                        <img class="pb-3" src="./img/thumbnail-01.png" height="100%" width="100%">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                        </div>
                                        <div class="row mx-0">
                                            <div class="col-lg-12 p-0">
                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019: Mùa Hè Bất
                                                        Tận</h6></a>
                                                <div class="text-break">
                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                        thông tin, tóm tắt thông tin,</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-sm-12 px-0">
                                        <a href="#" class="text-dark"><h6>Tiêu đề tiêu điểm 02  Tiêu đề tiêu điểm 02</h6></a>
                                        <a href="#" class="text-dark"><h6>Tiêu đề tiêu điểm 02  Tiêu đề tiêu điểm 02</h6></a>
                                        <a href="#" class="text-dark"><h6>Tiêu đề tiêu điểm 02  Tiêu đề tiêu điểm 02</h6></a>
                                        <a href="#" class="text-dark"><h6>Tiêu đề tiêu điểm 02  Tiêu đề tiêu điểm 02</h6></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Sáng Kiến</div>
            </div>
            <div class="row bg-white m-0 mb-4 bottom-radius">
                <div class="col-md-12">
                    <div class="row border-bottom py-2 mb-1 font-italic mini-tittle">
                        <div class="col-md-7">Sáng kiến mới nhất</div>
                        <div class="col-md-3">Đóng góp bởi</div>
                        <div class="col-md-2">Vào Ngày</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-7"><a href="#"> Cải Thiện Quy Trình Làm Việc Đạt Kết Quả Cao</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-7"><a href="#">Cải Thiện Quy Trình Làm Việc Đạt Kết Quả Cao</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-7"><a href="#">Cải Thiện Quy Trình Làm Việc Đạt Kết Quả Cao</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-7"><a href="#">Cải Thiện Quy Trình Làm Việc Đạt Kết Quả Cao</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-1 border-bottom">
                        <div class="col-md-7"><a href="#">Cải Thiện Quy Trình Làm Việc Đạt Kết Quả Cao</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-3">
                        <div class="col-md-9">
                            <div class="row countdown mb-3 mx-0 pt-3 pb-4">
                                <div class="col-sm-6 mx-auto">Tổng Số Sáng kiến <span class="text-danger">19</span>
                                </div>
                                <div class="col-sm-6 mx-auto">Thành Viên Đóng Góp <span class="text-danger">17</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row px-2">
                                <button type="button" class="btn btn-danger col-sm-12 py-3">Đóng Góp</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-0">
                <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Chủ Đề Thảo Luận</div>
            </div>
            <div class="row bg-white m-0 bottom-radius">
                <div class="col-md-12">
                    <div class="row border-bottom py-2 mb-1 font-italic mini-tittle">
                        <div class="col-md-7">Chủ Đề Hot</div>
                        <div class="col-md-3">Đóng góp bởi</div>
                        <div class="col-md-2">Vào Ngày</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-7"><a href="#">Hình ảnh giao lưu ăn nhậu giữa TUIE và TuSEIki</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-7"><a href="#">Chủ Đề 01</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-7"><a href="#">Chủ Đề 01</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-7"><a href="#">Chủ Đề 01</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-1 border-bottom">
                        <div class="col-md-7"><a href="#">Chủ Đề 01</a></div>
                        <div class="col-md-3">Tên Thành Viên 01</div>
                        <div class="col-md-2">01 05 2019</div>
                    </div>
                    <div class="row py-3">
                        <div class="col-md-9">
                            <div class="row countdown mb-3 mx-0 pt-3 pb-4">
                                <div class="col-sm-6 mx-auto">Tổng Số Sáng kiến <span class="text-danger">19</span>
                                </div>
                                <div class="col-sm-6 mx-auto">Thành Viên Đóng Góp <span class="text-danger">17</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row px-2">
                                <button type="button" class="btn btn-danger col-sm-12 py-3">Tham Gia</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 new-employ">
            <div class="row m-0">
                <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Nhân Sự Mới trong Tháng</div>
            </div>
            <div class="row bg-white m-0 bottom-radius pb-3">
                <div id="slideControls" class="carousel slide col-lg-12" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item row ml-0 mt-3 active">
                            <div class="col-lg-12">
                                <div class="row mx-0 infor-employ text-center">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 mt-3">
                                        <img class="avt-circle" src="./img/thumbnail-01.png" alt=""/>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="container-fluid">
                                        <div class="col-sm-12 text-center">
                                            <p class="pt-3 text-danger font-weight-bold">Trương Thị F</p>
                                            <p class="border-top border-bottom py-2">Trợ Lý</p>
                                            <p class="font-weight-bold">TUG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item row ml-0 mt-3">
                            <div class="col-lg-12">
                                <div class="row mx-0 infor-employ text-center">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 mt-3">
                                        <img class="avt-circle" src="./img/thumbnail-01.png" alt=""/>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="container-fluid">
                                        <div class="col-sm-12 text-center">
                                            <p class="pt-3 text-danger font-weight-bold">Trương Thị F</p>
                                            <p class="border-top border-bottom py-2">Trợ Lý</p>
                                            <p class="font-weight-bold">TUG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item row ml-0 mt-3">
                            <div class="col-lg-12">
                                <div class="row mx-0 infor-employ text-center">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 mt-3">
                                        <img class="avt-circle" src="./img/thumbnail-01.png" alt=""/>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="container-fluid">
                                        <div class="col-sm-12 text-center">
                                            <p class="pt-3 text-danger font-weight-bold">Trương Thị F</p>
                                            <p class="border-top border-bottom py-2">Trợ Lý</p>
                                            <p class="font-weight-bold">TUG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 new-employ">
            <div class="row m-0">
                <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Sinh Nhật trong Tháng</div>
            </div>
            <div class="row bg-white m-0 bottom-radius pb-3">
                <div id="slideControls" class="carousel slide col-lg-12" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item row ml-0 mt-3 active">
                            <div class="col-lg-12">
                                <div class="row mx-0 infor-employ text-center">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 mt-3">
                                        <img class="avt-circle" src="./img/thumbnail-01.png" alt=""/>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="container-fluid">
                                        <div class="col-sm-12 text-center">
                                            <p class="pt-3 text-danger font-weight-bold">Trương Thị F</p>
                                            <p class="border-top border-bottom py-2">Trợ Lý</p>
                                            <p class="font-weight-bold">TUG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item row ml-0 mt-3">
                            <div class="col-lg-12">
                                <div class="row mx-0 infor-employ text-center">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 mt-3">
                                        <img class="avt-circle" src="./img/thumbnail-01.png" alt=""/>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="container-fluid">
                                        <div class="col-sm-12 text-center">
                                            <p class="pt-3 text-danger font-weight-bold">Trương Thị F</p>
                                            <p class="border-top border-bottom py-2">Trợ Lý</p>
                                            <p class="font-weight-bold">TUG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item row ml-0 mt-3">
                            <div class="col-lg-12">
                                <div class="row mx-0 infor-employ text-center">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 mt-3">
                                        <img class="avt-circle" src="./img/thumbnail-01.png" alt=""/>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="container-fluid">
                                        <div class="col-sm-12 text-center">
                                            <p class="pt-3 text-danger font-weight-bold">Trương Thị F</p>
                                            <p class="border-top border-bottom py-2">Trợ Lý</p>
                                            <p class="font-weight-bold">TUG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "footer-mobi.php"; ?>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2020 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("countdown").innerHTML = days + " Ngày  |  " + hours + " : "
            + minutes + " : " + seconds + " ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
</body>
</html>