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
require_once('cms_partials/head.php');
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


    <?php require_once('cms_partials/navbar.php'); ?>
    <!-- Banner Section Start Here -->
    <section class="banner">
        <div class="banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-slider-part" style="background-image: url(cms_assets/images/bg-images/index.jpeg);">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row flex-row-reverse justify-content-center align-items-center">
                                <div class="col-12">
                                    <div class="banner-content">
                                        <h1 class="banner-title"><B class="d-lg-block">Poultry Farm Information Management System</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section Ending Here -->

    <!-- about section start here -->
    <section class="about-section relative padding-tb">
        <div class="container">
            <div class="row align-items-center mb-15">
                <div class="col-lg-6 col-12">
                    <div class="about-thumb">
                        <img src="cms_assets/images/about/01.png" alt="about-thumb">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-wrapper p-0">
                        <div class="about-title">
                            <h2><span class="d-lg-block"> Poultry Farm Information </span>Management System</h2>
                            <p>This system is a full-featured Software with a user-friendly user interface,
                                which allows you to manage your Poultry Graphically efficiently.
                                It is developed specifically for Integrated Poultry Farmers,
                                Poultry Brokers, Egg Trading, Feed Trading, Chicken Trading,
                                Feed Formulation, which is affordable, powerful, and easy to use. This system implements the following modules:
                            </p>
                        </div>
                        <div class="about-content">
                            <ul class="lab-ul list-group">
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Customer Management Module</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Staffs Management Module</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Poultry Products Management Module</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Suppliers Management Module</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Expenses Management Module</li>
                                <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Powerful Reporting Module</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ending here -->

    <!-- footer section start here -->
    <?php require_once('cms_partials/footer.php'); ?>
    <!-- footer section start here -->
    <?php require_once('cms_partials/scripts.php'); ?>
</body>

</html>