<?php
    include("includes/head.php");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<section class="index">
    <div class="container-fluid">
        <div class="row">
            <div class="main-section-container w-100">
                <div class="left-bar">
                    <a href="index.php" class="logo">
                        <img src="img/logo.svg" alt="">
                    </a>
                    <div class="middle-nav-links">
                        <a href="#"><img src="img/home.svg" alt=""></a>
                        <a href="#"><img src="img/graduation.svg" alt=""></a>
                        <a href="#"><img src="img/people.svg" alt=""></a>
                        <a href="#"><img src="img/letter.svg" alt=""></a>
                        <a href="#"><img src="img/setting.svg" alt=""></a>
                    </div>
                    <a href="#" class="logout">
                        <img src="img/logout.svg" alt="">
                    </a>
                </div>
                <div class="right-section">
                    <a href="#" class="logo-mobile">
                        <img src="img/logo-mobile.svg" alt="">
                    </a>
                    <div class="right-left-box">
                        <div class="welcome-page">
                            <div class="left-content">
                                <p class="title">Hello Kamran!</p>
                                <p class="content">It’s good to see you again.</p>
                            </div>
                            <img src="img/welcome.png" alt="">
                        </div>
                        <div class="introduction">
                            <div class="intro-box">
                                <div class="comp-box">
                                    <img src="img/comp.svg" alt="">
                                </div>
                                <div class="intro-info">
                                    <p class="title">Introduction to Frontend</p>
                                    <p class="author">by Allahverdi Aliyev</p>
                                </div>
                                <div class="intro-right">
                                    <div class="content-box">
                                        <p>83%</p>
                                    </div>
                                    <button class="continue">
                                        Continue
                                    </button>
                                </div>
                            </div>
                            <div class="intro_buttons">
                                <button class='button-arrow'><img src="img/arrow.svg" alt=""></button>
                                <button class='button-arrow right-arrow'><img src="img/arrow.svg" alt=""></button>
                            </div>
                        </div>
                        <div class="courses-main">
                            <p class="title-course">
                                Courses
                            </p>
                            <div class="courses-box">
                                <ul  class="nav nav-pills">
                                    <li><a href="#" data-tab='0'  class="active" data-toggle="tab">All Courses</a></li>
                                    <li><a href="#" data-tab='1'  data-toggle="tab">For Beginners</a></li>
                                    <li><a href="#" data-tab='2'  data-toggle="tab">Experienced</a></li>
                                    <li><a href="#" data-tab='3'  data-toggle="tab">Advanced</a></li>
                                </ul>
                                <ul class="courses">
                                    <li data-id="1">
                                        <div class="course-left">
                                            <div class="course-img">
                                                <img src="img/img1.svg" alt="">
                                            </div>
                                            <div class="course-name">
                                                <p class="title">Learn  Marketing</p>
                                                <p class="author">by Ali Qafarov</p>
                                            </div>
                                        </div>
                                        <div class="course-center">
                                            <div class="time same-block">
                                                <img src="img/time.svg" alt="">
                                                <p>6h 30min</p>
                                            </div>
                                            <div class="rate same-block">
                                                <img src="img/rate.svg" alt="">
                                                <p >4,9</p>
                                            </div>
                                        </div>
                                        <button>
                                            View course
                                        </button>
                                    </li>
                                    <li data-id="2">
                                        <div class="course-left">
                                            <div class="course-img">
                                                <img src="img/img2.svg" alt="">
                                            </div>
                                            <div class="course-name">
                                                <p class="title">Learn  Marketing</p>
                                                <p class="author">by Farid Qafarov</p>
                                            </div>
                                        </div>
                                        <div class="course-center">
                                            <div class="time same-block">
                                                <img src="img/time.svg" alt="">
                                                <p>6h 30min</p>
                                            </div>
                                            <div class="time same-block">
                                                <img src="img/rate.svg" alt="">
                                                <p >4,9</p>
                                            </div>
                                        </div>
                                        <button>
                                            View course
                                        </button>
                                    </li>
                                    <li data-id="3">
                                        <div class="course-left">
                                            <div class="course-img">
                                                <img src="img/img3.svg" alt="">
                                            </div>
                                            <div class="course-name">
                                                <p class="title">Learn  Marketing</p>
                                                <p class="author">by Tural Qafarov</p>
                                            </div>
                                        </div>
                                        <div class="course-center">
                                            <div class="time same-block">
                                                <img src="img/time.svg" alt="">
                                                <p>5h 30min</p>
                                            </div>
                                            <div class="time same-block">
                                                <img src="img/rate.svg" alt="">
                                                <p >5.6</p>
                                            </div>
                                        </div>
                                        <button>
                                            View course
                                        </button>
                                    </li>
                                    <li data-id="4">
                                        <div class="course-left">
                                            <div class="course-img">
                                                <img src="img/img4.svg" alt="">
                                            </div>
                                            <div class="course-name">
                                                <p class="title">Learn  Marketing</p>
                                                <p class="author">by Hasan Qafarov</p>
                                            </div>
                                        </div>
                                        <div class="course-center">
                                            <div class="time same-block">
                                                <img src="img/time.svg" alt="">
                                                <p>2h 30min</p>
                                            </div>
                                            <div class="time same-block">
                                                <img src="img/rate.svg" alt="">
                                                <p >2,9</p>
                                            </div>
                                        </div>
                                        <button>
                                            View course
                                        </button>
                                    </li>
                                    <li data-id="5">
                                        <div class="course-left">
                                            <div class="course-img">
                                                <img src="img/img5.svg" alt="">
                                            </div>
                                            <div class="course-name">
                                                <p class="title">Photoshop - Essence</p>
                                                <p class="author">by Farid Aliyev</p>
                                            </div>
                                        </div>
                                        <div class="course-center">
                                            <div class="time same-block">
                                                <img src="img/time.svg" alt="">
                                                <p>5h 35min</p>
                                            </div>
                                            <div class="time same-block">
                                                <img src="img/rate.svg" alt="">
                                                <p >3,9</p>
                                            </div>
                                        </div>
                                        <button>
                                            View course
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right-form-chart">
                        <div class="right-header">
                            <form action="">
                                <button class="search"><img src="img/search.svg" alt=""></button>
                                <input type="text">
                            </form>
                            <div class="right-header-avatar">
                                <button class="notification">
                                    <img src="img/notification.svg" alt="">
                                    <span>2</span>
                                </button>
                                <div class="avatar">
                                    <img src="img/avatar.svg" avatar alt="">
                                    <button><img src="img/down.svg" alt=""></button>
                                </div>
                            </div>
                        </div>
                        <div class="right-2-step-info">
                            <div>
                                <p class="num">11</p>
                                <p class="name">Courses completed</p>
                            </div>
                            <div>
                                <p class="num">4</p>
                                <p class="name">Courses in progress</p>
                            </div>
                        </div>
                        <div class="statistics">
                            <p class="stats">
                                Your statistics
                            </p>
                            <button class="mobile-chart-open">See statistics</button>
                            <canvas id="line-chart"></canvas>
                        </div>
                        <div class="notification-info">
                            <button class="close">
                                <img src="img/close.svg" alt="">
                            </button>
                            <div class="step-info">
                                <img src="img/not.svg" alt="" class="not">
                                <div class="right-not">
                                    <div class="not-header">
                                        <p class="title">Frontend Course</p>
                                        <p class="time">• <span>now</span></p>
                                    </div>
                                    <p class="not-content">Finish your course !</p>
                                </div>
                            </div>
                            <div class="step-info">
                                <img src="img/not.svg" alt="" class="not">
                                <div class="right-not">
                                    <div class="not-header">
                                        <p class="title">Learn Marketing</p>
                                        <p class="time">• <span>5 min ago</span></p>
                                    </div>
                                    <p class="not-content">Finish your course !</p>
                                </div>
                            </div>
                            <div class="step-info">
                                <img src="img/not.svg" alt="" class="not">
                                <div class="right-not">
                                    <div class="not-header">
                                        <p class="title">Photoshop BASICS</p>
                                        <p class="time">• <span>10 min ago</span></p>
                                    </div>
                                    <p class="not-content">Course is updated !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include("includes/script.php");
?>
