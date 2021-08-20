@extends("welcome")
@section("content")
        <div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(/template/upload/driver-2.jpg);">

            <div class="page_title_wrapper">
                <div class="page_title_inner">
                    <div class="page_title_content">
                        <h1 class="withtopbar">Car 3 Columns Classic</h1>
                        <div class="page_tagline">
                            This is sample of page tagline and you can set it up using page option </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Begin content -->
        <div id="page_content_wrapper" class="hasbg withtopbar ">
            <form id="car_search_form" name="car_search_form" method="get" action="http://themes.themegoods.com/grandcarrental/demo/car-3-columns-classic/">
                <div class="car_search_wrapper">
                    <div class="one_fourth themeborder">
                        <select id="brand" name="brand">
                            <option value="">Any Brand</option>
                            <option value="Audi">Audi</option>
                            <option value="BMW">BMW</option>
                            <option value="Lexus">Lexus</option>
                            <option value="Mercedes Benz">Mercedes Benz</option>
                            <option value="MINI">MINI</option>
                            <option value="Porsche">Porsche</option>
                        </select>
                        <span class="ti-angle-down"></span>
                    </div>
                    <div class="one_fourth themeborder">
                        <select id="type" name="type">
                            <option value="">Any Type</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Sedan">Sedan</option>
                            <option value="SUV">SUV</option>
                        </select>
                        <span class="ti-angle-down"></span>
                    </div>
                    <div class="one_fourth themeborder">
                        <select id="sort_by" name="sort_by">
                            <option value="price_low">Price Low to High</option>
                            <option value="price_high">Price High to Low</option>
                            <option value="model">Sort By Model</option>
                            <option value="popular">Sort By Popularity</option>
                            <option value="review">Sort By Review Score</option>
                        </select>
                        <span class="ti-exchange-vertical"></span>
                    </div>
                    <div class="one_fourth last themeborder">
                        <input id="car_search_btn" type="submit" class="button" value="Search" />
                    </div>
                </div>
            </form>

            <!-- Begin content -->

            <div class="inner">

                <div class="inner_wrapper nopadding">

                    <div id="page_main_content" class="sidebar_content full_width fixed_column">

                        <div class="standard_wrapper">

                            <div id="portfolio_filter_wrapper" class="gallery classic three_cols portfolio-content section content clearfix" data-columns="3">
                                <table border="1">
                                    <tr>
                                        <th>Nama Mobil</th>
                                        <th>Merek</th>
                                        <th>Bahan Bakar</th>
                                        <th>Kursi Penumpang</th>
                                        <th>Harga Sewa</th>
                                        <th>Foto</th>
                                    </tr>
                                    @foreach($mobil as $p)
                                    <tr>
                                        <td>{{ $p->nama_mobil }}</td>
                                        <td>{{ $p->merek }}</td>
                                        <td>{{ $p->bahan_bakar }}</td>
                                        <td>{{ $p->harga_sewa }}</td>
                                        <td>{{ $p->foto }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                             
                                <br/>
                                Halaman : {{ $mobil->currentPage() }} <br/>
                                Jumlah Data : {{ $mobil->total() }} <br/>
                                Data Per Halaman : {{ $mobil->perPage() }} <br/>
                             
                             
                                {{ $mobil->links() }}
                            </div>
                            <br class="clear" />
                            <div class="pagination"><span class="current">1</span><a href='#' class="inactive">2</a></div>
                            <div class="pagination_detail">
                                Page 1 of 2 </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div id="footer" class=" ppb_wrapper">

            <ul class="sidebar_widget three">
                <li id="text-2" class="widget widget_text">
                    <h2 class="widgettitle">About Us</h2>
                    <div class="textwidget">
                        <p>Getting dressed up and traveling with good friends makes for a shared, unforgettable experience. </p>
                        <p><img src="template/images/logo@2x_white.png" alt="" width="175" height="24"></p>
                    </div>
                </li>
                <li id="text-3" class="widget widget_text">
                    <h2 class="widgettitle">Contact Info</h2>
                    <div class="textwidget">
                        <p><span class="ti-mobile" style="margin-right:10px;"></span>1-567-124-44227</p>
                        <p><span class="ti-location-pin" style="margin-right:10px;"></span>184 Main Street East Perl Habour 8007</p>
                        <p><span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat 8.00 - 18.00 Sunday CLOSED</p>
                        <div style="margin-top:20px;">
                            <div class="social_wrapper shortcode dark ">
                                <ul>
                                    <li class="facebook"><a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" title="Twitter" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li class="pinterest"><a target="_blank" title="Pinterest" href="https://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="instagram"><a target="_blank" title="Instagram" href="https://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="mc4wp_form_widget-5" class="widget widget_mc4wp_form_widget">
                    <h2 class="widgettitle">Newsletter</h2>

                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-27" method="post" data-id="27" data-name="Newsletter">
                        <div class="mc4wp-form-fields">Don't miss a thing! Sign up to receive daily deals

                            <input type="email" name="EMAIL" placeholder="Your Email Address" required />
                            <br/>
                            <input type="submit" value="Subscribe" />
                        </div>
                        <label style="display: none !important;">Leave this field empty if you're human:
                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                        </label>

                        <div class="mc4wp-response"></div>
                    </form>
                </li>
            </ul>
        </div>

        <div class="footer_bar  ppb_wrapper ">

            <div class="footer_bar_wrapper ">
                <div class="menu-footer-menu-container">
                    <ul id="footer_menu" class="footer_nav">
                        <li class="menu-item"><a href="about-us.html">About Us</a></li>
                        <li class="menu-item"><a href="home-4-limousine-service.html">Limousine</a></li>
                        <li class="menu-item"><a href="our-services.html">Services</a></li>
                        <li class="menu-item"><a href="faqs.html">FAQs</a></li>
                        <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <div id="copyright">© Copyright Grand Car Rental HTML Template - Template by Max Themes</div>
                <br class="clear" />
            </div>
        </div>
    </div>

    <div id="side_menu_wrapper" class="overlay_background">
        <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>
    </div>

    @endsection