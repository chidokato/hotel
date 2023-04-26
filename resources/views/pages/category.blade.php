@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('content')

<section class="main">
    <div class="main_space"></div>
    <div class="container row_container">
        <div class="room_row">
            <form action="Booking/SendBooking" id="check-room" method="post" class="row" novalidate="novalidate">
                <div class="col-12 col-md-8 col-lg-8">
                    @foreach($post as $val)

                    <div class="row_item" style="padding:10px">
                        <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-sx-12">
                                    <div class="row_item-img">
                                        <img src="frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony.jpg" alt="No picture">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-sx-12 border-right" style="">
                                    <div class="booking_content" style="padding:0">
                                        <h3 class="booking_title">
                                            <a href="{{$data->category->slug}}/{{$val->post->slug}}">
                                                {{$val->name}}
                                            </a>
                                        </h3>
                                        <div class="user">
                                            <div class="user_item">
                                                <span>
                                                    <i class="fa fa-th-large"></i>
                                                </span>
                                                <span>3 Capacity</span>
                                            </div>
                                            <div class="user_item">
                                                <span>
                                                    <i class="fas fa-user"></i>
                                                </span>
                                                <span>1 Children</span>
                                            </div>
                                        </div>
                                        <div class="booking_text">
                                            <div style="text-align:justify">Phòng Triple có ban công với thiết kế hiện đại, được trang bị nội thất tiện nghi. Các chi tiết trong phòng được
                                            </div>

                                        </div>
                                        
                                        <div class="booking_icon">
                                            <a href="#" title="wifi">
                                                <i class="fa fa-wifi"></i>
                                            </a>
                                            <a href="#" title="television">
                                                <i class="fas fa-tv"></i>
                                            </a>
                                            <a href="#" title="Local NewsPaper">
                                                <i class="fas fa-newspaper"></i>
                                            </a>
                                            <a href="#" title="bathtub">
                                                <i class="fa fa-bath"></i>
                                            </a>
                                            <a href="#" title="Room Breakfast">
                                                <i class="fas fa-utensils"></i>
                                            </a>
                                            <a href="#" title="Spa">
                                                <i class="fa fa-bed"></i>
                                            </a>
                                            <a href="#" title="Wake Up Call">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                            <a href="#" title="Mini Bar">
                                                <i class="fa fa-beer"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 col-md-12 col-sm-12 col-sx-12" style="display: flex;align-items: center;justify-content: center;">
                                    <div class="main_booking-price">
                                        <div class="booking_price-label">Price</div>
                                        <div class="booking_price">1,500,000</div>
                                        <div class="booking_select">
                                            <a href="javascript:;" class="button_booking" id="btn-select-12" onclick="SelectRoom(12)" style="color:#000;font-size:15px;text-decoration:underline">Select Room</a>
                                        </div>
                                    </div>
                                </div>
                           



                            
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-12 col-md-4 col-lg-4">

            <div class="reservation_hotel">
                <div class="reservation_title">
                    <h5 class="reservation_title-name">
                        Tại sao chọn MINH PHÁT
                    </h5>
                </div>
                <div class="hotel_content">
                    <ul>
                        <li>
                            <i class="fa fa-gavel"></i> Transparency – No hidden fees
                        </li>
                        <li>
                            <i class="fa fa-plane"></i> Complementary Airport pickup
                        </li>
                        <li>
                            <i class="fas fa-dollar-sign"></i> Value for money
                        </li>
                        <li>
                            <i class="fa fa-bed"></i> Luxurious rooms for your comfort
                        </li>
                        <li>
                            <i class="fa fa-user-secret"></i> Easy refund on online booking
                        </li>
                        <li>
                            <i class="fab fa-tripadvisor"></i> Award-winning hotel on TripAdviosr
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </form></div>
    </div>


</section>

@endsection
@section('script')

@endsection