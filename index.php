<?php
/*
 * Created on Thu Feb 24 2022
 *
 *  Devlan Agency - devlan.co.ke 
 *
 * hello@devlan.co.ke
 *
 *
 * The Devlan End User License Agreement
 *
 * Copyright (c) 2022 Devlan Agency
 *
 * 1. GRANT OF LICENSE
 * Devlan Agency hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 * install and activate this system on two separated computers solely for your personal and non-commercial use,
 * unless you have purchased a commercial license from Devlan Agency. Sharing this Software with other individuals, 
 * or allowing other individuals to view the contents of this Software, is in violation of this license.
 * You may not make the Software available on a network, or in any way provide the Software to multiple users
 * unless you have first purchased at least a multi-user license from Devlan Agency.
 *
 * 2. COPYRIGHT 
 * The Software is owned by Devlan Agency and protected by copyright law and international copyright treaties. 
 * You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 * 3. RESTRICTIONS ON USE
 * You may not, and you may not permit others to
 * (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 * (b) modify, distribute, or create derivative works of the Software;
 * (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 * otherwise exploit the Software.  
 *
 * 4. TERM
 * This License is effective until terminated. 
 * You may terminate it at any time by destroying the Software, together with all copies thereof.
 * This License will also terminate if you fail to comply with any term or condition of this Agreement.
 * Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 * 5. NO OTHER WARRANTIES. 
 * DEVLAN AGENCY  DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 * DEVLAN AGENCY SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 * EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 * SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 * ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 * INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 * SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 * THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 * HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 * 6. SEVERABILITY
 * In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 * affect the validity of the remaining portions of this license.
 *
 * 7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL DEVLAN AGENCY  OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 * CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 * USE OF THE SOFTWARE, EVEN IF DEVLAN HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 * IN NO EVENT WILL DEVLAN  LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 * TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 */


/* Load Header Partial*/
require_once('cms_assets/head.php');
?>

