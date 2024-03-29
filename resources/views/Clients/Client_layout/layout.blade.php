<!DOCTYPE HTML>
<html>
<head>
    <title>Free Adidas Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href={{asset('assets/Client/css/style.css')}} rel="stylesheet" type="text/css" media="all" />
    <link href={{asset('assets/Client/css/form.css')}} rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src={{asset('assets/Client/js/jquery.min.js')}}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.6.0/jquery.marquee.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function () {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function () {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function (e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function () {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
    <!-- start menu -->
    <link href="{{asset('assets/Client/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{asset('assets/Client/js/megamenu.js')}}"></script>
    <script>$(document).ready(function () { $(".megamenu").megamenu(); });</script>
    <!-- end menu -->
    <script type="text/javascript" src="{{asset('assets/Client/js/jquery.jscrollpane.min.js')}}"></script>
    <script type="text/javascript" id="sourcecode">
        $(function () {
            $('.scroll-pane').jScrollPane();
        });
    </script>
    <!----details-product-slider--->
    <!-- Include the Etalage files -->
    <link rel="stylesheet" href="{{asset('assets/Client/css/etalage.css')}}">
    <script src="{{asset('assets/Client/js/jquery.etalage.min.js')}}"></script>
    <!-- Include the Etalage files -->
    <script>
        jQuery(document).ready(function ($) {

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,

                show_hint: true,
                click_callback: function (image_anchor, instance_id) {
                    alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });
            // This is for the dropdown list example:
            $('.dropdownlist').change(function () {
                etalage_show($(this).find('option:selected').attr('class'));
            });

        });
    </script>
    <!----//details-product-slider--->
    <!-- top scrolling -->
    <script type="text/javascript" src="{{asset('assets/Client/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Client/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1200);
            });
        });
    </script>
</head>
<body>
    <div class="header-top mb-3 p-2">
        <div class="wrap d-flex justify-content-between" style="height: 45px">
            <div class="logo m-0">
                <a href="" style="color: rebeccapurple; font-size: 31px; text-decoration: none; padding: 3px; border: 3px solid linen; box-shadow: 5px 10px orange;"><span class="text-danger">N</span>ew <span class="text-danger">S</span>tore</a>
            </div>

           {{-- @using (Html.BeginForm("Search", "Home",FormMethod.Get, new { @class = "d-inline-flex" })) --}}
            
                <input type="search" id="form1" class="form-control" name="TenSP" style="width:56%" />
                <button type="submit" class="btn btn-primary">Search</button>
            

            <div class="cssmenu">
                <ul>
                    <li class="active">{{-- @Html.ActionLink("Sign up & Save", "Register", "Account") --}}</li>
                    <li><a href="https://goo.gl/maps/yA6r1vp8LVpPF2Va8">Store Locator</a></li>
                    <li{{-- >@Html.ActionLink("My Account", "Login", "Account") --}}</li>
                    <li><a href=>Giỏ Hàng</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="header-bottom" style="background: orange">
        <div class="wrap">
           {{--  //@{Html.RenderAction("MenuPartial","Home");} --}}
        </div>
    </div>
    <!--Content-->
    <div class="main">
        <div class="wrap">
            @yield('content')
        </div>
    </div>
    <!--End Content-->
    <div class="footer">
        <div class="footer-top">
            <div class="wrap">
                <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><img src="images/f_icon.png" alt="" /><span class="delivery">Free delivery on all orders over £100*</span></li>
                    </ul>
                </div>
                <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><img src="images/f_icon1.png" alt="" /><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
                    </ul>
                </div>
                <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><img src="images/f_icon2.png" alt="" /><span class="delivery">Fast delivery & free returns</span></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="wrap">
                <div class="section group">
                    <div class="col_1_of_middle span_1_of_middle">
                        <dl id="sample" class="dropdown">
                            <dt><a href="#"><span>Please Select a Country</span></a></dt>
                            <dd>
                                <ul>
                                    <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
                                    <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
                                    <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
                                    <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
                                    <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
                                    <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div class="col_1_of_middle span_1_of_middle">
                        <ul class="f_list1">
                            <li>
                                <span class="m_8">Sign up for email and Get 15% off</span>
                                <div class="search">
                                    <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                                    <input type="submit" value="Subscribe" id="submit" name="submit">
                                    <div id="response"> </div>
                                </div><div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="wrap">
                <div class="section group">

                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">Thông tin liên hệ</h3>
                        <ul class="list1">
                            <li><a href="shop.html">Giới thiệu công ty</a></li>
                            <li><a href="shop.html">Hệ thống cửa hàng</a></li>
                            <li><a href="shop.html">Chính sách bảo mật</a></li>
                            <li><a href="shop.html">Mail: epu@gmail.com</a></li>

                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">Thông tin khác</h3>
                        <ul class="list1">
                            <li><a href="shop.html">Quy chế hoạt động</a></li>
                            <li><a href="shop.html">Chính sách Bảo hành</a></li>
                            <li><a href="shop.html">Liên hệ hợp tác kinh doanh</a></li>
                            <li><a href="shop.html">KHách hàng doanh nghiệp</a></li>
                            <li><a href="shop.html">Ưu đãi từ đối tác</a></li>
                            <li><a href="shop.html">Tuyển dụng</a></li>
                            <li><a href="shop.html">Trade-in thu cũ lên đời</a></li>

                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">Hỗ trợ khách hàng</h3>
                        <ul class="list1">
                            <li><a href="shop.html">Mua hàng và thanh toán online</a></li>
                            <li><a href="shop.html">Mua hàng trả góp online</a></li>
                            <li><a href="shop.html">Tra thông đơn hàng</a></li>
                            <li><a href="shop.html">Tra thông tin bảo hành</a></li>
                            <li><a href="shop.html">Trung tâm bảo hành chính hãng</a></li>
                            <li><a href="shop.html">Quy định về việc sao lưu dữ liệu</a></li>
                            <li><a href="shop.html">Dịch vụ bảo hành điện thoại</a></li>

                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">Gọi tư vấn và khiếu nại</h3>
                        <ul class="list1">
                            <li><a href="shop.html">Gọi mua hàng: 0855100001</a></li>
                            <li><a href="shop.html">Hỗ trợ kĩ thuật</a></li>
                            <li><a href="shop.html">Hợp tác kinh doanh</a></li>


                        </ul>

                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <h3 class="m_9">Các sản phẩm</h3>
                        <ul class="list1">
                            <li><a href="shop.html">Điện thoại</a></li>
                            <li><a href="shop.html">Laptop</a></li>
                            <li><a href="shop.html">Tablet</a></li>


                        </ul>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="wrap">
                <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };


            $().UItoTop({ easingType: 'easeOutQuart' });
            $('.promotion').marquee()

        });
    </script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
   {{--  //@RenderSection("Jquery", required: false) --}}
    <script type="text/javascript">

        
    </script>
</body>
</html>