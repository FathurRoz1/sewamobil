@extends("welcome")
@section("content")

    <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign" />
    <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0" />
    <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0" />
    <input type="hidden" id="pp_image_path" name="pp_image_path" value="http://themes.themegoods.com/grandcarrental/demo/wp-content/themes/grandcarrental/images/" />
    <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index.html" />
    <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1" />
    <input type="hidden" id="tg_smart_fixed_menu" name="tg_smart_fixed_menu" value="0" />
    <input type="hidden" id="tg_sidebar_sticky" name="tg_sidebar_sticky" value="1" />
    <input type="hidden" id="pp_topbar" name="pp_topbar" value="1" />
    <input type="hidden" id="post_client_column" name="post_client_column" value="4" />
    <input type="hidden" id="pp_back" name="pp_back" value="Back" />
    <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="" />
    <input type="hidden" id="tg_portfolio_filterable_link" name="tg_portfolio_filterable_link" value="" />
    <input type="hidden" id="tg_flow_enable_reflection" name="tg_flow_enable_reflection" value="" />
    <input type="hidden" id="tg_lightbox_skin" name="tg_lightbox_skin" value="metro-black" />
    <input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="horizontal" />
    <input type="hidden" id="tg_lightbox_thumbnails_display" name="tg_lightbox_thumbnails_display" value="1" />
    <input type="hidden" id="tg_lightbox_opacity" name="tg_lightbox_opacity" value="0.8" />
    <input type="hidden" id="tg_cart_url" name="tg_cart_url" value="http://themes.themegoods.com/grandcarrental/demo/cart/" />
    <input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0" />
    <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3" />

    <!-- Begin mobile menu -->
    <a id="close_mobile_menu" href="javascript:;"></a>

    <div class="mobile_menu_wrapper">
        <a id="mobile_menu_close" href="javascript:;" class="button"><span class="ti-close"></span></a>

        <div class="mobile_menu_content">

            <div class="menu-main-menu-container">
                <ul id="mobile_main_menu" class="mobile_main_nav">
                    <li class="menu-item current-menu-item menu-item-has-children"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="index.html">Home 1 – Background Image</a></li>
                            <li class="menu-item"><a href="home-2-youtube-video.html">Home 2 – Youtube Video</a></li>
                            <li class="menu-item"><a href="home-3-google-inspired.html">Home 3 – Google Inspired</a></li>
                            <li class="menu-item"><a href="home-4-limousine-service.html">Home 4 – Limousine Service</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Cars</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children"><a href="car-list-right-sidebar.html">Car List Sidebar</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="car-list-right-sidebar.html">Right Sidebar</a></li>
                                    <li class="menu-item"><a href="car-list-left-sidebar.html">Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="car-list-thumbnail-right-sidebar.html">Car List Thumbnail Sidebar</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="car-list-thumbnail-right-sidebar.html">Right Sidebar</a></li>
                                    <li class="menu-item"><a href="car-list-thumbnail-left-sidebar.html">Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="car-2-columns-classic.html">Car Classic Fullwidth</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="car-2-columns-classic.html">2 Columns</a></li>
                                    <li class="menu-item"><a href="car-3-columns-classic.html">3 Columns</a></li>
                                    <li class="menu-item"><a href="car-4-columns-classic.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="car-2-columns-classic-right-sidebar.html">Car Classic Right Sidebar</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="car-2-columns-classic-right-sidebar.html">Right Sidebar</a></li>
                                    <li class="menu-item"><a href="car-2-columns-classic-left-sidebar.html">Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="car-2-columns-grid.html">Car Grid Fullwidth</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="car-2-columns-grid.html">2 Columns</a></li>
                                    <li class="menu-item"><a href="car-3-columns-grid.html">3 Columns</a></li>
                                    <li class="menu-item"><a href="car-4-columns-grid.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="car-grid-right-sidebar.html">Car Grid Sidebar</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="car-grid-right-sidebar.html">Right Sidebar</a></li>
                                    <li class="menu-item"><a href="car-grid-left-sidebar.html">Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="car-by-brand-type-fullwidth.html">Car By Brand &#038; Type Fullwidth</a></li>
                            <li class="menu-item menu-item-has-children"><a href="#">Car By Brands</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="audi.html">Audi</a></li>
                                    <li class="menu-item"><a href="bmw.html">BMW</a></li>
                                    <li class="menu-item"><a href="lexus.html">Lexus</a></li>
                                    <li class="menu-item"><a href="mercedes-benz.html">Mercedes Benz</a></li>
                                    <li class="menu-item"><a href="porsche.html">Porsche</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="#">Car By Types</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="coupe.html">Coupe</a></li>
                                    <li class="menu-item"><a href="sedan.html">Sedan</a></li>
                                    <li class="menu-item"><a href="suv.html">SUV</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Booking</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="audi-a4.html">Car Rental</a></li>
                            <li class="menu-item"><a href="porsche-boxster.html">Car Rental Compact Form</a></li>
                            <li class="menu-item"><a href="mercedes-benz-gle.html">Limousine One Way Transfer</a></li>
                            <li class="menu-item"><a href="porsche-cayenne.html">Limousine Hourly Service</a></li>
                            <li class="menu-item"><a href="lexus-rx-350.html">Request for Booking Only</a></li>
                            <li class="menu-item"><a href="bmw-3-series.html">Standard Background Header</a></li>
                            <li class="menu-item"><a href="mercedes-benz-cls-class.html">Video Background Header</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="about-us.html">About Us</a></li>
                            <li class="menu-item"><a href="our-services.html">Services</a></li>
                            <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
                            <li class="menu-item"><a href="faqs.html">FAQs</a></li>
                            <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                            <li class="menu-item"><a href="page-fullwidth.html">Page Fullwidth</a></li>
                            <li class="menu-item"><a href="page-video-header.html">Page + Video Header</a></li>
                            <li class="menu-item"><a href="page-right-sidebar.html">Page Right Sidebar</a></li>
                            <li class="menu-item"><a href="page-left-sidebar.html">Page Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li class="menu-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li class="menu-item"><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
                            <li class="menu-item"><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                            <li class="menu-item"><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                            <li class="menu-item"><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>

                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="shortcodes.html">Shortcodes</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="accordion-toggles.html">Accordion &#038; Toggles</a></li>
                            <li class="menu-item"><a href="alert-boxes.html">Alert Boxes</a></li>
                            <li class="menu-item"><a href="animated-content.html">Animated Content</a></li>
                            <li class="menu-item"><a href="buttons-social-icons.html">Buttons &#038; Social Icons</a></li>
                            <li class="menu-item"><a href="columns.html">Columns</a></li>

                            <li class="menu-item"><a href="image-frame-animation.html">Image Frame &#038; Animation</a></li>
                            <li class="menu-item"><a href="image-teasers.html">Image Teasers</a></li>
                            <li class="menu-item"><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li class="menu-item"><a href="tabs.html">Tabs</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Begin side menu sidebar -->
            <div class="page_content_wrapper">
                <div class="sidebar_wrapper">
                    <div class="sidebar">

                        <div class="content">

                            <ul class="sidebar_widget">
                                <li id="text-8" class="widget widget_text">
                                    <h2 class="widgettitle">For More Informations</h2>
                                    <div class="textwidget"><span class="ti-mobile" style="margin-right:10px;"></span>1-567-124-44227
                                        <br/>
                                        <span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat 8.00 - 18.00</div>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End side menu sidebar -->

            <div class="social_wrapper">
                <ul>
                    <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook-official"></i></a></li>
                    <li class="twitter"><a target="_blank" href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                    <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                    <li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                    <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End mobile menu -->
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg transparent">

        <div class="header_style_wrapper">

            <!-- Begin top bar -->
            <div class="above_top_bar">
                <div class="page_content_wrapper">

                    <div class="social_wrapper">
                        <ul>
                            <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook-official"></i></a></li>
                            <li class="twitter"><a target="_blank" href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                            <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="top_contact_info">
                        <div class="company_address">
                            <div id="top_contact_address"><span class="ti-location-pin"></span>184 Main Street East 8007</div>
                        </div>
                        <div>
                            <div id="top_contact_number"><a href="tel:1.800.456.6743"><span class="ti-mobile"></span>1.800.456.6743</a></div>
                        </div>
                        <div>
                            <div id="top_contact_hours"><span class="ti-alarm-clock"></span>Mon-Fri 09.00 - 17.00</div>
                        </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
            <!-- End top bar -->
            <div class="top_bar hasbg">
                <div class="standard_wrapper">
                    <!-- Begin logo -->
                    <div id="logo_wrapper">

                        <div id="logo_normal" class="logo_container">
                            <div class="logo_align">
                                <a id="custom_logo" class="logo_wrapper hidden" href="index.html">
                                    <img src="images/logo@2x_white.png" alt="" width="175" height="24" />
                                </a>
                            </div>
                        </div>

                        <div id="logo_transparent" class="logo_container">
                            <div class="logo_align">
                                <a id="custom_logo_transparent" class="logo_wrapper default" href="index.html">
                                    <img src="images/logo@2x_white.png" alt="" width="175" height="24" />
                                </a>
                            </div>
                        </div>
                        <!-- End logo -->

                        <div id="menu_wrapper">
                            <div id="nav_wrapper">
                                <div class="nav_wrapper_inner">
                                    <div id="menu_border_wrapper">
                                        <div class="menu-main-menu-container">
                                            <ul id="main_menu" class="nav">
                                                <li class="menu-item menu-item-has-children arrow"><a href="index.html">Home</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="index.html">Home 1 – Background Image</a></li>
                                                        <li class="menu-item"><a href="home-2-youtube-video.html">Home 2 – Youtube Video</a></li>
                                                        <li class="menu-item"><a href="home-3-google-inspired.html">Home 3 – Google Inspired</a></li>
                                                        <li class="menu-item"><a href="home-4-limousine-service.html">Home 4 – Limousine Service</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">Cars</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-has-children arrow"><a href="car-list-right-sidebar.html">Car List Sidebar</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="car-list-right-sidebar.html">Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="car-list-left-sidebar.html">Left Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="car-list-thumbnail-right-sidebar.html">Car List Thumbnail Sidebar</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="car-list-thumbnail-right-sidebar.html">Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="car-list-thumbnail-left-sidebar.html">Left Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="car-2-columns-classic.html">Car Classic Fullwidth</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="car-2-columns-classic.html">2 Columns</a></li>
                                                                <li class="menu-item"><a href="car-3-columns-classic.html">3 Columns</a></li>
                                                                <li class="menu-item"><a href="car-4-columns-classic.html">4 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="car-2-columns-classic-right-sidebar.html">Car Classic Right Sidebar</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="car-2-columns-classic-right-sidebar.html">Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="car-2-columns-classic-left-sidebar.html">Left Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="car-2-columns-grid.html">Car Grid Fullwidth</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="car-2-columns-grid.html">2 Columns</a></li>
                                                                <li class="menu-item"><a href="car-3-columns-grid.html">3 Columns</a></li>
                                                                <li class="menu-item"><a href="car-4-columns-grid.html">4 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="car-grid-right-sidebar.html">Car Grid Sidebar</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="car-grid-right-sidebar.html">Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="car-grid-left-sidebar.html">Left Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item"><a href="car-by-brand-type-fullwidth.html">Car By Brand &#038; Type Fullwidth</a></li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="#">Car By Brands</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="audi.html">Audi</a></li>
                                                                <li class="menu-item"><a href="bmw.html">BMW</a></li>
                                                                <li class="menu-item"><a href="lexus.html">Lexus</a></li>
                                                                <li class="menu-item"><a href="mercedes-benz.html">Mercedes Benz</a></li>
                                                                <li class="menu-item"><a href="porsche.html">Porsche</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="#">Car By Types</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="coupe.html">Coupe</a></li>
                                                                <li class="menu-item"><a href="sedan.html">Sedan</a></li>
                                                                <li class="menu-item"><a href="suv.html">SUV</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item current-menu-item menu-item-has-children arrow"><a href="#">Booking</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="audi-a4.html">Car Rental</a></li>
                                                        <li class="menu-item"><a href="porsche-boxster.html">Car Rental Compact Form</a></li>
                                                        <li class="menu-item"><a href="mercedes-benz-gle.html">Limousine One Way Transfer</a></li>
                                                        <li class="menu-item"><a href="porsche-cayenne.html">Limousine Hourly Service</a></li>
                                                        <li class="menu-item"><a href="lexus-rx-350.html">Request for Booking Only</a></li>
                                                        <li class="menu-item"><a href="bmw-3-series.html">Standard Background Header</a></li>
                                                        <li class="menu-item"><a href="mercedes-benz-cls-class.html">Video Background Header</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                                        <li class="menu-item"><a href="our-services.html">Services</a></li>
                                                        <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
                                                        <li class="menu-item"><a href="faqs.html">FAQs</a></li>
                                                        <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                                        <li class="menu-item"><a href="page-fullwidth.html">Page Fullwidth</a></li>
                                                        <li class="menu-item"><a href="page-video-header.html">Page + Video Header</a></li>
                                                        <li class="menu-item"><a href="page-right-sidebar.html">Page Right Sidebar</a></li>
                                                        <li class="menu-item"><a href="page-left-sidebar.html">Page Left Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
                                                        <li class="menu-item"><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>

                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="shortcodes.html">Shortcodes</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="accordion-toggles.html">Accordion &#038; Toggles</a></li>
                                                        <li class="menu-item"><a href="alert-boxes.html">Alert Boxes</a></li>
                                                        <li class="menu-item"><a href="animated-content.html">Animated Content</a></li>
                                                        <li class="menu-item"><a href="buttons-social-icons.html">Buttons &#038; Social Icons</a></li>
                                                        <li class="menu-item"><a href="columns.html">Columns</a></li>
                            
                                                        <li class="menu-item"><a href="image-frame-animation.html">Image Frame &#038; Animation</a></li>
                                                        <li class="menu-item"><a href="image-teasers.html">Image Teasers</a></li>
                                                        <li class="menu-item"><a href="pricing-tables.html">Pricing Tables</a></li>
                                                        <li class="menu-item"><a href="tabs.html">Tabs</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin right corner buttons -->
                                <div id="logo_right_button">

                                    <!-- Begin side menu -->
                                    <a href="javascript:;" id="mobile_nav_icon"><span class="ti-menu"></span></a>
                                    <!-- End side menu -->



                                </div>
                                <!-- End right corner buttons -->
                            </div>
                            <!-- End main nav -->
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div id="page_caption" class="hasbg  withtopbar " style="background-image:url(upload/Audi-A4-Avant-1.jpg);">

            <div class="single_car_header_button">
                <div class="standard_wrapper">
                    <a href="upload/nw6xremkxkg-nicolai-berntsen.jpg" id="single_car_gallery_open" class="button fancy-gallery"><span class="ti-camera"></span>View Photos</a>
                    <div style="display:none;">
                        <a id="single_car_gallery_image1" href="upload/traffic-car-vehicle-black.jpg" title="" class="fancy-gallery"></a>
                        <a id="single_car_gallery_image2" href="upload/evening.jpg" title="" class="fancy-gallery"></a>
                        <a id="single_car_gallery_image3" href="upload/IMG_3496bfree.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                        <a id="single_car_gallery_image4" href="upload/road-people-street-smartphone.jpg" title="" class="fancy-gallery"></a>
                    </div>

                    <a href="#video_review112" id="single_car_video_review_open" class="button" data-type="inline"><span class="ti-control-play"></span>Video Review</a>

                    <div id="video_review112" class="car_video_review_wrapper" style="display:none;">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/rV7FQaAf4nc" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="single_car_header_content">
                <div class="standard_wrapper">
                    <div class="single_car_header_price">
                        <span id="single_car_price"><span class="single_car_currency">$</span><span class="single_car_price">84</span></span>
                        <span id="single_car_price_per_unit_change" class="single_car_price_per_unit">
                    <span id="single_car_unit">Per Day</span>
                        <span class="ti-angle-down"></span>

                        <ul id="price_per_unit_select">
                            <li class="icon arrow"></li>
                            <li class="active">
                                <a class="active" href="javascript:;" data-filter="car_price_day" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;84&lt;/span&gt;">Per Day</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_hour" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;10&lt;/span&gt;">Per Hour</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_airport" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;99&lt;/span&gt;">Airport Transfer</a>
                            </li>
                        </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin content -->
        <div id="page_content_wrapper" class="hasbg withtopbar ">
            <div class="inner">

                <!-- Begin main content -->
                <div class="inner_wrapper">

                    <div class="sidebar_content">

                        <h1>Audi A4</h1>
                        <div class="car_attribute_wrapper">
                            <div class="car_attribute_rating">
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="car_attribute_rating_count">
                                    4&nbsp; reviews </div>
                            </div>
                        </div>
                        <div class="single_car_attribute_wrapper themeborder">
                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-user"></div>
                                <div class="car_attribute_content">
                                    5&nbsp;Passengers </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-briefcase"></div>
                                <div class="car_attribute_content">
                                    2&nbsp;Luggages </div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-panel"></div>
                                <div class="car_attribute_content">
                                    Auto </div>
                            </div>

                            <div class="one_fourth last">
                                <div class="car_attribute_icon ti-car"></div>
                                <div class="car_attribute_content">
                                    4&nbsp; Doors </div>
                            </div>
                        </div>
                        <br class="clear" />
                        <div class="single_car_content">
                            <h4 class="p1">Refueling</h4>
                            <p class="p2">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse.</p>
                            <h4 class="p1">Car Wash</h4>
                            <p class="p2">Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth</p>
                            <h4 class="p1">No Smoking</h4>
                            <p class="p2">See-through delicate embroidered organza blue lining luxury acetate-mix stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning silhouette working peplum. Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                        </div>

                        <ul class="single_car_departure_wrapper themeborder">
                            <li>
                                <div class="single_car_departure_title">Included</div>
                                <div class="single_car_departure_content">
                                    <div class="one_half ">
                                        <span class="ti-check"></span>Audio input </div>
                                    <div class="one_half last">
                                        <span class="ti-check"></span>All Wheel drive </div>
                                    <div class="one_half ">
                                        <span class="ti-check"></span>Bluetooth </div>
                                    <div class="one_half last">
                                        <span class="ti-check"></span>USB input </div>
                                    <div class="one_half ">
                                        <span class="ti-check"></span>Heated seats </div>
                                    <div class="one_half last">
                                        <span class="ti-check"></span>FM Radio </div>
                                </div>
                            </li>

                            <li>
                                <div class="single_car_departure_title">Not Included</div>
                                <div class="single_car_departure_content">
                                    <div class="one_half ">
                                        <span class="ti-close"></span>GPS Navigation </div>
                                    <div class="one_half last">
                                        <span class="ti-close"></span>Sunroof </div>
                                </div>
                            </li>
                        </ul>

                        <div class="fullwidth_comment_wrapper sidebar">

                            <h3 class="comment_title">4 Reviews</span></h3>
                            <div class="avg_comment_rating_wrapper themeborder">
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Driving</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Interior Layout</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Space &amp; Practicality</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Overall</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a name="comments"></a>

                                <div class="comment" id="comment-20">
                                    <div class="gravatar">
                                        <img src="upload/author1-100x100.jpg" width="60" height="60" alt="Jack Dawson" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                                    <div class="right ">

                                        <h7>Jack Dawson</h7>

                                        <div class="comment_date">January 17, 2017 at 1:56 pm</div>
                                        <a rel='nofollow' class='comment-reply-link' href='#' onclick='return addComment.moveForm( "comment-20", "20", "respond", "112" )' aria-label='Reply to Jack Dawson'>Reply</a>
                                        <div class="comment_text" />
                                        <p>Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small batch freegan sed.</p>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Driving</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Interior Layout</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Space &amp; Practicality</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Overall</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <a href="javascript:;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br class="clear" />
                            </li>
                            <!-- #comment-## -->

                            <div class="comment" id="comment-21">
                                <div class="gravatar">
                                    <img src="upload/me-100x100.jpg" width="60" height="60" alt="Anna Kornikova" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                                <div class="right ">

                                    <h7>Anna Kornikova</h7>

                                    <div class="comment_date">January 17, 2017 at 2:01 pm</div>
                                    <a rel='nofollow' class='comment-reply-link' href='#' onclick='return addComment.moveForm( "comment-21", "21", "respond", "112" )' aria-label='Reply to Anna Kornikova'>Reply</a>
                                    <div class="comment_text" />
                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth,</p>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Driving</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Interior Layout</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Space &amp; Practicality</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Overall</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br class="clear" />
                        </li>
                        <!-- #comment-## -->

                        <div class="comment" id="comment-22">
                            <div class="gravatar">
                                <img src="upload/avatar-100x100.png" width="60" height="60" alt="Marie Argeris" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                            <div class="right ">

                                <h7>Marie Argeris</h7>

                                <div class="comment_date">January 17, 2017 at 2:04 pm</div>
                                <a rel='nofollow' class='comment-reply-link' href='#' onclick='return addComment.moveForm( "comment-22", "22", "respond", "112" )' aria-label='Reply to Marie Argeris'>Reply</a>
                                <div class="comment_text" />
                                <p>Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Driving</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Interior Layout</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Space &amp; Practicality</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Overall</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br class="clear" />
                    </li>
                    <!-- #comment-## -->

                    <div class="comment" id="comment-23">
                        <div class="gravatar">
                            <img src="upload/author2-100x100.jpg" width="60" height="60" alt="Jessica Medina" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                        <div class="right ">

                            <h7>Jessica Medina</h7>

                            <div class="comment_date">January 17, 2017 at 2:06 pm</div>
                            <a rel='nofollow' class='comment-reply-link' href='#' onclick='return addComment.moveForm( "comment-23", "23", "respond", "112" )' aria-label='Reply to Jessica Medina'>Reply</a>
                            <div class="comment_text" />
                            <p>Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe off-duty shoe. Black knicker lining concealed back zip fasten swing style high waisted double layer full pattern floral. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Driving</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Interior Layout</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Space &amp; Practicality</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Overall</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br class="clear" />
                </li>
                <!-- #comment-## -->
            </div>

            <!-- End of thread -->
            <div style="height:10px"></div>

            <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">Write A Review <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
                <form action="#" method="post" id="commentform" class="comment-form">
                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                    <p class="comment-form-comment">
                        <label for="comment">Comment</label>
                        <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                    </p>
                    <p class="comment-form-author">
                        <label for="author">Name <span class="required">*</span></label>
                        <input id="author" name="author" type="text" value="" size="30" maxlength="245" required='required' />
                    </p>
                    <p class="comment-form-email">
                        <label for="email">Email <span class="required">*</span></label>
                        <input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required' />
                    </p>
                    <p class="comment-form-url">
                        <label for="url">Website</label>
                        <input id="url" name="url" type="text" value="" size="30" maxlength="200" />
                    </p>
                    <p class="comment-form-rating">
                        <label for="driving_rating">Driving</label>
                        <span class="commentratingbox">
                            <select id="driving_rating" name="driving_rating"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></p><p class="comment-form-rating"><label for="interior_rating">Interior Layout</label>
                            <span class="commentratingbox">
                            <select id="interior_rating" name="interior_rating"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></p><p class="comment-form-rating"><label for="space_rating">Space &amp; Practicality</label>
                            <span class="commentratingbox">
                            <select id="space_rating" name="space_rating"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></p><p class="comment-form-rating"><label for="overall_rating">Overall</label>
                            <span class="commentratingbox">
                            <select id="overall_rating" name="overall_rating"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Review" /> <input type='hidden' name='comment_post_ID' value='112' id='comment_post_ID' />
                            <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                    </p>            
                </form>
                </div><!--  -->

            </div>

        </div>

        <div class="sidebar_wrapper">

            <div class="sidebar_top"></div>

            <div class="sidebar">

                <div class="content">

                    <div class="single_car_header_price">
                        <span id="single_car_price_scroll"><span class="single_car_currency">$</span><span class="single_car_price">84</span></span>
                        <span id="single_car_price_per_unit_change_scroll" class="single_car_price_per_unit">
                            <span id="single_car_unit_scroll">Per Day</span>
                        <span class="ti-angle-down"></span>

                        <ul id="price_per_unit_select_scroll">
                            <li class="icon arrow"></li>
                            <li class="active">
                                <a class="active" href="javascript:;" data-filter="car_price_day" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;84&lt;/span&gt;">Per Day</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_hour" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;10&lt;/span&gt;">Per Hour</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_airport" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;99&lt;/span&gt;">Airport Transfer</a>
                            </li>
                        </ul>
                        </span>
                        <hr/>
            </div>

            <div class="single_car_booking_wrapper themeborder book_instantly">
                <div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="##wpcf7-f5-o1" method="post" class="wpcf7-form" novalidate="novalidate">

                        <p>
                            <label> Full Name
                                <br />
                                <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="John Doe" /></span> </label>
                        </p>
                        <p>
                            <label> Email Address
                                <br />
                                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="sample@yourcompany.com" /></span> </label>
                        </p>
                        <p>
                            <label> Phone Number
                                <br />
                                <span class="wpcf7-form-control-wrap your-tel"><input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="+66-4353434" /></span> </label>
                        </p>
                        <p>
                            <label> Pickup Address
                                <br />
                                <span class="wpcf7-form-control-wrap pickup-address"><input type="text" name="pickup-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="34 Mainfield Road" /></span> </label>
                        </p>
                        <p>
                            <label> Pickup Date
                                <br />
                                <span class="wpcf7-form-control-wrap pickup-date"><input type="date" name="pickup-date" value="mm/dd/yyyy" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" /></span> </label>
                        </p>
                        <p>
                            <label> Pickup Time
                                <br />
                                <span class="wpcf7-form-control-wrap pickup-time"><select name="pickup-time" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="1:00">1:00</option><option value="1:30">1:30</option><option value="2:00">2:00</option><option value="2:30">2:30</option><option value="3:00">3:00</option><option value="3:30">3:30</option><option value="5:00">5:00</option><option value="5:30">5:30</option><option value="6:00">6:00</option><option value="6:30">6:30</option><option value="7:00">7:00</option><option value="7:30">7:30</option><option value="8:00">8:00</option><option value="8:30">8:30</option><option value="9:00">9:00</option><option value="9:30">9:30</option><option value="10:00">10:00</option><option value="10:30">10:30</option><option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option><option value="12:30">12:30</option><option value="13:00">13:00</option><option value="13:30">13:30</option><option value="14:00">14:00</option><option value="14:30">14:30</option><option value="15:00">15:00</option><option value="15:30">15:30</option><option value="16:00">16:00</option><option value="16:30">16:30</option><option value="17:00">17:00</option><option value="17:30">17:30</option><option value="18:00">18:00</option><option value="18:30">18:30</option><option value="19:00">19:00</option><option value="19:30">19:30</option><option value="20:00">20:00</option><option value="20:30">20:30</option><option value="21:00">21:00</option><option value="21:30">21:30</option><option value="22:00">22:00</option><option value="22:30">22:30</option><option value="23:00">23:00</option><option value="23:30">23:30</option><option value="24:00">24:00</option><option value="24:30">24:30</option></select></span> </label>
                        </p>
                        <p>
                            <label> Drop Off Address
                                <br />
                                <span class="wpcf7-form-control-wrap dropoff-address"><input type="text" name="dropoff-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Heatrow Airport" /></span> </label>
                        </p>
                        <p>
                            <label> Drop Off Date
                                <br />
                                <span class="wpcf7-form-control-wrap dropoff-date"><input type="date" name="dropoff-date" value="mm/dd/yyyy" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" /></span> </label>
                        </p>
                        <p>
                            <label> Drop Off Time
                                <br />
                                <span class="wpcf7-form-control-wrap dropoff-time"><select name="dropoff-time" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="1:00">1:00</option><option value="1:30">1:30</option><option value="2:00">2:00</option><option value="2:30">2:30</option><option value="3:00">3:00</option><option value="3:30">3:30</option><option value="5:00">5:00</option><option value="5:30">5:30</option><option value="6:00">6:00</option><option value="6:30">6:30</option><option value="7:00">7:00</option><option value="7:30">7:30</option><option value="8:00">8:00</option><option value="8:30">8:30</option><option value="9:00">9:00</option><option value="9:30">9:30</option><option value="10:00">10:00</option><option value="10:30">10:30</option><option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option><option value="12:30">12:30</option><option value="13:00">13:00</option><option value="13:30">13:30</option><option value="14:00">14:00</option><option value="14:30">14:30</option><option value="15:00">15:00</option><option value="15:30">15:30</option><option value="16:00">16:00</option><option value="16:30">16:30</option><option value="17:00">17:00</option><option value="17:30">17:30</option><option value="18:00">18:00</option><option value="18:30">18:30</option><option value="19:00">19:00</option><option value="19:30">19:30</option><option value="20:00">20:00</option><option value="20:30">20:30</option><option value="21:00">21:00</option><option value="21:30">21:30</option><option value="22:00">22:00</option><option value="22:30">22:30</option><option value="23:00">23:00</option><option value="23:30">23:30</option><option value="24:00">24:00</option><option value="24:30">24:30</option></select></span> </label><span class="wpcf7-form-control-wrap dynamictitle"><input type="hidden" name="dynamictitle" value="Audi A4" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" aria-invalid="false" /></span><span class="wpcf7-form-control-wrap dynamicurl"><input type="hidden" name="dynamicurl" value="#" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" aria-invalid="false" /></span></p>
                        <p>
                            <input type="submit" value="Request for Booking" class="wpcf7-form-control wpcf7-submit" />
                        </p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
                <div class="single_car_booking_divider">
                    <span class="single_car_booking_divider_content">or</span>
                </div>
                <div class="single_car_booking_woocommerce_wrapper">
                    <button data-product="132" data-processing="Please wait..." data-url="#" class="single_car_add_to_cart button">Book Instantly</button>
                </div>
                <div class="single_car_view_wrapper themeborder">
                    <div class="single_car_view_desc">
                        This car&#039;s been viewed&nbsp;544&nbsp;times in the past week </div>

                    <div class="single_car_view_icon ti-alarm-clock"></div>
                </div>
                <br class="clear" />
            </div>

            <a id="single_car_share_button" href="javascript:;" class="button ghost themeborder"><span class="ti-email"></span>Share this car</a>

            <div class="single_car_users_online_wrapper themeborder">
                <div class="single_car_users_online_icon">
                    <span class="ti-info-alt"></span>
                </div>
                <div class="single_car_users_online_content">
                    <strong>231</strong> traveler(s) are considering our cars right now! </div>
            </div>

        </div>

    </div>
    <br class="clear" />

    <div class="sidebar_bottom"></div>
    </div>

    </div>
    <!-- End main content -->

    <br class="clear" />
    <div class="car_related">
        <h3 class="sub_title">Similar cars</h3>
        <div id="portfolio_filter_wrapper" class="gallery classic three_cols portfolio-content section content clearfix" data-columns="3">
            <div class="element grid classic3_cols">
                <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-141">

                    <a class="car_image" href="#">
                        <img src="upload/Mercedes-C-Class-Estate-1-700x466.jpg" alt="Mercedes Benz C-Class" />
                    </a>

                    <div class="portfolio_info_wrapper">
                        <div class="car_attribute_wrapper">
                            <a class="car_link" href="#"><h4>Mercedes Benz C-Class</h4></a>
                            <div class="car_attribute_rating">
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="car_attribute_rating_count">
                                    4&nbsp; reviews </div>
                            </div>

                            <div class="car_attribute_wrapper_icon">
                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-user"></div>
                                    <div class="car_attribute_content">
                                        5 </div>
                                </div>

                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-briefcase"></div>
                                    <div class="car_attribute_content">
                                        2 </div>
                                </div>

                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-panel"></div>
                                    <div class="car_attribute_content">
                                        Auto </div>
                                </div>

                            </div>
                            <br class="clear" />
                        </div>
                        <div class="car_attribute_price">
                            <div class="car_attribute_price_day three_cols">
                                <span class="single_car_currency">$</span><span class="single_car_price">90</span> <span class="car_unit_day">Per Day</span>
                            </div>
                        </div>
                        <br class="clear" />
                    </div>
                </div>
            </div>
            <div class="element grid classic3_cols">
                <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-251">

                    <a class="car_image" href="#">
                        <img src="upload/2017-lexus-ls-460-2-700x466.jpg" alt="Lexus LS 460" />
                    </a>

                    <div class="portfolio_info_wrapper">
                        <div class="car_attribute_wrapper">
                            <a class="car_link" href="#"><h4>Lexus LS 460</h4></a>
                            <div class="car_attribute_rating">
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="car_attribute_rating_count">
                                    4&nbsp; reviews </div>
                            </div>

                            <div class="car_attribute_wrapper_icon">
                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-user"></div>
                                    <div class="car_attribute_content">
                                        5 </div>
                                </div>

                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-briefcase"></div>
                                    <div class="car_attribute_content">
                                        4 </div>
                                </div>

                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-panel"></div>
                                    <div class="car_attribute_content">
                                        Auto </div>
                                </div>

                            </div>
                            <br class="clear" />
                        </div>
                        <div class="car_attribute_price">
                            <div class="car_attribute_price_day three_cols">
                                <span class="single_car_currency">$</span><span class="single_car_price">99</span> <span class="car_unit_day">Per Day</span>
                            </div>
                        </div>
                        <br class="clear" />
                    </div>
                </div>
            </div>
            <div class="element grid classic3_cols">
                <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-255">

                    <a class="car_image" href="#">
                        <img src="upload/Porsche-Panamera-700x466.jpg" alt="Porsche Panamera" />
                    </a>

                    <div class="portfolio_info_wrapper">
                        <div class="car_attribute_wrapper">
                            <a class="car_link" href="#"><h4>Porsche Panamera</h4></a>
                            <div class="car_attribute_rating">
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="car_attribute_rating_count">
                                    4&nbsp; reviews </div>
                            </div>

                            <div class="car_attribute_wrapper_icon">
                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-user"></div>
                                    <div class="car_attribute_content">
                                        4 </div>
                                </div>

                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-briefcase"></div>
                                    <div class="car_attribute_content">
                                        4 </div>
                                </div>

                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-panel"></div>
                                    <div class="car_attribute_content">
                                        Auto </div>
                                </div>

                            </div>
                            <br class="clear" />
                        </div>
                        <div class="car_attribute_price">
                            <div class="car_attribute_price_day three_cols">
                                <span class="single_car_currency">$</span><span class="single_car_price">252</span> <span class="car_unit_day">Per Day</span>
                            </div>
                        </div>
                        <br class="clear" />
                    </div>
                </div>
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
                        <p><img src="images/logo@2x_white.png" alt="" width="175" height="24"></p>
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