<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!--search area-->
    <div class="search-input">
        <div class="search-close">
            <i class="icofont-close-circled"></i>
        </div>
        <form>
            <input type="text" name="text" placeholder="Search Heare">
            <button class="search-btn" type="submit">
                <i class="icofont-search-2"></i>
            </button>
        </form>
    </div>
    <!-- search area -->

    <!-- Mobile Menu Start Here -->
    <div class="mobile-menu transparent-header">
        <nav class="mobile-header">
            <div class="header-logo">
                <a href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
            </div>
            <div class="header-bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <nav class="mobile-menu">
            <div class="mobile-menu-area">
                <div class="mobile-menu-area-inner">
                    <ul class="lab-ul">
                        <li class="active">
                            <a href="#0">Home</a>
                            <ul class="lab-ul">
                                <li><a href="index.html">Home Page One</a></li>
                                <li><a href="index-2.html">Home Page Two</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li>
                            <a href="#0">Pages</a>
                            <ul class="lab-ul">
                                <li><a href="team.html">Team Membar</a></li>
                                <li><a href="faq-page.html">Faq Page</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Blog</a>
                            <ul class="lab-ul">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-single.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Shop</a>
                            <ul class="lab-ul">
                                <li><a href="product-page.html">Products Page</a></li>
                                <li><a href="product-single.html">Products Details</a></li>
                                <li><a href="cart-page.html">Cart Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Mobile Menu Ending Here -->

    <!-- desktop menu start here -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 col-12">
                        <div class="logo py-2">
                            <a href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="ht-left">
                            <ul class="lab-ul d-flex flex-wrap justify-content-end">
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="ht-add-thumb mr-2">
                                        <img src="assets/images/header/01.png" alt="address">
                                    </div>
                                    <div class="ht-add-content">
                                        <span>72AH, Victoria,</span>
                                        <span class="d-block text-bold">Collins Street West USA</span>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="ht-add-thumb mr-2">
                                        <img src="assets/images/header/02.png" alt="email">
                                    </div>
                                    <div class="ht-add-content">
                                        <span>Send Mail </span>
                                        <span class="d-block text-bold">murgifarm@gmail.com</span>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="ht-add-thumb mr-2">
                                        <img src="assets/images/header/03.png" alt="call">
                                    </div>
                                    <div class="ht-add-content">
                                        <span>Make Call </span>
                                        <span class="d-block text-bold">+88-6487-5962-563</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom bg-theme">
            <div class="header-area">
                <div class="container">
                    <div class="primary-menu">
                        <div class="main-area w-100">
                            <div class="main-menu d-flex flex-wrap align-items-center justify-content-between w-100">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo/02.png" alt="logo"></a>
                                </div>
                                <ul class="lab-ul">
                                    <li class="active">
                                        <a href="index.html">Home</a>
                                        <ul class="lab-ul">
                                            <li><a href="index.html" class="active">Home Page One</a></li>
                                            <li><a href="index-2.html">Home Page Two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li>
                                        <a href="#0">Pages</a>
                                        <ul class="lab-ul">
                                            <li><a href="team.html">Team Membar</a></li>
                                            <li><a href="faq-page.html">Faq Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Blog</a>
                                        <ul class="lab-ul">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Shop</a>
                                        <ul class="lab-ul">
                                            <li><a href="product-page.html">Products Page</a></li>
                                            <li><a href="product-single.html">Products Details</a></li>
                                            <li><a href="cart-page.html">Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Gallery</a>
                                        <ul class="lab-ul">
                                            <li><a href="gallery-1.html">Gallery 1</a></li>
                                            <li><a href="gallery-2.html">Gallery 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                                <ul class="lab-ul search-cart">
                                    <li>
                                        <div class="cart-option">
                                            <i class="icofont-cart-alt"></i>
                                            <div class="cart-content">
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="assets/images/products/product/01.png" alt="cart"></a>
                                                    </div>
                                                    <div class="cart-des">
                                                        <a href="#">Product Title Here</a>
                                                        <p>$20.00</p>
                                                    </div>
                                                    <div class="cart-btn">
                                                        <a href="#"><i class="icofont-close-circled"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="assets/images/products/product/02.png" alt="cart"></a>
                                                    </div>
                                                    <div class="cart-des">
                                                        <a href="#">Product Title Here</a>
                                                        <p>$20.00</p>
                                                    </div>
                                                    <div class="cart-btn">
                                                        <a href="#"><i class="icofont-close-circled"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart-bottom">
                                                    <div class="cart-subtotal">
                                                        <p>Total: <b class="float-right">$40.00</b></p>
                                                    </div>
                                                    <div class="cart-action">
                                                        <a href="#" class="lab-btn"><span>View Cart</span></a>
                                                        <a href="#" class="lab-btn"><span>Check Out</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search-option">
                                            <i class="icofont-search-2"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- desktop menu ending here -->

    <!-- Banner Section Start Here -->
    <section class="banner">
        <div class="banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-slider-part" style="background-image: url(assets/images/banner/bg-images/01.jpg);">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row flex-row-reverse justify-content-center align-items-center">
                                <div class="col-12">
                                    <div class="banner-content">
                                        <h1 class="banner-title"><B class="d-lg-block">Fresh Killed Poultry </B>
                                            Chickens Specialty Game Meats
                                            Eggs And More!!! </h1>
                                        <a href="#" class="lab-btn"><span>DISCOVER NOW</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-slider-part" style="background-image: url(assets/images/banner/bg-images/02.jpg);">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row flex-row-reverse justify-content-center align-items-center">
                                <div class="col-12">
                                    <div class="banner-content">
                                        <h1 class="banner-title"><B class="d-lg-block">Fresh Killed Poultry </B>
                                            Chickens Specialty Game Meats
                                            Eggs And More!!! </h1>
                                        <a href="#" class="lab-btn"><span>DISCOVER NOW</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-slider-part" style="background-image: url(assets/images/banner/bg-images/01.jpg);">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row flex-row-reverse justify-content-center align-items-center">
                                <div class="col-12">
                                    <div class="banner-content">
                                        <h1 class="banner-title"><B class="d-lg-block">Fresh Killed Poultry </B>
                                            Chickens Specialty Game Meats
                                            Eggs And More!!! </h1>
                                        <a href="#" class="lab-btn"><span>DISCOVER NOW</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Banner Section Ending Here -->

    <!-- about section start here -->
    <section class="about-section relative padding-tb">
        <div class="container">
            <div class="row align-items-center mb-15">
                <div class="col-lg-6 col-12">
                    <div class="about-thumb">
                        <img src="assets/images/about/01.png" alt="about-thumb">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-wrapper p-0">
                        <div class="about-title">
                            <h2><span class="d-lg-block"> Welcome to Our Poultry And </span>Egg Farm.</h2>
                            <p>Continually productize compelling quality for packed with Elated productize compelling
                                quality for packed with all Elated ThemSetting up to website and creating pages.</p>
                        </div>
                        <div class="about-content">
                            <ul class="lab-ul list-group">
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are
                                    providing different
                                    services</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are one
                                    of leading company
                                </li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Profitability is the primary
                                    goal of all business</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Learn how
                                    to grow your Business
                                </li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Professional solutions for your
                                    business</li>
                            </ul>
                            <a href="#" class="lab-btn mt-4"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ending here -->

    <!-- product category section start here -->
    <section class="product-section relative padding-tb bg-ash">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h3>Poultry Farm Products</h3>
                        <p>Conveniently customize proactive web services for leveraged
                            interfaces without Globally </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center bg-ash border-none relative">
                                    <div class="addcart-overlay">
                                        <div class="addcart-content">
                                            <div class="addcart-icon">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                                <a href="#"><i class="fas fa-sync-alt"></i></a>
                                                <a href="assets/images/product/01.png" data-rel="lightcase"><i class="fas fa-search"></i></a>
                                            </div>
                                            <a href="#" class="lab-btn d-inline-b">Add to cart</a>
                                        </div>
                                    </div>
                                    <img src="assets/images/products/product/01.png" class="card-img-top mb-2" alt="product">
                                    <div class="card-body">
                                        <div class="rating mb-2">
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                        </div>
                                        <a href="#">
                                            <h6 class="card-title">LIght Brown Eggs</h6>
                                        </a>
                                        <h6 class="product-price"> <span class="d-price">$29.99</span> <del>$49.99</del>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center bg-ash border-none relative">
                                    <div class="addcart-overlay">
                                        <div class="addcart-content">
                                            <div class="addcart-icon">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                                <a href="#"><i class="fas fa-sync-alt"></i></a>
                                                <a href="assets/images/product/01.png" data-rel="lightcase"><i class="fas fa-search"></i></a>
                                            </div>
                                            <a href="#" class="lab-btn d-inline-b">Add to cart</a>
                                        </div>
                                    </div>
                                    <img src="assets/images/products/product/02.png" class="card-img-top mb-2" alt="product">
                                    <div class="card-body">
                                        <div class="rating mb-2">
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                        </div>
                                        <a href="#">
                                            <h6 class="card-title">Little Chicken Broiler</h6>
                                        </a>
                                        <h6 class="product-price"> <span class="d-price">$29.99</span> <del>$49.99</del>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center bg-ash border-none relative">
                                    <div class="addcart-overlay">
                                        <div class="addcart-content">
                                            <div class="addcart-icon">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                                <a href="#"><i class="fas fa-sync-alt"></i></a>
                                                <a href="assets/images/product/01.png" data-rel="lightcase"><i class="fas fa-search"></i></a>
                                            </div>
                                            <a href="#" class="lab-btn d-inline-b">Add to cart</a>
                                        </div>
                                    </div>
                                    <img src="assets/images/products/product/03.png" class="card-img-top mb-2" alt="product">
                                    <div class="card-body">
                                        <div class="rating mb-2">
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                        </div>
                                        <a href="#">
                                            <h6 class="card-title">White Brown Eggs</h6>
                                        </a>
                                        <h6 class="product-price"> <span class="d-price">$29.99</span> <del>$49.99</del>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center bg-ash border-none relative">
                                    <div class="addcart-overlay">
                                        <div class="addcart-content">
                                            <div class="addcart-icon">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                                <a href="#"><i class="fas fa-sync-alt"></i></a>
                                                <a href="assets/images/product/01.png" data-rel="lightcase"><i class="fas fa-search"></i></a>
                                            </div>
                                            <a href="#" class="lab-btn d-inline-b">Add to cart</a>
                                        </div>
                                    </div>
                                    <img src="assets/images/products/product/04.png" class="card-img-top mb-2" alt="product">
                                    <div class="card-body">
                                        <div class="rating mb-2">
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                        </div>
                                        <a href="#">
                                            <h6 class="card-title">Chicken Broiler</h6>
                                        </a>
                                        <h6 class="product-price"> <span class="d-price">$29.99</span> <del>$49.99</del>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center bg-ash border-none relative">
                                    <div class="addcart-overlay">
                                        <div class="addcart-content">
                                            <div class="addcart-icon">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                                <a href="#"><i class="fas fa-sync-alt"></i></a>
                                                <a href="assets/images/product/01.png" data-rel="lightcase"><i class="fas fa-search"></i></a>
                                            </div>
                                            <a href="#" class="lab-btn d-inline-b">Add to cart</a>
                                        </div>
                                    </div>
                                    <img src="assets/images/products/product/05.png" class="card-img-top mb-2" alt="product">
                                    <div class="card-body">
                                        <div class="rating mb-2">
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                        </div>
                                        <a href="#">
                                            <h6 class="card-title">Fresh Chicken</h6>
                                        </a>
                                        <h6 class="product-price"> <span class="d-price">$29.99</span> <del>$49.99</del>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center bg-ash border-none relative">
                                    <div class="addcart-overlay">
                                        <div class="addcart-content">
                                            <div class="addcart-icon">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                                <a href="#"><i class="fas fa-sync-alt"></i></a>
                                                <a href="assets/images/product/01.png" data-rel="lightcase"><i class="fas fa-search"></i></a>
                                            </div>
                                            <a href="#" class="lab-btn d-inline-b">Add to cart</a>
                                        </div>
                                    </div>
                                    <img src="assets/images/products/product/06.png" class="card-img-top mb-2" alt="product">
                                    <div class="card-body">
                                        <div class="rating mb-2">
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                        </div>
                                        <a href="#">
                                            <h6 class="card-title">Raw Chicken Broiler</h6>
                                        </a>
                                        <h6 class="product-price"> <span class="d-price">$29.99</span> <del>$49.99</del>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center bg-ash border-none relative">
                                    <div class="addcart-overlay">
                                        <div class="addcart-content">
                                            <div class="addcart-icon">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                                <a href="#"><i class="fas fa-sync-alt"></i></a>
                                                <a href="assets/images/product/01.png" data-rel="lightcase"><i class="fas fa-search"></i></a>
                                            </div>
                                            <a href="#" class="lab-btn d-inline-b">Add to cart</a>
                                        </div>
                                    </div>
                                    <img src="assets/images/products/product/03.png" class="card-img-top mb-2" alt="product">
                                    <div class="card-body">
                                        <div class="rating mb-2">
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                        </div>
                                        <a href="#">
                                            <h6 class="card-title">White Brown Eggs</h6>
                                        </a>
                                        <h6 class="product-price"> <span class="d-price">$29.99</span> <del>$49.99</del>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center bg-ash border-none relative">
                                    <div class="addcart-overlay">
                                        <div class="addcart-content">
                                            <div class="addcart-icon">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                                <a href="#"><i class="fas fa-sync-alt"></i></a>
                                                <a href="assets/images/product/01.png" data-rel="lightcase"><i class="fas fa-search"></i></a>
                                            </div>
                                            <a href="#" class="lab-btn d-inline-b">Add to cart</a>
                                        </div>
                                    </div>
                                    <img src="assets/images/products/product/01.png" class="card-img-top mb-2" alt="product">
                                    <div class="card-body">
                                        <div class="rating mb-2">
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                        </div>
                                        <a href="#">
                                            <h6 class="card-title">Light Brown Eggs</h6>
                                        </a>
                                        <h6 class="product-price"> <span class="">$29.99</span> <del>$49.99</del></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="lab-btn"><span>Shop Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product category section ending here -->

    <!-- service section start here -->
    <section class="service-section padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h3>Poultry Farm Services</h3>
                        <p>Conveniently customize proactive web services for leveraged
                            interfaces without Globally </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="service-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="lab-item service-item">
                                    <div class="lab-inner p-4 mb-4 text-left">
                                        <div class="service-top d-flex align-items-center mb-4">
                                            <div class="st-thumb mr-3">
                                                <img src="assets/images/service/01.png" alt="service image">
                                            </div>
                                            <div class="st-content mt-2">
                                                <a href="#">
                                                    <h6>Alternative egg</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="service-bottom">
                                            <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                                empowered without globally results.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="lab-item service-item">
                                    <div class="lab-inner p-4 mb-4 text-left">
                                        <div class="service-top d-flex align-items-center mb-4">
                                            <div class="st-thumb mr-3">
                                                <img src="assets/images/service/02.png" alt="service image">
                                            </div>
                                            <div class="st-content mt-2">
                                                <a href="#">
                                                    <h6>Poultry Cages</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="service-bottom">
                                            <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                                empowered without globally results.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="lab-item service-item">
                                    <div class="lab-inner p-4 mb-4 text-left">
                                        <div class="service-top d-flex align-items-center mb-4">
                                            <div class="st-thumb mr-3">
                                                <img src="assets/images/service/03.png" alt="service image">
                                            </div>
                                            <div class="st-content mt-2">
                                                <a href="#">
                                                    <h6>Breeder Management</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="service-bottom">
                                            <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                                empowered without globally results.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="lab-item service-item">
                                    <div class="lab-inner p-4 mb-4 text-left">
                                        <div class="service-top d-flex align-items-center mb-4">
                                            <div class="st-thumb mr-3">
                                                <img src="assets/images/service/04.png" alt="service image">
                                            </div>
                                            <div class="st-content mt-2">
                                                <a href="#">
                                                    <h6>Poultry Climate</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="service-bottom">
                                            <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                                empowered without globally results.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="lab-item service-item">
                                    <div class="lab-inner p-4 mb-4 text-left">
                                        <div class="service-top d-flex align-items-center mb-4">
                                            <div class="st-thumb mr-3">
                                                <img src="assets/images/service/05.png" alt="service image">
                                            </div>
                                            <div class="st-content mt-2">
                                                <a href="#">
                                                    <h6>Residue Teatment</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="service-bottom">
                                            <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                                empowered without globally results.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="lab-item service-item">
                                    <div class="lab-inner p-4 mb-4 text-left">
                                        <div class="service-top d-flex align-items-center mb-4">
                                            <div class="st-thumb mr-3">
                                                <img src="assets/images/service/06.png" alt="service image">
                                            </div>
                                            <div class="st-content mt-2">
                                                <a href="#">
                                                    <h6>Exhaust air Treatment</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="service-bottom">
                                            <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                                empowered without globally results.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- service section ends here -->

    <!-- Gallery section start here -->
    <section class="gallery-section padding-tb bg-ash">
        <div class="container-fluid p-0 m-0">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h3>Poultry Farm Gallery</h3>
                        <p>Conveniently customize proactive web services for leveraged
                            interfaces without Globally </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="gallery-content">
                        <div class="gallery-grid text-center">
                            <a href="assets/images/gallery/01.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
                                <img src="assets/images/gallery/01.jpg" alt="gallery-image">
                            </a>
                            <a href="assets/images/gallery/02.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
                                <img src="assets/images/gallery/02.jpg" alt="gallery-image">
                            </a>
                            <a href="assets/images/gallery/03.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
                                <img src="assets/images/gallery/03.jpg" alt="gallery-image">
                            </a>
                            <a href="assets/images/gallery/04.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
                                <img src="assets/images/gallery/04.jpg" alt="gallery-image">
                            </a>
                            <a href="assets/images/gallery/05.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
                                <img src="assets/images/gallery/05.jpg" alt="gallery-image">
                            </a>
                            <a href="assets/images/gallery/06.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
                                <img src="assets/images/gallery/06.jpg" alt="gallery-image">
                            </a>
                            <a href="assets/images/gallery/07.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
                                <img src="assets/images/gallery/07.jpg" alt="gallery-image">
                            </a>
                            <a href="assets/images/gallery/08.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
                                <img src="assets/images/gallery/08.jpg" alt="gallery-image">
                            </a>
                        </div>
                        <div class="gallery-btn text-center mt-5">
                            <a href="#" class="lab-btn"><span>Load Gallery</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery section ends here -->

    <!-- team section start here -->
    <section class="team-section padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h3>Our Team Member</h3>
                        <p>Conveniently customize proactive web services for leveraged interfaces without Globally </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center border-none">
                                    <img src="assets/images/team/01.jpg" class="card-img-top" alt="product">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6 class="card-title mb-0">Jason Roy</h6>
                                        </a>
                                        <p class="card-text mb-2">Manager</p>
                                        <div class="social-share">
                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center border-none">
                                    <img src="assets/images/team/02.jpg" class="card-img-top" alt="product">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6 class="card-title mb-0">Sahjahan Sagor</h6>
                                        </a>
                                        <p class="card-text mb-2">Founder & Ceo</p>
                                        <div class="social-share">
                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center border-none">
                                    <img src="assets/images/team/03.jpg" class="card-img-top" alt="product">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6 class="card-title mb-0">Alisha Kabir</h6>
                                        </a>
                                        <p class="card-text mb-2">Marketer</p>
                                        <div class="social-share">
                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4 text-center border-none">
                                    <img src="assets/images/team/04.jpg" class="card-img-top" alt="product">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6 class="card-title mb-0">Jeson Smith</h6>
                                        </a>
                                        <p class="card-text mb-2">Farmer</p>
                                        <div class="social-share">
                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team section ending here -->

    <!-- testimonial Section start here -->
    <section class="testimonial-section padding-tb bg-ash">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h3>What Client Say Our Poultry Farm</h3>
                        <p>Conveniently customize proactive web services for leveraged
                            interfaces without Globally </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="testimonial-content">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="lab-item testi-item-2 mb-3">
                                    <div class="lab-inner">
                                        <div class="testi-top">
                                            <div class="testi-t-thumb">
                                                <img src="assets/images/testimonial/01.jpg" alt="author-image">
                                            </div>
                                            <div class="testi-t-content">
                                                <a href="#">
                                                    <h6>Jeson smith</h6>
                                                </a>
                                                <p>Founder & CEO</p>
                                                <div class="rating">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testi-bottom">
                                            <p><img class="q1" src="assets/images/testimonial/q1.png" alt='"'>
                                                Continually Onceptualizef Technically invs
                                                Professionally monetizeturkeyf Testingdu
                                                Frofessionally oe-enablfunctaizede-come
                                                rce Onceptualize Technically initiatives.
                                                <img class="q2" src="assets/images/testimonial/q2.png" alt='"'>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="lab-item testi-item-2 mb-3">
                                    <div class="lab-inner">
                                        <div class="testi-top">
                                            <div class="testi-t-thumb">
                                                <img src="assets/images/testimonial/02.jpg" alt="author-image">
                                            </div>
                                            <div class="testi-t-content">
                                                <a href="#">
                                                    <h6>Sahjahan Sagor</h6>
                                                </a>
                                                <p>Founder & CEO</p>
                                                <div class="rating">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testi-bottom">
                                            <p><img class="q1" src="assets/images/testimonial/q1.png" alt='"'>
                                                Continually Onceptualizef Technically invs
                                                Professionally monetizeturkeyf Testingdu
                                                Frofessionally oe-enablfunctaizede-come
                                                rce Onceptualize Technically initiatives.
                                                <img class="q2" src="assets/images/testimonial/q2.png" alt='"'>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="lab-item testi-item-2 mb-3">
                                    <div class="lab-inner">
                                        <div class="testi-top">
                                            <div class="testi-t-thumb">
                                                <img src="assets/images/testimonial/03.jpg" alt="author-image">
                                            </div>
                                            <div class="testi-t-content">
                                                <a href="#">
                                                    <h6>Alisha Kabir</h6>
                                                </a>
                                                <p>Founder & CEO</p>
                                                <div class="rating">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testi-bottom">
                                            <p><img class="q1" src="assets/images/testimonial/q1.png" alt='"'>
                                                Continually Onceptualizef Technically invs
                                                Professionally monetizeturkeyf Testingdu
                                                Frofessionally oe-enablfunctaizede-come
                                                rce Onceptualize Technically initiatives.
                                                <img class="q2" src="assets/images/testimonial/q2.png" alt='"'>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial Section end here -->

    <!-- blog section start here -->
    <section class="blog-section relative padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h3>Our Recent News</h3>
                        <p>Conveniently customize proactive web services for leveraged interfaces without Globally</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card border-none">
                                    <img src="assets/images/blog/01.jpg" class="card-img-top" alt="blog">
                                    <div class="card-body p-1 mt-3">
                                        <a href="#">
                                            <h6 class="card-title">Chicken ducklings to help solve Obesity...</h6>
                                        </a>
                                        <p class="card-text mb-3">Conveniently customize proactive web services without Globally. oe-enablfunctaizede-come rce Onceptualize Technically initiatives.</p>
                                        <div class="text-btn">
                                            <a href="blog-single.html"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card border-none">
                                    <img src="assets/images/blog/02.jpg" class="card-img-top" alt="blog">
                                    <div class="card-body p-1 mt-3">
                                        <a href="#">
                                            <h6 class="card-title">Will eggs be a news source of cancer drugs...</h6>
                                        </a>
                                        <p class="card-text mb-3">Conveniently customize proactive web services without Globally. oe-enablfunctaizede-come rce Onceptualize Technically initiatives.</p>
                                        <div class="text-btn">
                                            <a href="blog-single.html"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card border-none">
                                    <img src="assets/images/blog/03.jpg" class="card-img-top" alt="blog">
                                    <div class="card-body p-1 mt-3">
                                        <a href="#">
                                            <h6 class="card-title">Omega-3 chicken,egg may lower heart attack ...</h6>
                                        </a>
                                        <p class="card-text mb-3">Conveniently customize proactive web services without Globally. oe-enablfunctaizede-come rce Onceptualize Technically initiatives.</p>
                                        <div class="text-btn">
                                            <a href="blog-single.html">Read More<span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section ending here -->

    <!-- sponsor section start here -->
    <div class="sponsor-section padding-tb bg-ash">
        <div class="container">
            <div class="section-wrapper">
                <div class="sponsor-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <div class="sponsor-thumb">
                                    <a href="#"><img src="assets/images/sponsor/01.png" alt="sponsor"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <div class="sponsor-thumb">
                                    <a href="#"><img src="assets/images/sponsor/02.png" alt="sponsor"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <div class="sponsor-thumb">
                                    <a href="#"><img src="assets/images/sponsor/03.png" alt="sponsor"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <div class="sponsor-thumb">
                                    <a href="#"><img src="assets/images/sponsor/04.png" alt="sponsor"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <div class="sponsor-thumb">
                                    <a href="#"><img src="assets/images/sponsor/05.png" alt="sponsor"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sponsor section ending here -->
    <!-- Feature section start here -->
    <section class="feature-section padding-tb">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/feature/01.png" alt="Feature Image">
                            </div>
                            <div class="lab-content">
                                <h6>Products Range</h6>
                                <p>Conveniently customize recaptiualize
                                    focused inter without globally </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/feature/02.png" alt="Feature image">
                            </div>
                            <div class="lab-content">
                                <h6>Quality Matters</h6>
                                <p>Conveniently customize recaptiualize
                                    focused inter without globally </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/feature/03.png" alt="Feature image">
                            </div>
                            <div class="lab-content">
                                <h6>Free Shipping</h6>
                                <p>Conveniently customize recaptiualize
                                    focused inter without globally </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/feature/04.png" alt="Feature image">
                            </div>
                            <div class="lab-content">
                                <h6>Customer Satisfaction</h6>
                                <p>Conveniently customize recaptiualize
                                    focused inter without globally </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature section ending here -->

    <!-- footer section start here -->
    <?php require_once('cms_assets/footer.php'); ?>
    <!-- footer section start here -->
    <?php require_once('cms_assets/scripts.php'); ?>
</body>

</html>