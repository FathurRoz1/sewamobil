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
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">Booking</a>
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
                                                <li class="menu-item current-menu-item  menu-item-has-children arrow"><a href="#">Pages</a>
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


        <div class="ppb_wrapper  ">
            <div class="one withsmallpadding ppb_header_youtube withbg parallax" data-jarallax-video="https://www.youtube.com/watch?v=Mz5PAKmwAqc" style="text-align:center;padding:305px 0 305px 0;color:#ffffff;">
                <div class="overlay_background" style="background:#000000;background:rgb(0,0,0,0.5);background:rgba(0,0,0,0.5);"></div>
                <div class="standard_wrapper">
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div style="margin:auto;width:60%">
                                <h2 class="ppb_title" style="color:#ffffff;">We are Grand Car Rental Best Car Rental WordPress Theme</h2>
                                <div class="page_tagline" style="color:#ffffff;">Car rental, limousine, and car hire. All in one service.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="one withsmallpadding ppb_header " style="text-align:center;padding:50px 0 50px 0;background-color:#5856d6;color:#ffffff;">
                <div class="standard_wrapper">
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div style="margin:auto;width:50%">
                                <h2 class="ppb_title" style="color:#ffffff;">This adventure isn’t about change but it seems to be an inevitability.</h2>
                                <div class="ppb_header_content">
                                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud.Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse.</p>
                                    <p> </p>
                                    <div class="one_half " style="">
                                        <div class="animate_counter_wrapper">
                                            <div id="15722574381434579802" class="odometer" style="font-size:60px;line-height:60px;">0</div>
                                            <div class="count_separator"><span></span></div>
                                            <div class="counter_subject">Trips</div>
                                        </div>
                                    </div>
                                    <div class="one_half last " style="">
                                        <div class="animate_counter_wrapper">
                                            <div id="15722574381897655566" class="odometer" style="font-size:60px;line-height:60px;">0</div>
                                            <div class="count_separator"><span></span></div>
                                            <div class="counter_subject">Happy Customers</div>
                                        </div>
                                    </div>
                                    <p>
                                        <br class="clear" />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="one withsmallpadding ppb_contact_half_bg withbg parallax " style="background-image:url(upload/evening.jpg);background-position: center center;padding:40px 0 40px 0;">
                <div class="standard_wrapper">
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div class="one_half_bg" style="background:#000000;background:rgb(0,0,0,0.8);background:rgba(0,0,0,0.8);color:#ffffff;" data-stellar-ratio="1.3">
                                <h2 class="ppb_title" style="color:#ffffff;">Get In Touch With Us</h2>
                                <div class="page_tagline" style="color:#ffffff;">This is sample of sub title.</div>
                                <div class="contact_form7_wrapper">
                                    <div role="form" class="wpcf7" id="wpcf7-f2465-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">

                                            <p>
                                                <label> Your Name*
                                                    <br />
                                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label>
                                            </p>
                                            <p>
                                                <label> Your Emai*
                                                    <br />
                                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label>
                                            </p>
                                            <p>
                                                <label> Subject
                                                    <br />
                                                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label>
                                            </p>
                                            <p>
                                                <label> Your Message
                                                    <br />
                                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label>
                                            </p>
                                            <p>
                                                <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                                            </p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="one withsmallpadding ppb_header " style="text-align:center;padding:0px 0 0px 0;margin-top:60px;margin-bottom:20px;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <h2 class="ppb_title" style="">Meet Our Team</h2>
                            <div class="page_tagline" style="">Car rental, limousine, and car hire. All in one service.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="one withsmallpadding ppb_team_column">
            <div class="page_content_wrapper page_main_content sidebar_content full_width fixed_column photoframe">
                <div class="standard_wrapper">
                    <div id="15722574382014118329" class="portfolio_filter_wrapper gallery five_cols" data-columns="5">
                        <div class="element grid photoframe fixed_columns classic5_cols animated1">
                            <div class="one_fifth gallery5 classic filterable">
                                <div class="post_img"><img class="team_pic" src="upload/pexels-photo-62365-500x500.jpeg" alt="" />
                                    <ul class="social_wrapper team">
                                        <li><a title="Jessica Lee on Twitter" target="_blank" class="tooltip" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a title="Jessica Lee on Facebook" target="_blank" class="tooltip" href="https://facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a title="Jessica Lee on Google+" target="_blank" class="tooltip" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a title="Jessica Lee on Linkedin" target="_blank" class="tooltip" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="portfolio_info_wrapper center">
                                    <h4>Jessica Lee</h4>
                                    <div class="page_tagline">CEO</div>
                                </div>
                            </div>
                        </div>
                        <div class="element grid photoframe fixed_columns classic5_cols animated2">
                            <div class="one_fifth gallery5 classic filterable">
                                <div class="post_img"><img class="team_pic" src="upload/pexels-photo-57759-500x500.jpeg" alt="" />
                                    <ul class="social_wrapper team">
                                        <li><a title="John Bennett on Twitter" target="_blank" class="tooltip" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a title="John Bennett on Facebook" target="_blank" class="tooltip" href="https://facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a title="John Bennett on Google+" target="_blank" class="tooltip" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a title="John Bennett on Linkedin" target="_blank" class="tooltip" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="portfolio_info_wrapper center">
                                    <h4>John Bennett</h4>
                                    <div class="page_tagline">Asia Tour Expert</div>
                                </div>
                            </div>
                        </div>
                        <div class="element grid photoframe fixed_columns classic5_cols animated3">
                            <div class="one_fifth gallery5 classic filterable">
                                <div class="post_img"><img class="team_pic" src="upload/pexels-photo-176045-500x500.jpeg" alt="" />
                                    <ul class="social_wrapper team">
                                        <li><a title="Christina Hardy on Twitter" target="_blank" class="tooltip" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a title="Christina Hardy on Facebook" target="_blank" class="tooltip" href="https://facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a title="Christina Hardy on Google+" target="_blank" class="tooltip" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a title="Christina Hardy on Linkedin" target="_blank" class="tooltip" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="portfolio_info_wrapper center">
                                    <h4>Christina Hardy</h4>
                                    <div class="page_tagline">Marketing Manager</div>
                                </div>
                            </div>
                        </div>
                        <div class="element grid photoframe fixed_columns classic5_cols animated4">
                            <div class="one_fifth gallery5 classic filterable">
                                <div class="post_img"><img class="team_pic" src="upload/pexels-photo-167471-500x500.jpeg" alt="" />
                                    <ul class="social_wrapper team">
                                        <li><a title="Oliver Doe on Twitter" target="_blank" class="tooltip" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a title="Oliver Doe on Facebook" target="_blank" class="tooltip" href="https://facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a title="Oliver Doe on Google+" target="_blank" class="tooltip" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a title="Oliver Doe on Linkedin" target="_blank" class="tooltip" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="portfolio_info_wrapper center">
                                    <h4>Oliver Doe</h4>
                                    <div class="page_tagline">Europe Tour Expert</div>
                                </div>
                            </div>
                        </div>
                        <div class="element grid photoframe fixed_columns classic5_cols animated5">
                            <div class="one_fifth gallery5 classic filterable">
                                <div class="post_img"><img class="team_pic" src="upload/pexels-photo-48646-1-500x500.jpeg" alt="" />
                                    <ul class="social_wrapper team">
                                        <li><a title="Jane Bennett on Twitter" target="_blank" class="tooltip" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a title="Jane Bennett on Facebook" target="_blank" class="tooltip" href="https://facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a title="Jane Bennett on Google+" target="_blank" class="tooltip" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a title="Jane Bennett on Linkedin" target="_blank" class="tooltip" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="portfolio_info_wrapper center">
                                    <h4>Jane Bennett</h4>
                                    <div class="page_tagline">Customer Support</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br class="clear" />
    <div class="car_recently_view">

        <div class="standard_wrapper">

            <h3 class="sub_title">Recently View Cars</h3>

            <div id="portfolio_filter_wrapper" class="gallery grid four_cols portfolio-content section content clearfix" data-columns="4">
                <div class="element grid classic4_cols animated1">

                    <div class="one_fourth gallery4 grid static filterable portfolio_type themeborder" data-id="post-1" style="background-image:url(upload/mercedes-benz-cls-class-shooting-brake-13824-1920x1200-700x466.jpg);">
                        <a class="car_image" href="#"></a>
                        <div class="portfolio_info_wrapper">
                            <div class="car_attribute_wrapper">
                                <h5>Mercedes Benz CLS-Class</h5>
                            </div>
                            <div class="car_attribute_price">
                                <div class="car_attribute_price_day four_cols">
                                    <span class="single_car_currency">$</span><span class="single_car_price">100</span> <span class="car_unit_day">Per Day</span>
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </div>
                <div class="element grid classic4_cols animated2">

                    <div class="one_fourth gallery4 grid static filterable portfolio_type themeborder" data-id="post-2" style="background-image:url(upload/P14_0596_a4_rgb-1-700x466.jpg);">
                        <a class="car_image" href="#"></a>
                        <div class="portfolio_info_wrapper">
                            <div class="car_attribute_wrapper">
                                <h5>Porsche Cayenne</h5>
                            </div>
                            <div class="car_attribute_price">
                                <div class="car_attribute_price_day four_cols">
                                    <span class="single_car_currency">$</span><span class="single_car_price">127</span> <span class="car_unit_day">Per Day</span>
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </div>
                <div class="element grid classic4_cols animated3">

                    <div class="one_fourth gallery4 grid static filterable portfolio_type themeborder" data-id="post-3" style="background-image:url(upload/2016-Mercedes-Benz-GLE-2-700x466.jpg);">
                        <a class="car_image" href="#"></a>
                        <div class="portfolio_info_wrapper">
                            <div class="car_attribute_wrapper">
                                <h5>Mercedes Benz GLE</h5>
                            </div>
                            <div class="car_attribute_price">
                                <div class="car_attribute_price_day four_cols">
                                    <span class="single_car_currency">$</span><span class="single_car_price">127</span> <span class="car_unit_day">Per Day</span>
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </div>
                <div class="element grid classic4_cols animated4">

                    <div class="one_fourth gallery4 grid static filterable portfolio_type themeborder" data-id="post-4" style="background-image:url(upload/Porsche-Boxster-Wheels-8-700x466.jpg);">
                        <a class="car_image" href="#"></a>
                        <div class="portfolio_info_wrapper">
                            <div class="car_attribute_wrapper">
                                <h5>Porsche Boxster</h5>
                            </div>
                            <div class="car_attribute_price">
                                <div class="car_attribute_price_day four_cols">
                                    <span class="single_car_currency">$</span><span class="single_car_price">180</span> <span class="car_unit_day">Per Day</span>
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="footer" class=" r">

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
