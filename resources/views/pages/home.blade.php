@extends('layout.index')

@section('title') Công Ty Cổ Phần Bất Động Sản Indochine @endsection
@section('description') Công Ty Cổ Phần Bất Động Sản Indochine là công ty thành viên của Đất Xanh Miền Bắc - UY TÍN số 1 thị trường BĐS Việt Nam @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')

@endsection

@section('content')

@include('layout.slider')

<section class="main">
    <div class="main_space"></div>
    <div class="main_hotel">
        <div class="container hotel_container">
            <div class="row hotel_row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotel_col">
                    <div class="hotel_img">
                        <img src="data/home/slider2.jpg" alt="No picture">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotel_col">
                    <div class="hotel_text">
                        <div class="text_name">
                            <h1 style="font-size: 1.7rem">
                                {{__('lang.heading1')}}
                            </h1>
                            <div class="text">
                                <div style="text-align:justify">
                                    <p>{{__('lang.text1')}}</p>
                                    <p>{{__('lang.text2')}}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($home_cats as $home_cat)
    <div class="main_space-end"></div>
    <div class="main_space"></div>
    <div class="main_lodging">
        <div class="container lodging_container">
            <div class="lodging_title">
                <span>{{__('lang.RoomClasses')}}</span>
                <h2 class="title" style="color:#111111;">{{$home_cat->name}}</h2>
            </div>
        </div>
        <div class="main_space-mg30"></div>
        <div class="carousel_lod">
            <div class="container car_container">
                <div class="carousel_lod--list owl-carousel">
                    @foreach($posts as $post)
                    @if($post->category_tras_id == $home_cat->id)
                    <div class="item">
                        <div class="col-lg-12 col-md-12">
                            <a href="phong-nghi/12/phong-triple.html">
                                <div class="item_content">
                                    <div class="item_img">
                                        <img src="data/product/{{$post->Post->img}}" alt="phong-triple">
                                    </div>
                                    <div class="item_text">
                                        <h3>{{$post->name}}</h3>
                                        <div class="item_text-price">
                                            @if($post->price)
                                            Giá: chỉ từ {{$post->price}} {{$post->unit}}
                                            @else
                                            Giá: liên hệ
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="main_space"></div>
    <!--End lodging-->
    <div class="carousel_two">
        <div class="carousel_two-n owl-carousel owl-theme">

                <div class="item" style="background-image: url(frontend/files/images/dv/spa/10.jpg);height: 600px;background-repeat: no-repeat;background-size: cover;">
                    <div class="col-lg-6 col-md-6 car-t-overlay"></div>
                    <div class="item_context">
                        <div class="container car-t-container">
                            <div class="col-lg-6 col-md-6">
                                <h3 class="title">
                                    Spa như chưa từng c&#243; trước đ&#226;y
                                </h3>
                                <div class="text">
                                    <p>Ngay từ khi bạn bước v&agrave;o, mọi cảm gi&aacute;c đều mời bạn thư gi&atilde;n. H&atilde;y tham gia một cuộc h&agrave;nh tr&igrave;nh kh&aacute;m ph&aacute; v&agrave; kết nối lại t&acirc;m tr&iacute;, cơ thể v&agrave; tinh thần - được hướng dẫn bởi c&aacute;c nh&agrave; trị liệu Aman gi&agrave;u kinh nghiệm của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i mong được ch&agrave;o đ&oacute;n bạn.</p>
                                </div>
                                <div class="button_booknow">
                                    <a href="lien-he1.html">
                                        <button>Li&#234;n hệ</button>
                                    </a>
                                </div>
                                <div class="nav-slide">
                                    <div class="nav-prev">
                                        <i class="fal fa-angle-left"></i>
                                    </div>
                                    <div class="nav-next">
                                        <i class="fal fa-angle-right"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(frontend/files/images/dv/trai-nghiem-do-thi-tinh-te/claudio-guglieri-194323-unsplash-1.jpg);height: 600px;background-repeat: no-repeat;background-size: cover;">
                    <div class="col-lg-6 col-md-6 car-t-overlay"></div>
                    <div class="item_context">
                        <div class="container car-t-container">
                            <div class="col-lg-6 col-md-6">
                                <h3 class="title">
                                    Trải nghiệm đ&#244; thị tinh tế
                                </h3>
                                <div class="text">
                                    <p>Ngay từ khi bạn bước v&agrave;o, mọi cảm gi&aacute;c đều mời bạn thư gi&atilde;n. H&atilde;y tham gia một cuộc h&agrave;nh tr&igrave;nh kh&aacute;m ph&aacute; v&agrave; kết nối lại t&acirc;m tr&iacute;, cơ thể v&agrave; tinh thần - được hướng dẫn bởi c&aacute;c nh&agrave; trị liệu Aman gi&agrave;u kinh nghiệm của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i mong được ch&agrave;o đ&oacute;n bạn.</p>
                                </div>
                                <div class="button_booknow">
                                    <a href="lien-he1.html">
                                        <button>Li&#234;n hệ</button>
                                    </a>
                                </div>
                                <div class="nav-slide">
                                    <div class="nav-prev">
                                        <i class="fal fa-angle-left"></i>
                                    </div>
                                    <div class="nav-next">
                                        <i class="fal fa-angle-right"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="main_space-end" style="border-bottom: none;"></div>
    <!--End experience-->
    <div class="main_vacation">
        <div class="container vacation_container">
            <div class="vacation_title">
                
                <h2 class="title" style="color:#111111;margin:0 0 30px 0">Dịch vụ</h2>
            </div>
            <div class="row vacation_row">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="vacation_content">
                                <div class="vacation_img">
                                    <img src="frontend/files/images/dv/Nhu-cau-su-dung-xe-don-nguoi-ra-san-bay-tang-cao.jpg" alt="No picture">
                                </div>
                                <div class="vacation_overlay"></div>
                                <div class="vacation_icon">
                                    
                                    <div class="icon_title">
                                        Đưa đ&#243;n s&#226;n bay
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="vacation_content">
                                <div class="vacation_img">
                                    <img src="frontend/files/images/dv/bua-sang-1.jpg" alt="No picture">
                                </div>
                                <div class="vacation_overlay"></div>
                                <div class="vacation_icon">
                                    
                                    <div class="icon_title">
                                        Bữa s&#225;ng miễn ph&#237;
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="vacation_content">
                                <div class="vacation_img">
                                    <img src="frontend/files/images/dv/tim-hieu-thu-nhap-cua-huong-dan-vien-du-lich-quoc-te-03.jpg" alt="No picture">
                                </div>
                                <div class="vacation_overlay"></div>
                                <div class="vacation_icon">
                                    
                                    <div class="icon_title">
                                        Hướng dẫn vi&#234;n du lịch th&#224;nh phố
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="vacation_content">
                                <div class="vacation_img">
                                    <img src="frontend/files/images/dv/Corallo-FIRE-set-up-e1554377061139.jpg" alt="No picture">
                                </div>
                                <div class="vacation_overlay"></div>
                                <div class="vacation_icon">
                                    
                                    <div class="icon_title">
                                        Tiệc BBQ b&#227;i biển
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <div class="main_youtube" style="background-image: url(frontend/files/files/background.jpg);background-repeat: no-repeat;background-size: cover;height: 600px;">
        <div class="youtube_overlay">
            <div class="youtube_text">
                <div class="youtube_icon">
                    <a href="https://youtu.be/6jqcud6MwLU" data-fancybox=""><i class="fab fa-youtube"></i></a>
                </div>
                <div class="youtube_subtitle">Khám phá. Đi lang thang. Nghỉ ngơi</div>
                <h3 class="youtube_title">
                    Một cuộc đi chơi bạn sẽ <br>đặc biệt nhớ tới
                </h3>
            </div>
        </div>
    </div>
    <!--End youtube-->
    <div class="main_space"></div>
    <div class="team_orthers">
        <div class="container team_container">
            <div class="team_text">
                <span class="subtitle"></span>
                <h2 class="title" style="color:#111111;margin: 0 0 30px 0;font-weight: 400;">Phản hồi kh&#225;ch h&#224;ng</h2>
            </div>
            <div class="row team_row">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="orthers_item">
                            <div class="orther_item-img">
                                <img src="frontend/files/files/mike-fleetwood.jpg" alt="No picture">
                            </div>
                            <div class="orther_item-name">Robert Downey Jr</div>
                            <div class="orther_item-text">
                                <p>
                                    Tôi rất thích buổi sáng đi dạo trong khuân viên của khách sạn, không khí rất trong lành và có rất nhiều loài hoa đẹp mà tôi chưa từng được thấy.
                                </p>
                            </div>
                            <div class="orther_item-logo">
                                <img src="frontend/files/files/tripadvisor.png" alt="No picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="orthers_item">
                            <div class="orther_item-img">
                                <img src="frontend/files/files/joanna-roberts.jpg" alt="No picture">
                            </div>
                            <div class="orther_item-name">Jenni</div>
                            <div class="orther_item-text">
                                <p>
                                    "Chỗ ở rất thoải mái, rộng rãi và đặc biệt là rất thoáng mát và không khí rất trong lành. Tôi rất ưng ý với những món ăn được phục vụ tại khách sạn. Tôi nhất định sẽ quay trở lại đây trong tương lai gần."
                                </p>
                            </div>
                            <div class="orther_item-logo">
                                <img src="frontend/files/files/booking.png" alt="No picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="orthers_item">
                            <div class="orther_item-img">
                                <img src="frontend/files/files/alex-johnson.jpg" alt="No picture">
                            </div>
                            <div class="orther_item-name">Hostal Miralva</div>
                            <div class="orther_item-text">
                                <p>
                                    "Chất lương các dịch vụ của khách sạn rất tốt, tôi và gia đình của tôi đã có những trải nghiệm vô cùng tuyệt vời nơi đây."
                                </p>
                            </div>
                            <div class="orther_item-logo">
                                <img src="frontend/files/files/booking.png" alt="No picture">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <!--End team orther-->
    <div class="main_offer" style="background-image: url(frontend/files/images/hotel/5f8b5279e24f16114f5e.jpg);background-repeat: no-repeat;background-size: cover;height: 600px;">
        <div class="youtube_overlay">
            <div class="youtube_text">
                <form action="https://luxehotel.webhotel.vn/lien-he" method="get">
                    <input type="hidden" name="ID" value="21" />
                    <div class="youtube_subtitle">Chỉ c&#243; trong th&#225;ng 3</div>
                    <h3 class="youtube_title">
                       Giảm 20% <br>Giảm gi&#225; ưu đ&#227;i th&#225;ng 3
                    </h3>
                    <div class="button_getnow">
                        <a href="javascript:void(0)"><button>Đăng ký ngay</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <!--End offer-->
    <div class="main_news">
        <div class="container news_container">
            <div class="news_text">
                <span class="subtitle">Bài viết</span>
                <h2 class="title" style="color:#111111;margin: 0 0 30px 0;font-weight: 400;">Những bài viết nổi bật</h2>
            </div>
            <div class="news_list">
                <div class="row news_list-row">

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                        <img src="frontend/files/images/news/Cho_tinh_Sapa_3.jpg" alt="cho-tinh-sapa">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                            Chợ t&#236;nh Sapa
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        Chợ t&igrave;nh Sapa được tổ chức tại thị trấn Sapa, đ&acirc;y l&agrave; phi&ecirc;n chợ của d&acirc;n tộc Dao được tổ chức v&agrave;o tối thứ 7 h&agrave;ng tuần.
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4142/nui-fansipan.html">
                                        <img src="frontend/files/images/news/Fansipan-Mountain.jpg" alt="nui-fansipan">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4142/nui-fansipan.html">
                                            N&#250;i Fansipan
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        ​Đỉnh Phanxipăng - với độ cao 3.143m so với mực nước biển, nằm về ph&iacute;a T&acirc;y Nam thị trấn Sa Pa, huyện Sa Pa.
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/4142/nui-fansipan.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4140/%e2%80%8bthac-tinh-yeu.html">
                                        <img src="frontend/files/images/news/thac-tinh-yeu-sapa.jpg" alt="​thac-tinh-yeu">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4140/%e2%80%8bthac-tinh-yeu.html">
                                            ​Th&#225;c T&#236;nh Y&#234;u
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        ​Th&aacute;c T&igrave;nh Y&ecirc;u l&agrave; một ngọn th&aacute;c nổi tiếng nằm ở x&atilde; San Sả Hồ, c&aacute;ch trung t&acirc;m thị trấn Sa Pa 16 km.&nbsp;
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/4140/%e2%80%8bthac-tinh-yeu.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4138/nui-ham-rong.html">
                                        <img src="frontend/files/images/news/1463025766_nui-ham-rong-1.jpg" alt="nui-ham-rong">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4138/nui-ham-rong.html">
                                            N&#250;i H&#224;m Rồng
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        N&uacute;i H&agrave;m Rồng ở Thanh H&oacute;a nằm trong quần thể di t&iacute;ch H&agrave;m Rồng bao gồm: Cầu H&agrave;m Rồng, n&uacute;i H&agrave;m Rồng v&agrave; Thiền viện Tr&uacute;c L&acirc;m H&agrave;m Rồng.
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/4138/nui-ham-rong.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/3137/ban-lao-chai-ta-van.html">
                                        <img src="frontend/files/images/news/kham-pha-ban-lao-chai-ta-van-khi-di-du-lich-sapa-3.jpg" alt="ban-lao-chai-ta-van">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/3137/ban-lao-chai-ta-van.html">
                                            Bản Lao Chải &amp; Tả Van
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        Nhờ vẻ đẹp h&ugrave;ng vĩ của ruộng bậc thang, n&uacute;i non cũng như th&aacute;c nước, Lao Chải v&agrave; Tả Van đ&atilde; trở th&agrave;nh địa điểm l&yacute; tưởng cho c&aacute;c hoạt động ngo&agrave;i trời.
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/3137/ban-lao-chai-ta-van.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/3101/ban-cat-cat.html">
                                        <img src="frontend/files/images/news/cac-diem-du-lich-sapa.jpg" alt="ban-cat-cat">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/3101/ban-cat-cat.html">
                                            Bản C&#225;t C&#225;t
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        Thi&ecirc;n đường m&acirc;y Sapa - niềm tự h&agrave;o của v&ugrave;ng n&uacute;i T&acirc;y Bắc đ&atilde; kh&ocirc;ng c&ograve;n xa lạ với du kh&aacute;ch trong v&agrave; ngo&agrave;i nước.&nbsp;
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/3101/ban-cat-cat.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--End main_news-->
    
</section>

@endsection


@section('js')


@endsection