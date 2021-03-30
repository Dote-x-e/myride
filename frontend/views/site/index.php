<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">


    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin: 0 0 80px 80px">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6" style="margin: 150px 0 0 -250px">
                                <h1>Wherever you’re headed, let’s get there together.</h1>
                                <p>Partner with us to drive your own livelihood and more.</p>
                                <a href="<?= Url::to(['site/signup']) ?>" class="button button-dark big">Sign up Now</a>
                            </div>
                            <div class="col-lg-6" style="margin-left: 180px">
                                <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/home/10.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding how-work-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section-title text-center">How It Works</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="icons-section">
                        <div class="single-icon">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/1.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/2.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/3.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/1.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Book in Just 2 Tabs</h4>
                        <p>Share your trip details with loved ones. Track your trip during your ride. Our technology helps put peace of mind at your fingertips.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/2.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Get a Driver</h4>
                        <p>Drive when and where you want with confidence.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/3.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Track your Driver</h4>
                        <p>A specially trained team is available 24/7. Reach them in the app, day or night, with any questions or safety concerns.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/icon/4.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Arrive safely</h4>
                        <p>A specially trained team is available 24/7. Reach them in the app, day or night, with any questions or safety concerns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-area bg-2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">About us</h2>
                    <div class="about-us-text">
                        <h4>Trusted Car Pool Services in All World</h4>
                        <p>With the Driver app, you’re in control. The app for drivers was designed with features that empower you to decide how, where, and when you earn.</p>
                        <p>Get where you’re going easily and reliably with the tap of a button. Choose the ride option that best suits your needs..</p>
                        <a href="#" class="button button-dark tiny">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="download-section section-padding p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section-title text-center">Download My Ride</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <div class="download-qrcode">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/qrapp1.png" alt="">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="download-text">
                        <h2>Download the My Ride mobile application</h2>
                        <p>We want you to move freely, make the most of your time, and be connected to the people and places that matter most to you. That’s why we are committed to safety, from the creation of new standards to the development of technology with the aim of reducing incidents.</p>
                    </div>
                    <div class="download-buttons">
                        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/download-1.png" alt=""></a>
                        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/download-2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    