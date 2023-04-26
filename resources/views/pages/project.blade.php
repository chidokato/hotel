@extends('layout.index')

@section('title') {{$post->title ? $post->title : $post->name}} @endsection
@section('description') {{$post->description ? $post->description : $post->name.$post->name}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="{{asset('')}}frontend/Content/Css/room.css" rel="stylesheet" />
<link href="{{asset('')}}frontend/Content/Css/room-single.css" rel="stylesheet" />
<link href="{{asset('')}}frontend/Plugins/Validate/jquery-validation-1.13.1/jquery-validation.css" rel="stylesheet" />
@endsection
@section('content')

<section class="main">
    <div class="container">
        <div class="main_space"></div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="room-title">
                   <h1 class="title-name">Phòng Triple</h1>
                </div>
                
                <div class="block_text">
                    <div class="block_title">
                        <h2 class="block_title-name">Ảnh phòng</h2>
                    </div>
                    <div class="block_content">
                        <div class="image-roomSingle">
                            <div class="slider-roomSingle owl-carousel owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0.8s ease 0s; width: 6438px; transform: translate3d(-1609px, 0px, 0px);"><div class="owl-item cloned" style="width: 794.656px; margin-right: 10px;"><div class="item" data-hash="6059">
                                    <img src="{{asset('')}}frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony6.jpg" alt="No picture">
                    </div></div><div class="owl-item cloned" style="width: 794.656px; margin-right: 10px;"><div class="item" data-hash="6060">
                        <img src="{{asset('')}}frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony-Twin.jpg" alt="No picture">
                    </div></div><div class="owl-item active center" style="width: 794.656px; margin-right: 10px;"><div class="item" data-hash="6057">
                        <img src="{{asset('')}}frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony.jpg" alt="No picture">
                    </div></div><div class="owl-item" style="width: 794.656px; margin-right: 10px;"><div class="item" data-hash="6058">
                        <img src="{{asset('')}}frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony2.jpg" alt="No picture">
                    </div></div><div class="owl-item" style="width: 794.656px; margin-right: 10px;"><div class="item" data-hash="6059">
                        <img src="{{asset('')}}frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony6.jpg" alt="No picture">
                    </div></div><div class="owl-item" style="width: 794.656px; margin-right: 10px;"><div class="item" data-hash="6060">
                        <img src="{{asset('')}}frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony-Twin.jpg" alt="No picture">
                    </div></div><div class="owl-item cloned" style="width: 794.656px; margin-right: 10px;"><div class="item" data-hash="6057">
                        <img src="{{asset('')}}frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony.jpg" alt="No picture">
                    </div></div><div class="owl-item cloned" style="width: 794.656px; margin-right: 10px;"><div class="item" data-hash="6058">
                        <img src="{{asset('')}}frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony2.jpg" alt="No picture">
                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                            <div class="small_image_roomSingle">
                    <a class="button secondary url" href="#6057">
                        <img src="{{asset('')}}frontend/files/_thumbs/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony.jpg" alt="No picture">
                    </a>                    <a class="button secondary url" href="#6058">
                        <img src="{{asset('')}}frontend/files/_thumbs/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony2.jpg" alt="No picture">
                    </a>                    <a class="button secondary url" href="#6059">
                        <img src="{{asset('')}}frontend/files/_thumbs/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony6.jpg" alt="No picture">
                    </a>                    <a class="button secondary url" href="#6060">
                        <img src="{{asset('')}}frontend/files/_thumbs/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony-Twin.jpg" alt="No picture">
                    </a>                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="block_text">
                    <div class="block_title">
                        <h2 class="block_title-name">Chi tiết phòng</h2>
                    </div>
                    <div class="block_content">
                        <div style="text-align:justify">Phòng Triple có ban công với thiết kế hiện đại, được trang bị nội thất tiện nghi. Các chi tiết trong phòng được thiết kế hài hòa, nhẹ nhàng giúp đưa bạn về trạng thái thư giãn tuyệt đối. Phòng được lắp đặt cửa sổ kính giúp quý khách ngắm nhìn toàn cảnh khu nghỉ dưỡng xinh đẹp.<br>
&nbsp;</div>

                    </div>
                </div>


                <div class="nav_room-single">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Tổng quan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Đặc trưng</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="home">
                            <div class="room-single-text ">
                                <div class="room-single-text "><strong>Diện tích phòng</strong>: 35m<sup>2</sup>&nbsp;&nbsp;<br>
<strong>Loại giường:&nbsp;</strong>3 Giường đơn<br>
​<strong>Tiện ích:</strong> 02 trà, 02 cà phê, 02 nước lọc&nbsp; miễn phí trong phòng</div>

<div class="room-single-text " style="margin-left: 40px;">&nbsp; &nbsp; &nbsp;Bữa sáng hàng ngày</div>

                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu1">
                            <strong>Chính sách trẻ em:&nbsp;</strong>Tối đa hai trẻ em dưới 6 tuổi được miễn phí lưu trú và ăn sáng (điều kiện áp dụng: lưu trú cùng phòng với bố mẹ, không kê giường phụ).<br>
<strong>Giờ nhận phòng:&nbsp;</strong>Sau 14:00 PM<br>
<strong>Giờ trả phòng:&nbsp;</strong>Trước 12:00 AM<br>
<strong>Trả phòng muộn:&nbsp;</strong>Trước 18:00 PM: 50% tiền phòng
<div style="margin-left: 80px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sau 18:00 PM: 100% tiền phòng</div>

<div style="margin-left: 120px;">&nbsp;</div>

                        </div>
                    </div>
                </div>

                <div class="block_text">
                    <div class="block_title">
                        <h2 class="block_title-name">Tiện ích</h2>
                    </div>
                    <div class="block_content">
                        <table border="0" cellpadding="5" cellspacing="5" style="width:100%">
    <tbody>
        <tr>
            <td style="width:33%"><img alt="" src="{{asset('')}}frontend/files/images/icon/wifi.png" style="height:35px; width:35px">&nbsp;Miễn phí Wifi</td>
            <td><img alt="" src="{{asset('')}}frontend/files/images/icon/an-sansg.png" style="height:35px; width:35px">&nbsp;Miễn phí ăn sáng</td>
            <td><img alt="" src="{{asset('')}}frontend/files/images/icon/be-boi.png" style="height:35px; width:35px">&nbsp;Hồ bơi</td>
        </tr>
        <tr>
            <td><img alt="" src="{{asset('')}}frontend/files/images/icon/Group-40.png" style="height:35px; width:35px">&nbsp;Bãi đỗ xe</td>
            <td><img alt="" src="{{asset('')}}frontend/files/images/icon/gym.png" style="height:35px; width:35px">&nbsp;Gym</td>
            <td style="width:33%"><img alt="" src="{{asset('')}}frontend/files/images/icon/kets.png" style="height:35px; width:35px">&nbsp;Két sắt an toàn</td>
        </tr>
        <tr>
            <td><img alt="" src="{{asset('')}}frontend/files/images/icon/Untitled-1.png" style="height:35px; width:35px">&nbsp;Bàn làm việc</td>
            <td><img alt="" src="{{asset('')}}frontend/files/images/icon/spa.png" style="height:35px; width:35px">&nbsp;Spa</td>
            <td><img alt="" src="{{asset('')}}frontend/files/images/icon/ico_booking.png" style="height:35px; width:35px">&nbsp;Tivi</td>
        </tr>
    </tbody>
</table>
<img alt="" src="{{asset('')}}frontend/files/images/icon/black-wifi-icon-hi.png" style="width:30px"><br>
<br>
<br>
<br>
<br>
<br>
<br>
&nbsp;
                    </div>
                </div>

                

                

                <div class="main_space-mg30"></div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="reservation">
                    <div class="reservation_title">
                        <h5 class="reservation_title-name">
                            Thông tin đặt phòng
                        </h5>
                    </div>
                    <div class="reservation_form">
                        <div class="res_checkin">
                            <div class="res_checkin">
                                <form action="/phong-nghi" id="book-room" method="get">
                                    <input type="text" name="ID" value="12" hidden="">

                                    <label for="check_in">
                                        Ngày nhận phòng
                                    </label>
                                    <div class="form-control">
                                        <input type="text" name="CheckIn" class="res_checkin-input">
                                        <i class="far fa-calendar-minus"></i>
                                    </div>

                                    <label for="check_out">
                                        Ngày trả phòng
                                    </label>
                                    <div class="form-control">
                                        <input type="text" name="CheckOut" class="res_checkout-input">
                                        <i class="far fa-calendar-minus"></i>
                                    </div>

                                    <label for="Adult">Người lớn</label>
                                    <div class="Adult form-control">
                                        <select name="Adult" id="Adult">
                                            <option value="adult">-số lượng-</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>

                                    <label for="children">Trẻ em</label>
                                    <div class="children form-control">
                                        <select name="Child" id="children">
                                            <option value="children">-số lượng-</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>

                                    <button class="button_sb">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    

                    <div class="reservation_hotel">
                        <div class="reservation_title">
                            <h5 class="reservation_title-name">
                                Tại sao lại chọn Hotel Luxe
                            </h5>
                        </div>
                        <div class="hotel_content">
                            <ul>
                                <li>
                                    <i class="fa fa-gavel"></i> Tính minh bạch - Không có phí ẩn
                                </li>
                                <li>
                                    <i class="fa fa-plane"></i> Tính minh bạch - Không có phí ẩn
                                </li>
                                <li>
                                    <i class="fas fa-dollar-sign"></i> Giá tiền hợp lý
                                </li>
                                <li>
                                    <i class="fa fa-bed"></i> Phòng sang trọng cho bạn thoải mái
                                </li>
                                <li>
                                    <i class="fa fa-user-secret"></i> Hoàn tiền dễ dàng khi đặt phòng trực tuyến
                                </li>
                                <li>
                                    <i class="fab fa-tripadvisor"></i> Khách sạn từng đoạt giải thưởng trên TripAdviosr
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div></section>

@endsection
@section('js')

    <script src="{{asset('')}}frontend/Content/Js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript " src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js "></script>
    <script src="{{asset('')}}frontend/Plugins/bootstrap-4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('')}}frontend/Plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('')}}frontend/Plugins/slick/slick.min.js"></script>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js "></script>
    <script src="{{asset('')}}frontend/Plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{asset('')}}frontend/Plugins/validation1.19.3/jquery.validate.min.js"></script>
    <script src="{{asset('')}}frontend/Plugins/rating/rating.js"></script>

    
    <script src="{{asset('')}}frontend/Content/Js/main.js"></script>

    <script src="frontend/content/Js/menu.js"></script>

@endsection