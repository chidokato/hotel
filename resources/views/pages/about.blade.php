@extends('layout.index')

@section('title') Công Ty Cổ Phần Bất Động Sản Indochine @endsection
@section('description') Công Ty Cổ Phần Bất Động Sản Indochine là công ty thành viên của Đất Xanh Miền Bắc – đơn vị trực thuộc Tập Đoàn Đất Xanh @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<!--Link css page index-->
<link href="frontend/content/Css/main.css" rel="stylesheet" />
<link href="frontend/content/Css/responsive.css" rel="stylesheet" />
<link href="frontend/content/Css/room.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
<!-- Vendor CSS Files cdn -->
<link rel="stylesheet" href="frontend/Files/plugins/bootstrap-4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="frontend/Files/fonts/fontawesome-pro-5.15.2/css/all.min.css">
<!-- Plugin css local-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
<link rel="stylesheet" href="frontend/Files/plugins/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="frontend/Files/plugins/owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" href="frontend/Files/plugins/slick/slick.css">
<link rel="stylesheet" href="frontend/Files/plugins/slick/slick-theme.css">
<link rel="stylesheet" href="frontend/Files/plugins/daterangepicker/daterangepicker.css">
<link href="frontend/content/Css/room.css" rel="stylesheet" />
<link href="frontend/content/Css/room-single.css" rel="stylesheet" />
<link href="frontend/Plugins/Validate/jquery-validation-1.13.1/jquery-validation.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/menu.css">
<link href="frontend/content/Css/page-about.css" rel="stylesheet" />
@endsection
@section('content')

<section class="banner">
    <div class="header_banner">
        <img src="frontend/files/images/bn/slide-01.jpg" alt="No picture">
        <div class="header_bgr"></div>
    </div>
    
</section>


<section class="main">
    <div class="main_space"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 xol-xs-12">
                <div class="page_subtitle">CHÚNG TÔI CHĂM SÓC MỌI NGƯỜI</div>
                <div class="page_title">
                    <h2 class="page_title-name">
                        Chào mừng đến với Luxe Hotel
                    </h2>
                </div>
                <div class="page_text">
                    <p>
                        </p><div style="text-align: justify;">Luxe Hotel cung cấp đầy đủ những dịch vụ tiện ích, có thủ tục kiểm tra nhanh chóng, wi-fi công cộng miễn phí phủ sóng toàn bộ khách sạn… Điểm nổi bật của Luxe Hotel là nhà hàng cung cấp được cả ẩm thực phương Đông và phương Tây được xây dựng và phục vụ trên tầng cao nhất. Quý khách có thể vừa thưởng thức bữa tối ngon miệng vừa ngắm bầu trời đầy sao và thành phố khi về đêm. Ngoài ra, du khách có thể tận hưởng những dịch vụ khác như spa, phòng gym ngay trong khu vực khách sạn. Thật tuyệt vời khi mà, những thới quen rèn luyện sức khỏe, chăm sóc bản thân của bạn vẫn được duy trì đều đặn trong những kỳ nghỉ dài ngày.<br>
