@extends('layout')

@section('content')
<div class="wrapper">
    <div class="container">
            <div id="pic1" class="pic">
                <img src="{{asset('./pic-1.png')}}" alt="" class="pageThanks"/>
                <div class="content_card custom thanks">
                    <div class="heading_line">
                        <h4 class="fw-800" style="font-family: 'Playfair Display', seri; font-size: 66px">XIN CẢM ƠN</h4>
                        <div class="heading_name" style="font-family: 'Playfair Display', seri; font-size: 22px; color: #535750">
                            <p style="margin:0;">Thông tin đã được ghi nhận.
                                Hẹn gặp lại {{$vocative}} tại đám cưới chúng tôi
                            </p>
                        </div>
                        <div style="font-family: 'Playfair Display', seri; font-size: 40px;">
                            Trường & Hà
                        </div>
                    </div>
                    <div class="image-gallery">
                    <div class="row">

                        <div class="column">
{{--                        <img src="./z5340130168749_e22de87ede43d45f8a4732315dafea55.jpg">--}}
                        <img src="{{asset('z5340130168749_e22de87ede43d45f8a4732315dafea55.jpg')}}">
                        </div>
                        <div class="column">
                            <img src="{{asset('z5340130168747_ec29390f68a5118bbaca729a8f0b46e4.jpg')}}">
                        </div>
                        <div class="column">
                        <img src="{{asset('z5340130168908_b815640f4549eaeea897a4311a198aa2.jpg')}}">
                        </div>
                        <div class="column">
                        <img src="{{asset('z5340130168748_cff4ff9cb0a9f17d53dcc653a1aab0e2.jpg')}}">
                        </div>
                        </div>
                    </div>
                    <!-- <div style="font-family: 'Playfair Display', seri; font-size: 40px;">
                        Trân trọng!
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
