<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
    <title>Forum</title>
</head>
<body>
<?php
include 'header.php';
?>
<div class="row mx-0">
    <img src="./img/banner-01.png" alt="Banner image" width="100%">
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-9">
            <div class="event-1">
                <div class="row m-0">
                    <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Sự kiện Sắp Diễn Ra</div>
                </div>
                <div class="row mx-0 mar-bottom">
                    <div class="col-lg-12 bg-white bottom-radius">
                        <div class="row bg-white m-0 mb-3 bottom-radius">
                            <div class="col-lg-5 pt-3">
                                <img class="pb-3 h-100 w-100" src="./img/thumbnail-01.png">
                            </div>
                            <div class="col-lg-7">
                                <div class="row border-bottom mx-0 pt-3 pb-2">
                                    <div class="col-sm-6 text-left">Nguyễn Văn A</div>
                                    <div class="col-sm-6 text-right">01/06/2019</div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <a href="#"><h5 class="text-danger my-2">Team Building 2019: Mùa Hè Bất Tận</h5></a>
                                        <div class="text-break">
                                            <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, tóm
                                            tắt thông tin,
                                            tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin,
                                                tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin,</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row countdown mb-3 mx-0 pt-3">
                                    <div class="col-sm-6 font-italic">Thời gian còn lại:</div>
                                    <div class="col-sm-6 text-danger font-weight-bold"><p id="countdown"></p></div>
                                </div>
                                <div class="row mb-3 mx-0 pt-3">
                                    <div class="col-sm-6 border-bottom border-top py-3 d-flex justify-content-center">
                                        <div class="active mx-auto"><a href="#">
                                                <div class="like float-left mx-2"></div>
                                            </a>90
                                        </div>
                                        <div class="mx-auto"><a href="#">
                                                <div class="share float-left mx-2"></div>
                                            </a>29
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row px-2">
                                            <button type="button" class="btn btn-danger col-sm-12 py-3" data-toggle="modal"
                                                    data-target="#ResigModal">Tham Gia
                                            </button>
                                        </div>
                                        <div class="modal fade" id="ResigModal" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-danger" id="ResigModalLabel">Thông Tin
                                                            Tham Gia</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
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
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Đóng
                                                            </button>
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
                            <div class="col-lg-12 px-0">
                                <div class="row mx-0">
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-01.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-01.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-01.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-01.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-01.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-01.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0">
                                    <div class="col-lg-12">
                                        <div class="row mx-0">
                                            <div class="col-lg-12 border-top px-0 py-4">
                                                <a class="mx-2 pt-1 isDisabled" href="#"><i class="fas fa-angle-double-left"></i></a>
                                                <a class="mx-2 pt-1 isDisabled" href="#"><i class="fas fa-angle-left"></i></a>
                                                <a class="mx-2" href="#">01</a>
                                                <a class="mx-2" href="#">02</a>
                                                <a class="mx-2" href="#">03</a>
                                                <a class="mx-2 pt-1 isDisabled" href="#"><i class="fas fa-angle-right"></i></a>
                                                <a class="mx-2 pt-1 isDisabled" href="#"><i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="event-2">
                <div class="row m-0">
                    <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Chương Trình Đào Tạo</div>
                </div>
                <div class="row mx-0 mb-4">
                    <div class="col-lg-12 bg-white bottom-radius">
                        <div class="row bg-white m-0 mb-3 bottom-radius">
                            <div class="col-lg-5 pt-3">
                                <img class="pb-3 h-100 w-100" src="./img/thumbnail-02.png">
                            </div>
                            <div class="col-lg-7">
                                <div class="row border-bottom mx-0 pt-3 pb-2">
                                    <div class="col-sm-6 text-left">Nguyễn Văn A</div>
                                    <div class="col-sm-6 text-right">01/06/2019</div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <a href="#"><h5 class="text-danger my-2">Team Building 2019: Mùa Hè Bất Tận</h5></a>
                                        <div class="text-break">
                                            <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, tóm
                                            tắt thông tin,
                                            tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin,
                                                tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, tóm tắt thông tin, </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row countdown mb-3 mx-0 pt-3">
                                    <div class="col-sm-6 font-italic">Thời gian còn lại:</div>
                                    <div class="col-sm-6 text-danger font-weight-bold"><p id="countdown"></p></div>
                                </div>
                                <div class="row mb-3 mx-0 pt-3">
                                    <div class="col-sm-6 border-bottom border-top py-3 d-flex justify-content-center">
                                        <div class="active mx-auto"><a href="#">
                                                <div class="like float-left mx-2"></div>
                                            </a>90
                                        </div>
                                        <div class="mx-auto"><a href="#">
                                                <div class="share float-left mx-2"></div>
                                            </a>29
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row px-2">
                                            <button type="button" class="btn btn-danger col-sm-12 py-3" data-toggle="modal"
                                                    data-target="#ResigModal">Tham Gia
                                            </button>
                                        </div>
                                        <div class="modal fade" id="ResigModal" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-danger" id="ResigModalLabel">Thông Tin
                                                            Tham Gia</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
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
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Đóng
                                                            </button>
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
                            <div class="col-lg-12 px-0">
                                <div class="row mx-0">
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-02.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-02.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-02.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-02.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-02.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row m-0">
                                            <div class="col-lg-12 px-0">
                                                <div class="row bg-white m-0 mb-3 bottom-radius">
                                                    <div class="col-lg-5 pt-3">
                                                        <img class="pb-3 w-100 h-100" src="./img/thumbnail-02.png">
                                                    </div>
                                                    <div class="col-lg-7 px-0">
                                                        <div class="row border-bottom mx-0 pt-3 pb-2 mini-tittle">
                                                            <div class="col-sm-6 text-left pl-0">Nguyễn Văn A</div>
                                                            <div class="col-sm-6 text-right pr-0">01/06/2019</div>
                                                        </div>
                                                        <div class="row mx-0">
                                                            <div class="col-lg-12 px-0">
                                                                <a href="#"><h6 class="text-danger my-2">Team Building 2019:
                                                                        Mùa Hè Bất Tận</h6></a>
                                                                <div class="text-break">
                                                                    <p>tóm tắt thông tin, tóm tắt thông tin, tóm tắt
                                                                        thông tin, tóm tắt thông tin,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0">
                                    <div class="col-lg-12">
                                        <div class="row mx-0">
                                            <div class="col-lg-12 border-top px-0 py-4">
                                                <a class="mx-2 pt-1 isDisabled" href="#"><i class="fas fa-angle-double-left"></i></a>
                                                <a class="mx-2 pt-1 isDisabled" href="#"><i class="fas fa-angle-left"></i></a>
                                                <a class="mx-2" href="#">01</a>
                                                <a class="mx-2" href="#">02</a>
                                                <a class="mx-2" href="#">03</a>
                                                <a class="mx-2 pt-1 isDisabled" href="#"><i class="fas fa-angle-right"></i></a>
                                                <a class="mx-2 pt-1 isDisabled" href="#"><i class="fas fa-angle-double-right"></i></a>
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
        <div class="col-md-3">
            <div class="category-1">
                <div class="row mx-0">
                    <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Thông Báo</div>
                </div>
                <div class="row mx-0 mb-4 bg-white bottom-radius">
                    <div class="col-lg-12">
                        <ul class="list-group">
                            <li class="list-group-item p-0 border-0 over-flow"><a class="font-weight-bold over-flow"
                                                                                  href="#">Thông báo nghỉ lễ Giỡ Tổ Hùng
                                    Vương</a></li>
                            <li class="list-group-item p-0 border-0 over-flow"><a class="font-weight-bold over-flow"
                                                                                  href="#">Thông báo 02</a></li>
                            <li class="list-group-item p-0 border-0 over-flow"><a class="font-weight-bold over-flow"
                                                                                  href="#">Thông báo 02</a></li>
                            <li class="list-group-item p-0 border-0 over-flow"><a class="font-weight-bold over-flow"
                                                                                  href="#">Thông báo 02</a></li>
                            <li class="list-group-item p-0 border-0 over-flow"><a class="font-weight-bold over-flow"
                                                                                  href="#">Thông báo 02</a></li>
                            <li class="list-group-item p-0 border-0 over-flow"><a class="font-weight-bold over-flow"
                                                                                  href="#">Thông báo 02</a></li>
                            <li class="list-group-item p-0 border-0 over-flow"><a class="font-weight-bold over-flow"
                                                                                  href="#">Thông báo 02</a></li>
                            <li class="list-group-item p-0 border-0 over-flow"><a class="font-weight-bold over-flow"
                                                                                  href="#">Thông báo 02</a></li>
                        </ul>
                        <div class="row mx-0 justify-content-end border-top">
                            <div class="col-lg-12">
                                <a class="font-weight-bold py-1 text-danger float-right" href="#">Xem tiếp...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category-2">
                <div class="row mx-0">
                    <div class="col-lg-12 head-tittle py-3 font-weight-bold text-white">Nhu Cầu Tuyển Dụng</div>
                </div>
                <div class="row mx-0 mb-4 bg-white bottom-radius">
                    <div class="col-lg-12">
                        <div class="row mx-0 py-2">
                            <div class="col-lg-12">
                                <a href="#"><h5>Giám Sát Dự Án</h5></a>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Công Ty: </span>
                                        <span class="font-weight-bold">FUJITA</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Nơi Làm Việc: </span>
                                        <span class="font-weight-bold">TP.HCM</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Số Lượng: </span>
                                        <span class="font-weight-bold">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-0 py-2">
                            <div class="col-lg-12">
                                <a href="#"><h5>Giám Sát Dự Án</h5></a>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Công Ty: </span>
                                        <span class="font-weight-bold">FUJITA</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Nơi Làm Việc: </span>
                                        <span class="font-weight-bold">TP.HCM</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Số Lượng: </span>
                                        <span class="font-weight-bold">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-0 py-2">
                            <div class="col-lg-12">
                                <a href="#"><h5>Giám Sát Dự Án</h5></a>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Công Ty: </span>
                                        <span class="font-weight-bold">FUJITA</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Nơi Làm Việc: </span>
                                        <span class="font-weight-bold">TP.HCM</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Số Lượng: </span>
                                        <span class="font-weight-bold">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-0 py-2">
                            <div class="col-lg-12">
                                <a href="#"><h5>Giám Sát Dự Án</h5></a>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Công Ty: </span>
                                        <span class="font-weight-bold">FUJITA</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Nơi Làm Việc: </span>
                                        <span class="font-weight-bold">TP.HCM</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Số Lượng: </span>
                                        <span class="font-weight-bold">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-0 py-2">
                            <div class="col-lg-12">
                                <a href="#"><h5>Giám Sát Dự Án</h5></a>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Công Ty: </span>
                                        <span class="font-weight-bold">FUJITA</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Nơi Làm Việc: </span>
                                        <span class="font-weight-bold">TP.HCM</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-lg-12 px-0">
                                        <span class="font-italic recruit-infor mr-1">Số Lượng: </span>
                                        <span class="font-weight-bold">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-0 justify-content-end border-top">
                            <div class="col-lg-12">
                                <a class="font-weight-bold py-1 text-danger float-right" href="#">Xem tiếp...</a>
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
<?php include_once "footer.php"; ?>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2020 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

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

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2020 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

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
        document.getElementById("countdown2").innerHTML = days + " Ngày  |  " + hours + " : "
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