<br>
Luxe Hotel tự tin mang đến cho bạn sự thăng hoa về cảm xúc, những trải nghiệm tốt nhất, tuyệt vời nhất trong kỳ nghỉ dưỡng của bạn. Hãy đến với chúng tôi, chúng tôi đảm bảo rằng bạn sẽ không hối tiếc.</div>

                    <p></p>
                    <p>
                        <b>
                            <i></i>
                        </b>
                    </p>
                </div>
               
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 xol-xs-12">
                <div class="page_col-right">
                    <div class="page_col-right-img">
                        <img src="frontend/files/images/ab.jpg" alt="No picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <div class="box-list">

            <div class="box-item">
                <div class="box-img"><img alt="dua-don-san-bay" src="frontend/files/images/dv/Nhu-cau-su-dung-xe-don-nguoi-ra-san-bay-tang-cao.jpg"></div>
                <div class="box-content">

                    <h3 class="box-title">Đưa đón sân bay</h3>
                    <div class="box-text"><span style="color:rgb(32, 33, 36)">Chúng tôi sẽ đón từ sân bay trong khi bạn thoải mái trên chuyến đi của mình.</span></div>
                    <div class="hotel_infomation-button">
                        <a href="/FormBook">
                            <button>
                                Đặt phòng ngay
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            <div class="box-item">
                <div class="box-img"><img alt="bua-sang-mien-phi" src="frontend/files/images/dv/bua-sang-1.jpg"></div>
                <div class="box-content">

                    <h3 class="box-title">Bữa sáng miễn phí</h3>
                    <div class="box-text">Đừng tiêu một xu cho bữa sáng.&nbsp;<span style="color:rgb(32, 33, 36)">Đó hoàn toàn là do chúng tôi.</span></div>
                    <div class="hotel_infomation-button">
                        <a href="/FormBook">
                            <button>
                                Đặt phòng ngay
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            <div class="box-item">
                <div class="box-img"><img alt="huong-dan-vien-du-lich-thanh-pho" src="frontend/files/images/dv/tim-hieu-thu-nhap-cua-huong-dan-vien-du-lich-quoc-te-03.jpg"></div>
                <div class="box-content">

                    <h3 class="box-title">Hướng dẫn viên du lịch thành phố</h3>
                    <div class="box-text"><span style="color:rgb(32, 33, 36)">Khám phá thành phố với hướng dẫn viên du lịch trong nhà của chúng tôi. </span><span style="color:rgb(32, 33, 36)">Chúng tôi đã trở lại của bạn.</span></div>
                    <div class="hotel_infomation-button">
                        <a href="/FormBook">
                            <button>
                                Đặt phòng ngay
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            <div class="box-item">
                <div class="box-img"><img alt="tiec-bbq-bai-bien" src="frontend/files/images/dv/Corallo-FIRE-set-up-e1554377061139.jpg"></div>
                <div class="box-content">

                    <h3 class="box-title">Tiệc BBQ bãi biển</h3>
                    <div class="box-text"><span style="color:rgb(32, 33, 36)">Trở lại bãi biển và nấu các công thức nấu ăn từ masterchef của chúng tôi.</span></div>
                    <div class="hotel_infomation-button">
                        <a href="/FormBook">
                            <button>
                                Đặt phòng ngay
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
    </div>

    <div class="main_space"></div>
    <div class="container">
        <div class="hotel_icon">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="icon_content">
                        <div class="icon_show">
                            <i class="fas fa-key"></i>
                        </div>
                        <div class="icon_number">
                            300
                        </div>
                        <div class="icon_text">
                            Phòng 5 sao
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="icon_content">
                        <div class="icon_show">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="icon_number">
                            3
                        </div>
                        <div class="icon_text">
                            Giải thưởng
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="icon_content">
                        <div class="icon_show">
                            <i class="fas fa-fire"></i>
                        </div>
                        <div class="icon_number">
                            100
                        </div>
                        <div class="icon_text">
                            Tiệc BBQ
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="icon_content">
                        <div class="icon_show">
                            <i class="fas fa-cocktail"></i>
                        </div>
                        <div class="icon_number">
                            40K
                        </div>
                        <div class="icon_text">
                            Quản lí sự kiện
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_space border-bottom"></div>
    <div class="main_space"></div>
    <div class="book-room-text">
        <div class="container">
            <p style="width: 70%;text-align: center;margin: 0 auto;">Những kỷ niệm có nghĩa là để được xem lại. Chúng tôi mời bạn trải nghiệm The Ritz-Carlton, Đảo Amelia qua con mắt của những người bạn đồng hành và chia sẻ những khoảnh khắc khó quên trong kỳ nghỉ của chính bạn.</p>
            <div class="button_book-room">
                <a href="#">
                    <button>Đặt phòng</button>
                </a>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.808719195436!2d105.77227431467809!3d21.040338292759436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c563dba4eb%3A0xc3161d468d77f9aa!2zSUlUIFRFQ0hDT00gLSBDw7RuZyB0eSBUTkhIIEPDtG5nIG5naOG7hyB2w6AgdHJ1eeG7gW4gdGjDtG5nIElJVA!5e0!3m2!1svi!2s!4v1663151146793!5m2!1svi!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>


@endsection
@section('script')

@endsection