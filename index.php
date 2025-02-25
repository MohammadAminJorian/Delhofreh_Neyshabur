<?php
date_default_timezone_set('Asia/Tehran');  // تنظیم تایم‌زون به تهران

function getDateTime() {
    // تاریخ و ساعت شمسی را با استفاده از Moment.js در جاوا اسکریپت می‌توان گرفت.
    // ولی برای کد PHP، به همین شکل تاریخ میلادی نمایش داده می‌شود.
    return [
        "time" => date("H:i:s"),
        "date" => date("Y-m-d")
    ];
}

$dateTime = getDateTime();
?>

<style>
    /* fonts */ 
    @font-face {
  font-family: Samim;
  src: url('static/fonts/Samim.eot');
  src: url('static/fonts/Samim.eot?#iefix') format('embedded-opentype'),
       url('static/fonts/Samim.woff') format('woff'),
       url('static/fonts/Samim.ttf') format('truetype');
  font-weight: normal;
}

@font-face {
  font-family: Samim;
  src: url('static/fonts/Samim-Bold.eot');
  src: url('static/fonts/Samim-Bold.eot?#iefix') format('embedded-opentype'),
       url('static/fonts/Samim-Bold.woff') format('woff'),
       url('static/fonts/Samim-Bold.ttf') format('truetype');
  font-weight: bold;
}
/* End fonts */

</style>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* استایل برای نمایش ویدیو تمام صفحه */
        #video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }

        body.no-scroll {
            overflow: hidden;
            height: 100vh;
        }
    </style>
</head>
<body class="no-scroll">

    <!-- کانتینر ویدیو -->
    <div id="video-container">
        <video autoplay muted>
            <source src="static/image/video.mp4" type="video/mp4">
            مرورگر شما از ویدیو پشتیبانی نمی‌کند.
        </video>
    </div>


    <script>
        if (!localStorage.getItem("videoaasiiDisplayed1")) {
            document.querySelector("#video-container video").addEventListener("ended", function() {
                document.getElementById("video-container").style.display = "none";
                document.body.classList.remove("no-scroll"); 
                localStorage.setItem("videoaiiDisplayed1", "true");
            });
        } else {
            document.getElementById("video-container").style.display = "none";
            document.body.classList.remove("no-scroll"); 
        }
    </script>

</body>
</html>


<script>
  tailwind.config = {
    prefix: 'tw-',
    corePlugins: {
      preflight: false 
    }
  }
</script>
<script src="https://cdn.tailwindcss.com"></script>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db_i_connection.php';

// بازیابی اطلاعات از پایگاه داده
$infoQuery = $conn->query("SELECT * FROM company_info WHERE id = 1");
$info = $infoQuery->fetch_assoc();

if (!$info) {
    $error_message = "اطلاعات شرکت موجود نیست.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شرکت دلحفره</title>
    <link rel="stylesheet" href="static/style/home_style.css">
    <style>

        body.lock-scroll {
            overflow: hidden;
            padding-right: 15px;
        }
    </style>
</head>
<body>


<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            overflow-x: hidden; /* جلوگیری از بیرون رفتن محتوا از عرض */
        }

        header {
            background-color: #2c2541;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px; /* افزایش ارتفاع کادر */
            position: relative;
            box-sizing: border-box; /* جلوگیری از مشکلات اندازه گیری */
            width: 100%; /* اطمینان از اینکه هدر به عرض صفحه تعلق دارد */
        }

        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        .logo img {
            height: 170px;
            margin-bottom: -40px; /* نزدیک‌تر کردن هدر به عکس */
        }

        .logo span {
            font-size: 18px;
            font-weight: bold;
            color: #f4c526;
        }

        nav {
            display: flex;
            align-items: center;
            flex: 1;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: nowrap; /* جلوگیری از شکست خط */
        }

        nav ul.left {
            display: flex;
            flex: 1;
            justify-content: flex-start;
            margin-left: 480px; /* تنظیم فاصله 50 پیکسل از عکس */
        }

        nav ul.right {
            display: flex;
            flex: 1;
            justify-content: flex-end;
            margin-right: 450px; /* تنظیم فاصله 50 پیکسل از عکس */
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            position: relative;
            transition: all 0.3s ease;
        }

        nav ul li a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            font-weight: bold;
            height: 2px;
            background-color: #f4c526;
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
            transform: scaleX(0);
            transform-origin: left;
        }

        nav ul li a:hover::after, nav ul li a.active::after {
            opacity: 1;
            transform: scaleX(1);
        }
        @media screen and (max-width: 2080px) {
            header {
                padding: 40px;
            }

            .logo img {
                height: 140px;
                margin-bottom: -30px;
            }

            nav ul.left {
                margin-left: 520px; /* کاهش فاصله برای تبلت */
        

            nav ul.right {
                margin-right: 580px; /* کاهش فاصله برای تبلت */
            }

            nav ul li {
                margin: 0 10px;
            }

            nav ul li a {
                font-size: 16px; /* کاهش اندازه فونت برای تبلت */
            }
        }
    }
          /* Media queries برای ریسپانسیو کردن */
          @media screen and (max-width: 1780px) {
            header {
                padding: 40px;
            }

            .logo img {
                height: 140px;
                margin-bottom: -30px;
            }

            nav ul.left {
                margin-left: 380px; /* کاهش فاصله برای تبلت */
            }

            nav ul.right {
                margin-right: 380px; /* کاهش فاصله برای تبلت */
            }

            nav ul li {
                margin: 0 10px;
            }

            nav ul li a {
                font-size: 16px; /* کاهش اندازه فونت برای تبلت */
            }
        }
        @media screen and (max-width: 1580px) {
            header {
                padding: 40px;
            }

            .logo img {
                height: 140px;
                margin-bottom: -30px;
            }

            nav ul.left {
                margin-left: 300px; /* کاهش فاصله برای تبلت */
            }

            nav ul.right {
                margin-right: 300px; /* کاهش فاصله برای تبلت */
            }

            nav ul li {
                margin: 0 10px;
            }

            nav ul li a {
                font-size: 16px; /* کاهش اندازه فونت برای تبلت */
            }
        }
        

        @media screen and (max-width: 1280px) {
            header {
                padding: 40px;
            }

            .logo img {
                height: 140px;
                margin-bottom: -30px;
            }

            nav ul.left {
                margin-left: 250px; /* کاهش فاصله برای تبلت */
            }

            nav ul.right {
                margin-right: 250px; /* کاهش فاصله برای تبلت */
            }

            nav ul li {
                margin: 0 10px;
            }

            nav ul li a {
                font-size: 16px; /* کاهش اندازه فونت برای تبلت */
            }
        }
        @media screen and (max-width: 1155px) {
            header {
                padding: 40px;
            }

            .logo img {
                height: 140px;
                margin-bottom: -30px;
            }

            nav ul.left {
                margin-left: 200px; /* کاهش فاصله برای تبلت */
            }

            nav ul.right {
                margin-right: 200px; /* کاهش فاصله برای تبلت */
            }

            nav ul li {
                margin: 0 10px;
            }

            nav ul li a {
                font-size: 16px; /* کاهش اندازه فونت برای تبلت */
            }
        }
          /* Media queries برای ریسپانسیو کردن */
          @media screen and (max-width: 1024px) {
            header {
                padding: 40px;
            }

            .logo img {
                height: 140px;
                margin-bottom: -30px;
            }

            nav ul.left {
                margin-left: 25px; /* کاهش فاصله برای تبلت */
            }

            nav ul.right {
                margin-right: 25px; /* کاهش فاصله برای تبلت */
            }

            nav ul li {
                margin: 0 10px;
            }

            nav ul li a {
                font-size: 16px; /* کاهش اندازه فونت برای تبلت */
            }
        }

        /* Media queries برای ریسپانسیو کردن */
        @media screen and (max-width: 992px) {
            header {
                padding: 40px;
            }

            .logo img {
                height: 140px;
                margin-bottom: -30px;
            }

            nav ul.left {
                margin-left: 25px; /* کاهش فاصله برای تبلت */
            }

            nav ul.right {
                margin-right: 25px; /* کاهش فاصله برای تبلت */
            }

            nav ul li {
                margin: 0 10px;
            }

            nav ul li a {
                font-size: 16px; /* کاهش اندازه فونت برای تبلت */
            }
        }


        @media screen and (max-width: 768px) {
            header {
                padding: 30px;
            }

            .logo img {
                height: 110px;
                margin-bottom: -20px;
            }

            nav ul.left {
                margin-left: 5px; /* کاهش فاصله برای گوشی */
            }

            nav ul.right {
                margin-right: -10px; /* کاهش فاصله برای گوشی */
            }

            nav ul li {
                margin: 0 5px;
            }

            nav ul li a {
                font-size: 13px; /* کاهش اندازه فونت برای گوشی */
            }
        }
        @media screen and (max-width: 490px) {
            header {
                padding: 30px;
            }

            .logo img {
                height: 90px;
                margin-bottom: -20px;
            }

            nav ul.left {
                margin-left: -10px; /* کاهش فاصله برای گوشی */
            }

            nav ul.right {
                margin-right: -31px; /* کاهش فاصله برای گوشی */
            }

            nav ul li {
                margin: 0 5px;
            }

            nav ul li a {
                font-size: 12px; /* کاهش اندازه فونت برای گوشی */
            }
        }
        @media screen and (max-width: 430px) {
            header {
                padding: 30px;
            }

            .logo img {
                height: 90px;
                margin-bottom: -20px;
            }

            nav ul.left {
                margin-left: 0px; /* کاهش فاصله برای گوشی */
            }

            nav ul.right {
                margin-right: -21px; /* کاهش فاصله برای گوشی */
            }

            nav ul li {
                margin: 0 5px;
            }

            nav ul li a {
                font-size: 12px; /* کاهش اندازه فونت برای گوشی */
            }
        }
        @media screen and (max-width: 390px) {
            header {
                padding: 25px;
            }

            .logo img {
                height: 90px;
                margin-bottom: -20px;
            }

            nav ul.left {
                margin-left: -12px; /* کاهش فاصله برای گوشی */
            }

            nav ul.right {
                margin-right: -31px; /* کاهش فاصله برای گوشی */
            }

            nav ul li {
                margin: 0 5px;
            }

            nav ul li a {
                font-size: 11.5px; /* کاهش اندازه فونت برای گوشی */
            }
        }
        @media screen and (max-width: 350px) {
            header {
                padding: 23px;
            }

            .logo img {
                height: 90px;
                margin-bottom: -20px;
            }

            nav ul.left {
                margin-left: -20px; /* کاهش فاصله برای گوشی */
            }

            nav ul.right {
                margin-right: -39px; /* کاهش فاصله برای گوشی */
            }

            nav ul li {
                margin: 0 5px;
            }

            nav ul li a {
                font-size: 11.5px; /* کاهش اندازه فونت برای گوشی */
            }
        }

    </style>
</head>



<body>

<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .date-time {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            font-size: 18px; /* اندازه فونت بزرگتر */
            z-index: 1000;
            font-family: 'Arial', sans-serif;
            display: flex; /* استفاده از flex برای نمایش در یک سطر */
            gap: 10px; /* فاصله کم بین تاریخ و زمان */
        }

        @media (max-width: 470px) {
            .date-time {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            margin-top:-20px;
            margin-left:-10px;
            font-size: 14px; /* اندازه فونت بزرگتر */
            z-index: 1000;
            font-family: 'Arial', sans-serif;
            display: flex; /* استفاده از flex برای نمایش در یک سطر */
            gap: 10px; /* فاصله کم بین تاریخ و زمان */
        }
}
@media (max-width: 1280px) {
            .date-time {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            margin-top:-20px;
            margin-left:-10px;
            font-size: 14px; /* اندازه فونت بزرگتر */
            z-index: 1000;
            font-family: 'Arial', sans-serif;
            display: flex; /* استفاده از flex برای نمایش در یک سطر */
            gap: 10px; /* فاصله کم بین تاریخ و زمان */
        }
}
@media (max-width: 1024px) {
            .date-time {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            margin-top:-20px;
            margin-left:-10px;
            font-size: 14px; /* اندازه فونت بزرگتر */
            z-index: 1000;
            font-family: 'Arial', sans-serif;
            display: flex; /* استفاده از flex برای نمایش در یک سطر */
            gap: 10px; /* فاصله کم بین تاریخ و زمان */
        }
}
@media (max-width: 992px) {
            .date-time {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            margin-top:-20px;
            margin-left:-10px;
            font-size: 14px; /* اندازه فونت بزرگتر */
            z-index: 1000;
            font-family: 'Arial', sans-serif;
            display: flex; /* استفاده از flex برای نمایش در یک سطر */
            gap: 10px; /* فاصله کم بین تاریخ و زمان */
        }
}
@media (max-width: 768px) {
            .date-time {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            margin-top:-20px;
            margin-left:-10px;
            font-size: 14px; /* اندازه فونت بزرگتر */
            z-index: 1000;
            font-family: 'Arial', sans-serif;
            display: flex; /* استفاده از flex برای نمایش در یک سطر */
            gap: 10px; /* فاصله کم بین تاریخ و زمان */
        }
}

@media (max-width: 390px) {
            .date-time {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            margin-top:-20px;
            margin-left:-10px;
            font-size: 12px; /* اندازه فونت بزرگتر */
            z-index: 1000;
            font-family: 'Arial', sans-serif;
            display: flex; /* استفاده از flex برای نمایش در یک سطر */
            gap: 10px; /* فاصله کم بین تاریخ و زمان */
        }
}
@media (max-width: 350px) {
            .date-time {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            margin-top:-20px;
            margin-left:-10px;
            font-size: 12px; /* اندازه فونت بزرگتر */
            z-index: 1000;
            font-family: 'Arial', sans-serif;
            display: flex; /* استفاده از flex برای نمایش در یک سطر */
            gap: 10px; /* فاصله کم بین تاریخ و زمان */
        }
}

    </style>
</head>
<body>
    <div class="date-time" id="date-time">
        <div id="time"></div>
        <div id="date"></div>
    </div>

    <script>
        function updateDateTime(lang) {
            const dateTime = new Date();
            const timeElement = document.getElementById('time');
            const dateElement = document.getElementById('date');

                // برای زبان فارسی، تاریخ و زمان شمسی را نمایش می‌دهیم
                timeElement.innerText = dateTime.toLocaleTimeString('fa-IR');
                dateElement.innerText = dateTime.toLocaleDateString('fa-IR');

        }

        document.addEventListener('DOMContentLoaded', () => {
            const lang = 'fa';  // به زبان فارسی تنظیم می‌شود
            updateDateTime(lang);
            setInterval(() => {
                updateDateTime(lang);
            }, 1000); // بروزرسانی هر ثانیه
        });
    </script>
</body>
</html>




    <header>
        
        <nav>
            <ul class="left">
                <li><a href="service.php">زمینه فعالیت</a></li>
                <li><a href="portfolio.php">پروژه ها</a></li>
            </ul>
        </nav>
        <div class="logo">
            <img src="static/image/logo.jpg" alt="Logo">
            <span></span>
        </div>
        <nav>
            <ul class="right">
                <li><a href="contact.php">ارتباط با ما</a></li>
                <li><a href="about.php">درباره ما</a></li>
                <li><a href="index.php" class="active">خانه</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>





<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اسلایدر بهبود یافته</title>
</head>
<body>
    <div class="yellow-bar"></div>
    <div class="slider">
        <div class="slide active" style="background-image: url('static/image/home/slider/3.jpg');">
            <div class="caption">
                <!-- <h1>عنوان شما</h1> -->
                <p>دانشکده علوم پایه، علوم پزشکی و ازمایشگاهی دانشگاه ازاد اسلامی نیشابور </p>
                <!-- <a href="portfolio.php" class="btn">مشاهده نمونه کارها</a> -->
            </div>
        </div>
        <div class="slide" style="background-image: url('static/image/home/slider/new.jpeg');">
            <div class="caption">
                <!-- <h1>عنوان شما</h1> -->
                <p>شرکت راه سازی و ساختمانی دلحفره </p>
                <!-- <a href="portfolio.php" class="btn">مشاهده نمونه کارها</a> -->
            </div>
        </div>

        <div class="slide" style="background-image: url('static/image/home/slider/4.jpg');">
            <div class="caption">
                <!-- <h1>عنوان شما</h1> -->
                <p>پروژه چهار خطه کردن محور نیشابور- فیروزه و تقاطع غیر همسطح فولاد خراسان   </p>
                <!-- <a href="portfolio.php" class="btn">مشاهده نمونه کارها</a> -->
            </div>
        </div>
        <div class="slide" style="background-image: url('static/image/home/slider/5.jpg');">
            <div class="caption">
                <!-- <h1>عنوان شما</h1> -->
                <p>ساختمان اداری تامین اجتماعی نیشابور  </p>
                <!-- <a href="portfolio.php" class="btn">مشاهده نمونه کارها</a> -->
            </div>
        </div>
        <div class="slide" style="background-image: url('static/image/home/slider/6.jpg');">
            <div class="caption">
                <!-- <h1>عنوان شما</h1> -->
                <p>دبیرستان غرویان نیشابور </p>
                <!-- <a href="portfolio.php" class="btn">مشاهده نمونه کارها</a> -->
            </div>
        </div>
        <div class="slide" style="background-image: url('static/image/home/slider/3.1.jpg');">
            <div class="caption">
                <!-- <h1>عنوان شما</h1> -->
                 <p>ساختمان اموزشی دانشگاه ازاد اسلامی نیشابور</p>
                <!-- <a href="portfolio.php" class="btn">مشاهده نمونه کارها</a> -->
            </div>
        </div>
        <div class="slide" style="background-image: url('static/image/home/slider/1.webp');">
            <div class="caption">
                <!-- <h1>عنوان شما</h1> -->
                <p>تکمیل پروژه افلاک نمای نیشابور</p>
                <!-- <a href="#portfolio" class="btn">مشاهده نمونه کارها</a> -->
            </div>
        </div>
        <button class="prev" onclick="prevSlide()">❮</button>
        <button class="next" onclick="nextSlide()">❯</button>
        <div class="indicators">
            <span class="dot active" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>


            </div>
    </div>
    <script src="script.js"></script>
</body>
</html>


    <script>
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
            slide.classList.add('active');
            slide.querySelector('.caption').classList.add('animate');
        } else {
            slide.querySelector('.caption').classList.remove('animate');
        }
    });
    dots.forEach((dot, i) => {
        dot.classList.remove('active');
        if (i === index) {
            dot.classList.add('active');
        }
    });
    currentSlideIndex = index;
}

function nextSlide() {
    currentSlideIndex = (currentSlideIndex + 1) % slides.length;
    showSlide(currentSlideIndex);
}

function prevSlide() {
    currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
    showSlide(currentSlideIndex);
}

function currentSlide(index) {
    showSlide(index);
}

setInterval(nextSlide, 5000); 

    </script>

    <div class="services-header section">
    <h1>شرکت راهسازی و ساختمانی دلحفره </h1>
<br>
        <h1>زمینه فعالیت </h1>
        <p> بیش از چهل سال سابقه سازندگی و آبادانی</p>
    </div>
    <div class="service-container ">


    <div class="service">
            <div class="service-icon">
                <img src="static/image/123.png" alt="Construction Icon">
            </div>
            <div class="service-title">تجهیزات و امکانات</div>
            <div class="service-description">
            همچنین در کنار تجهیزات مذکور شرکت اقدام به بهره برداری از یک واحد تولید بتن اماده نموده است. این واحد قادر به تولید مصالح اولیه استاندارد جهت تولید اسفالت و انواع قطعات بتنی شامل طیف متنوعی از باکس ها، نیوجرسی بتنی با اشکال مختلف و قطعات متنوع دیگر میباشد.
شایان ذکر است کارخانه اسفالت این شرکت بزرگترین کارخانه اسفالت در شرق کشور می باشد
.
           </div>
        </div>
        
        <div class="service">
            <div class="service-icon">
                <img src="static/image/company.png" alt="Roofing Icon">
            </div>
            <div class="service-title">کارخانه و تولید
            </div>
            <div class="service-description">
            بر همین اساس این شرکت در سال 1393 اقدام به بهره برداری از واحد کارخانه اسفالت مارینی با ظرفیت تولید 240 تن اسفالت در ساعت در شهرستان فیروزه نموده است.
            .لازم به ذکر است در این کارخانه از یک واحد سنگ شکن مجهز و مدرن و استاندارد،  ماشین الات اسفالت تراش و ازمایشگاه های مجهز مکانیک خاک و اسفالت مجزا استفاده میکند   
        
        </div>
        </div>




        <div class="service">
            <div class="service-icon">
                <img src="static/image/1234.png" alt="Remodeling Icon">
            </div>
            <div class="service-title">ساختار مدیریتی و توسعه</div>
            <div class="service-description">
            ساختار مدیریتی این مجموعه همواره در تلاش بوده است که به صورت پویا و نظام مند در توسعه و تعالی زیر ساخت های عمرانی کشور ایفای نقش نماید و با اتکا به دانش و تجربه نیروی انسانی و با بهره گیری از علم روز مهندسین مجرب خود در راستای تحقق اهدافی چون ساخت و اجرای پروژه های ساختمانی پیشرفته، اجرای بناهای فلزی و بتنی، اجرای سازه های ساختمانی، معماری و محوطه سازی و همچنین احداث جاده ها، تقاطع های غیر همسطح، پل ها واحداث و توسعه انواع راههای استاندارد و ایمن با رویکردی نوین گام بردارد            </div>
        </div>
    </div>
    
<?php
    include 'db_b_connection.php';

$sql = "SELECT * FROM projects ORDER BY created_at DESC LIMIT 3";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?>
<div class="background section">
    <div class="title-one">پروژه ها</div>
    <div class="subtitle">بخشی از پروژه های انجام شده توسط شرکت دلحفره</div>
    <div class="images">
        <?php
        include 'db_b_connection.php';

        $sql = "SELECT * FROM projects ORDER BY created_at DESC LIMIT 3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $projectId = $row['id'];
                $category = htmlspecialchars($row['category']);
                $imagePath = "../" . htmlspecialchars($row['image_path']);
                $title = htmlspecialchars($row['title']);

                echo "<div class='image-container'>
                        <a href='project_details.php?id=$projectId'>
                            <img src='$imagePath' alt='$title'>
                            <div class='overlay'>
                                <div class='overlay-title'>$title</div>
                                <div class='overlay-text'>مشاهده پروژه >></div>
                            </div>
                        </a>
                      </div>";
            }
        } else {
            echo "<p>هیچ پروژه‌ای در دسترس نیست.</p>";
        }
        $conn->close();
        ?>
    </div>
    <a href="portfolio.php" class="button">
     همه پروژه‌ها
        <span class="button-icon">🠚</span>
    </a>
</div>

<?php
$stmt->close();
?>

<br>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
    
</style>
<div class="section bg-[url('static/image/home/slider/2.jpg')] bg-cover bg-center bg-no-repeat p-12 rounded-lg mt-20  md:h-[700px] sm:h-[300px] xs:h-[200px] opacity-90
      md:p-10 
     sm:p-6 
     xs:p-4">
    <div class="newjj">
        <div class="image-containerjj">
            <img src="static/image/home/1.jpg" alt="Testimonial Image">
            <div class="testimonial-titleejj">مدیر عامل</div>
            <div class="hover-boxjj">
            :( موسس و بنیان گذار– حاج محمد تقی پور ) مدیر عامل
            <br>
            حفظ کیفیت محصولات ، ارائه خدمات مطلوب ، صیانت از محیط زیست و تکریم مشتریان نشانه ی تعهد واحد های تولیدی این مجموعه، به مصرف کنندگان و مشتریان است. با تلاش فراوان در طی سالیان متمادی پایه های حرکت خود را بنا نهاده و با برنامه ریزی و بروز نمودن تجهیزات و ماشین آلات و همچنین احترام به درخواست های کارفرمایان و مشتریان وفادار خود توانسته ایم جایگاه خود را تثبیت نمایم و امروز در بین عموم از نامی شایسته برخوردار باشیم..
            <br>
            <a href="CEO.php"><button class="read-more-btn">بیشتر بخونید</button></a>
            </div>
        </div>
        <div class="image-containerjj">
            <img src="static/image/home/2.jpg" alt="Testimonial Image">
            <div class="testimonial-titleejjj">رئیس هیئت مدیره</div>
            <div class="hover-boxjj">
            
            :رئیس هیئت مدیره
<br>
            شرکت دل حفره در حال حاظر با اشتغال بیش از 100 نفر نیروی مجرب و متخصص به صورت مستقیم به عنوان یک شرکت خصوصی در زمینه تولید و خدمات مهندسی در یک تراز پیشرو و دانش بنیان مشغول به فعالیت می باشد . روند حرکتی آن بر مبنای یک رویکرد مدیریتی صحیح به نحوی بنا نهاده شده که کلیه فرایند ها با هم افزایی دانش و تجربه بر اساس یک تفکر سیستماتیک ، یکسان و هماهنگ پیگیری شوند.         
            <br><a href="Chairman_of_the_Board_of_Directors.php"><button class="read-more-btn">بیشتر بخونید</button></a>
            <div class="extra-info">بدیهی است تلاش و سرمایه گذای در این عرضه گسترده با مشکلات و چالش های بسیاری همراه بوده است اما با هدف کارآفرینی بطور مستقیم و غیر مستقیم و خدمت رسانی به مردم دو عامل مهم و اصلی بوده که فراتر از انگیزه های اقتصادی مدنظر واقع شده است. در پایان با این جمله که “ کیفیت رمز ماندگاریست “همه شما را به خدا می سپاریم و همواره منتظر دیدار شما خوبان هستیم.</div>
            </div>
        </div>
    </div>
</div>

<script>// پیدا کردن تمام دکمه‌های "Read More"
const readMoreButtons = document.querySelectorAll('.read-more-btn');

// اضافه کردن رویداد کلیک به دکمه‌ها
readMoreButtons.forEach(button => {
    button.addEventListener('click', function() {
        const extraInfo = this.nextElementSibling; // پیدا کردن بخش توضیحات اضافی
        const button = this; // خود دکمه

        // نمایش توضیحات اضافی
        extraInfo.style.display = 'block';

        // حذف دکمه "Read More"
        button.style.display = 'none';
    });
});
</script>


</body>
</html>





<br><br>
<div>

<div class="tw-  section">

        <?php if (isset($error_messagee)) { echo "<p class='error-j'>$error_messagee</p>"; } ?>

        <?php if (isset($info)): ?>
            <div class="text-gray-900 pt-16 pb-24 px-6 w-full bg-gray-50">
  <div class="max-w-7xl mx-auto text-center">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
      <!-- User Count -->
      <div class="flex flex-col items-center p-8 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div
          class="mb-6 flex items-center justify-center w-28 h-28 rounded-full bg-gradient-to-r from-yellow-400 to-orange-300 p-1">
          <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
  <img src="static/image/worker.png" alt="" class="w-[70px] h-[70px]">
</div>

        </div>
        <div class="flex items-center">
    <div class="text-3xl font-extrabold text-gray-800">+</div>
    <div class="text-3xl font-extrabold text-gray-800" id="employees_count"><?= $info['employees_count'] ?></div>
</div>
        <div class="text-gray-500">تعداد کارکنان</div>
      </div>
      <!-- Service Years Count -->
      <div class="flex flex-col items-center p-8 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div
          class="mb-6 flex items-center justify-center w-28 h-28 rounded-full bg-gradient-to-r from-yellow-400 to-orange-300 p-1">
          <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
          <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
  <img src="static/image/exp.png" alt="" class="w-[70px] h-[70px]">
</div>
          </div>
        </div>
        <div class="flex items-center">
    <div class="text-3xl font-extrabold text-gray-800">+</div>
    <div class="text-3xl font-extrabold text-gray-800" id="service_years"><?= $info['service_years'] ?></div>
</div>
        <div class="text-gray-500">سال تجربه</div>
      </div>
      <!-- Completed Projects -->
      <div class="flex flex-col items-center p-8 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <div
          class="mb-6 flex items-center justify-center w-28 h-28 rounded-full bg-gradient-to-r from-yellow-400 to-orange-300 p-1">
          <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
  <img src="static/image/project.png" alt="" class="w-[70px] h-[70px]">
</div>

        </div>
        <div class="flex items-center">
    <div class="text-3xl font-extrabold text-gray-800">+</div>
    <div class="text-3xl font-extrabold text-gray-800" id="completed_projects"><?= $info['completed_projects'] ?></div>
</div>
        <div class="text-gray-500">تعداد پروژه‌های تکمیل‌شده</div>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>
        </div>
</div> 



<script>
    function animateNumber(id, endValue, duration) {
        let startValue = 0;
        let stepTime = Math.abs(Math.floor(duration / endValue));
        let el = document.getElementById(id);

        let interval = setInterval(function() {
            startValue += 1;
            el.innerText = startValue;

            if (startValue === endValue) {
                clearInterval(interval);
            }
        }, stepTime);
    }

    // Apply animation on each number with faster speed (reduce the duration)
    animateNumber("employees_count", <?= $info['employees_count'] ?>, 1000); // For employees count (1 second)
    animateNumber("service_years", <?= $info['service_years'] ?>, 1500);   // For service years (1.5 seconds)
    animateNumber("completed_projects", <?= $info['completed_projects'] ?>, 2000);  // For completed projects (2 seconds)
</script>

</body>
</html>
     



<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <style>
.testimonialssh {
    width: 100%;
    background: #fff;
    padding: 20px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
    margin: auto;
}
.titlesh {
    font-size: 24px;
    font-weight: bold;
    position: relative;
    display: inline-block;
    text-align: right; /* Align title text to right */
}
.underlinesh {
    width: 50px;
    height: 3px;
    background: #f4a261;
    margin: 10px auto;
}
.slidersh {
    position: relative;
    overflow: hidden;
    width: 100%;
}
.slidessh {
    display: flex;
    transition: transform 0.5s ease-in-out;
}
.slidesh {
    min-width: 100%;
    box-sizing: border-box;
    padding: 20px;
    text-align: right;
}
.testimonial-textsh {
    font-style: italic;
    color: #555;
    white-space: normal;
    text-align: right; /* Align testimonial text to right */
}
.testimonial-footersh {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    margin-top: 15px;
}
.testimonial-imgsh {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid #f4a261;
}
.namesh {
    font-weight: bold;
    text-align: right; /* Align name text to right */
}
.companysh {
    font-size: 14px;
    color: #888;
    text-align: right; /* Align company text to right */
}
.starssh {
    color: #f4a261;
    text-align: right; /* Align stars to right */
}
.prevsh, .nextsh {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #f4a261;
    border: none;
    padding: 15px;
    cursor: pointer;
    font-size: 18px;
    color: #fff;
    border-radius: 0;
}
.prevsh { left: 10px; margin-top: 50px; }
.nextsh { right: 10px; margin-top: 50px; }
.prevsh:hover, .nextsh:hover {
    background: #e89e3f;
}
.more-info-btn {
    padding: 10px 20px;
    background-color: #f4a261;
    color: white;
    font-weight: bold;
    border-radius: 4px;
    text-decoration: none;
    margin-top: 20px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    width: fit-content;
}
.more-info-btn:hover {
    background-color: #e89e3f;
}
ul.testimonial-textsh {
    list-style-position: inside;
    padding-right: 0; /* Ensure no extra padding on the right */
}
ul.testimonial-textsh li {
    text-align: right; /* Align list items to the right */
    direction: rtl; /* Ensure numbers are on the right side */
}



        /* Media queries برای ریسپانسیو کردن */
        @media screen and (max-width: 768px) {
            .testimonialssh {
                padding: 10px;
            }
            .titlesh {
                font-size: 20px;
            }
            .testimonial-footersh {
                flex-direction: row;
                align-items: center;
            }
            .testimonial-imgsh {
                width: 40px;
                height: 40px;
            }
            .testimonial-textsh {
                font-size: 14px;
            }
            .namesh {
                font-size: 16px;
            }
            .companysh {
                font-size: 12px;
            }
            .prevsh, .nextsh {
                padding: 10px;
                font-size: 14px;
            }
            .more-info-btn {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<section class="testimonialssh">
    <h2 class="titlesh">شرکت های تابعه</h2>
    <div class="underlinesh"></div>
    <div class="slidersh">
        <div class="slidessh">
            <div class="slidesh">
            <p class="testimonial-textsh"><em>از دیگر شرکتهای تاسیس شده به لحاظ نیاز منطقه به مصالح احداث واحد صنعتی با نام ثبتی فولاد بتن فیروزه می باشد که در زمینی به مساحت 12000 متر مربع و با جدیدترین و بروز ترین دستگاه های روز تولیدات ذیل را انجام می دهد :</em></p>
<ul class="testimonial-textsh">
    <li><em>1 - محصولات بتنی غیر مسطح از بتن معمولی با ظرفیت سالانه 66000 تن .</em></li>
    <li><em>2 - محصولات بتنی مسلح پیش ساخته با ظرفیت سالانه 70000 تن .</em></li>
    <li><em>3 - محصولات بتنی مسلح پیش تنیده با ظرفیت سالانه 60000 تن .</em></li>
    <li><em>4 - محصولات بتنی غیر مسلح از بتن سبک و پوکه صنعتی با ظرفیت سالانه 44000 تن .</em></li>
</ul>

                <div class="testimonial-footersh">
                    <div class="starssh">⭐⭐⭐⭐⭐</div>
                    <div>
                        <h4 class="namesh">فولاد بتن</h4>
                        <p class="companysh">شرکت مهندسی</p>
                    </div>
                    <img src="static/image/fooladbeton/1.jpg" alt="User 1" class="testimonial-imgsh">
                </div>
                <a href="fooladbeton.php" class="more-info-btn">بیشتر بدانید</a>
            </div>
            <div class="slidesh">
            <p class="testimonial-textsh"><em>ساختار مدیریتی این مجموعه همواره در تلاش بوده است که به صورت پویا و نظام مند ، در توسعه و تعالی زیر ساختهای عمرانی کشور ایفای نقش نماید و با اتکا به دانش و تجربه نیروی انسانی و با بهره گیری از علم روز و مهندسین مجرب خود در راستای تحقق اهدافی چون توسعه احداث انواع راههای استاندارد و ایمن با رویکرد نوین گام بردارد و بر همین اساس در سال 1393 اقدام به تاسیس شرکت دل حفره نیشابور در شهرستان فیروزه نموده است. 
            </em></p>
<br><br><br></br>
                <div class="testimonial-footersh">
                    <div class="starssh">⭐⭐⭐⭐⭐</div>
                    <div>
                        <h4 class="namesh">دلحفره نیشابور</h4>
                        <p class="companysh">شرکت مهندسی</p>
                    </div>
                    <img src="static/image/delhofreh/1.jpg" alt="User 2" class="testimonial-imgsh">
                </div>
                <a href="delhofrehneyshabur.php" class="more-info-btn">بیشتر بدانید</a>
            </div>
            <div class="slidesh">
            <p class="testimonial-textsh"><em>پیشرفت در فن آوری، ارتقا تجهیزات، ادغام داده ها و واقعیت های مجازی فرصت های قابل توجهی در دنیای مهندسی، تامین و صنعت ساخت ایجاد کرده است. انجام ایمن تر، بهتر، سریع تر و هماهنگ تر کارها از دستاوردهای فرآیند توسعه می باشد.ادغام این پیشرفت ها با فرآیندهای واقعی و بهره گیری از تخصص، توان و تعهد این مجموعه موجب شده تا ویژگی هایی نظیر کیفیت و انطباق، نوآوری، توسعه پایدار، بومی سازی و بهره وری در این سازمان بالغ گشته و شرکت مهندسی امید آشیانه با داشتن گرید راهسازی و ساختمانی در سال 1375 به عرصه ظهور برسد.</em></p>
<p class="testimonial-textsh"><em>بخشی از پروژه های شاخص اجرا شده و در دست اجرا راه سازی و ساختمانی شرکت امید آشیانه :</em></p>
<ol class="testimonial-textsh">
    <li><em>احداث مساحداث ضلع شمال بلوار امام رضا ( ع ) شهر فیروزه سال 1396</em></li>
    <li><em>روکش آسفالت محور فیروزه عبدالله گیو به طول 25 کیلومتر 1395</em></li>
    <li><em>اجرا آسفالت مسیرهای شهرداری های : فیروزه ، درود ، خرو ، بار ، عشق آباد ، همت آباد ، نیشابور و ...</em></li>
</ol>

                <div class="testimonial-footersh">
                    <div class="starssh">⭐⭐⭐⭐⭐</div>
                    <div>
                        <h4 class="namesh">امید آشیانه</h4>
                        <p class="companysh">شرکت مهندسی</p>
                    </div>
                    <img src="static/image/omid/1.jpg" alt="User 3" class="testimonial-imgsh">
                </div>
                <a href="omidashiyane.php" class="more-info-btn">بیشتر بدانید</a>
            </div>
        </div>
        <button class="prevsh">&#10094;</button>
        <button class="nextsh">&#10095;</button>
    </div>
</section>

    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const slides = document.querySelector(".slidessh");
            const slide = document.querySelectorAll(".slidesh");
            const prev = document.querySelector(".prevsh");
            const next = document.querySelector(".nextsh");
            let index = 0;

            function updateSlide() {
                slides.style.transform = `translateX(-${index * 100}%)`;
            }

            next.addEventListener("click", function () {
                index = (index + 1) % slide.length;
                updateSlide();
            });

            prev.addEventListener("click", function () {
                index = (index - 1 + slide.length) % slide.length;
                updateSlide();
            });

            setInterval(() => next.click(), 20000);
        });
    </script>
</body>
</html>



<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     .bb {
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
    flex-direction: column;
}

.carousel-container {
    position: relative;
    width: 50vw; /* تنظیم عرض کاروسل */
    height: 70vh;
    perspective: 1000px;
}

.carousel {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 0.5s ease-in-out;
}

.carousel-item {
    position: absolute;
    width: 250px; /* بزرگ‌تر کردن عرض تصاویر */
    height: 375px; /* بزرگ‌تر کردن ارتفاع تصاویر */
    transition: transform 0.5s, opacity 0.5s;
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.carousel-item.front {
    transform: translateZ(200px) scale(1.3);
    opacity: 1;
}

.carousel-item.side {
    opacity: 0.6;
    transform: translateZ(-100px) rotateY(0deg); /* فاصله بیشتر و روبه‌رو بودن تصاویر سمت راست و چپ */
}

.carousel-item.hidden {
    display: none;
}

.carousel-controls {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
}

.carousel-controls button {
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.carousel-controls button:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.thumbnail-container {
    position: absolute;
    right: -300px; /* انتقال ستون تصاویر بیشتر به سمت راست */
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-wrap: wrap; /* تنظیم برای دو ستون */
    width: 120px; /* عرض کل برای دو ستون */
}

.thumbnail {
    width: 50px;
    height: 75px;
    margin: 5px; /* فاصله دادن بین تصاویر کوچک */
    opacity: 0.6;
    transition: opacity 0.3s;
}

.thumbnail:hover {
    opacity: 1;
}

.thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Media queries برای ریسپانسیو کردن */
@media screen and (max-width: 1024px) {
    .carousel-container {
        width: 80vw; /* افزایش عرض کاروسل برای تبلت */
        height: 60vh; /* کاهش ارتفاع کاروسل برای تبلت */
    }

    .carousel-item {
        width: 200px; /* کاهش عرض تصاویر برای تبلت */
        height: 300px; /* کاهش ارتفاع تصاویر برای تبلت */
    }

    .thumbnail-container {
        position: relative;
        right: 0; /* انتقال به زیر اسلایدر */
        top: auto;
        width: 100%;
        justify-content: center;
        margin-top: 20px; /* فاصله دادن به زیر اسلایدر */
    }

    .thumbnail {
        width: 40px; /* کاهش اندازه تصاویر کوچک برای تبلت */
        height: 60px; /* کاهش اندازه تصاویر کوچک برای تبلت */
    }

    .bb {
        height: 80vh; /* تنظیم ارتفاع برای تبلت */
    }
}
@media screen and (max-width: 768px) {
    .carousel-container {
        width: 90vw; /* افزایش عرض کاروسل برای گوشی */
        height: 50vh; /* کاهش ارتفاع کاروسل برای گوشی */
    }

    .carousel-item {
        width: 150px; /* کاهش بیشتر عرض تصاویر برای گوشی */
        height: 225px; /* کاهش بیشتر ارتفاع تصاویر برای گوشی */
    }

    .carousel-item.side {
        display: none; /* پنهان کردن تصاویر کناری در گوشی */
    }

    .thumbnail-container {
        position: relative;
        right: 0; /* انتقال به زیر اسلایدر */
        top: auto;
        width: 100%;
        justify-content: center;
        margin-top: 20px; /* فاصله دادن به زیر اسلایدر */
    }

    .thumbnail {
        width: 30px; /* کاهش بیشتر اندازه تصاویر کوچک برای گوشی */
        height: 45px; /* کاهش بیشتر اندازه تصاویر کوچک برای گوشی */
    }

    .bb {
        height: 70vh; /* تنظیم ارتفاع برای گوشی */
    }
}
 
    </style>
</head>
<div class='bb section'>
    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-item front"><img src="static/image/awards/1.jpg" alt="Image 1"></div>
            <div class="carousel-item side"><img src="static/image/awards/2.jpg" alt="Image 2"></div>
            <div class="carousel-item side"><img src="static/image/awards/3.jpg" alt="Image 3"></div>
            <div class="carousel-item hidden"><img src="static/image/awards/4.jpg" alt="Image 4"></div>
            <!-- <div class="carousel-item hidden"><img src="static/image/awards/5.jpg" alt="Image 5"></div> -->
            <div class="carousel-item hidden"><img src="static/image/awards/6.jpg" alt="Image 6"></div>
            <div class="carousel-item hidden"><img src="static/image/awards/7.jpg" alt="Image 7"></div>
            <div class="carousel-item hidden"><img src="static/image/awards/8.jpg" alt="Image 8"></div>
            <div class="carousel-item hidden"><img src="static/image/awards/9.jpg" alt="Image 9"></div>
            <!-- <div class="carousel-item hidden"><img src="static/image/awards/10.jpg" alt="Image 10"></div> -->
            <div class="carousel-item hidden"><img src="static/image/awards/11.jpg" alt="Image 11"></div>
            <div class="carousel-item hidden"><img src="static/image/awards/12.jpg" alt="Image 12"></div>
            <div class="carousel-item hidden"><img src="static/image/awards/13.jpg" alt="Image 13"></div>
            <div class="carousel-item hidden"><img src="static/image/awards/14.jpg" alt="Image 14"></div>
        </div>
        <div class="carousel-controls">
            <button class="prevv">❮</button>
            <button class="nextt">❯</button>
        </div>
        <div class="thumbnail-container">
            <div class="thumbnail"><img src="static/image/awards/1.jpg" alt="Image 1"></div>
            <div class="thumbnail"><img src="static/image/awards/14.jpg" alt="Image 14"></div>
            <div class="thumbnail"><img src="static/image/awards/13.jpg" alt="Image 13"></div>
            <div class="thumbnail"><img src="static/image/awards/12.jpg" alt="Image 12"></div>
            <div class="thumbnail"><img src="static/image/awards/11.jpg" alt="Image 11"></div>
            <div class="thumbnail"><img src="static/image/awards/9.jpg" alt="Image 9"></div>
            <div class="thumbnail"><img src="static/image/awards/8.jpg" alt="Image 8"></div>
            <div class="thumbnail"><img src="static/image/awards/7.jpg" alt="Image 7"></div>
            <div class="thumbnail"><img src="static/image/awards/6.jpg" alt="Image 6"></div>
            <div class="thumbnail"><img src="static/image/awards/4.jpg" alt="Image 4"></div>
            <div class="thumbnail"><img src="static/image/awards/3.jpg" alt="Image 3"></div>

            <div class="thumbnail"><img src="static/image/awards/2.jpg" alt="Image 2"></div>
            <!-- <div class="thumbnail"><img src="static/image/awards/5.jpg" alt="Image 5"></div> -->
            <!-- <div class="thumbnail"><img src="static/image/awards/10.jpg" alt="Image 10"></div> -->
        </div>
    </div>
    <script>
        const items = document.querySelectorAll('.carousel-item');
        const prevButton = document.querySelector('.prevv');
        const nextButton = document.querySelector('.nextt');
        const thumbnails = document.querySelectorAll('.thumbnail');
        let currentIndex = 0;

        function updateCarousel() {
            const angleOffset = 360 / items.length;
            items.forEach((item, index) => {
                const currentAngle = currentIndex * angleOffset + index * angleOffset;
                if (index === ((-currentIndex) % items.length + items.length) % items.length) {
                    item.classList.add('front');
                    item.classList.remove('side', 'hidden');
                    item.style.transform = `rotateY(${currentAngle}deg) translateZ(500px) rotateY(${-currentAngle}deg)`;
                } else if (index === ((-currentIndex + 1) % items.length + items.length) % items.length ||
                           index === ((-currentIndex - 1) % items.length + items.length) % items.length) {
                    item.classList.add('side');
                    item.classList.remove('front', 'hidden');
                    item.style.transform = `rotateY(${currentAngle}deg) translateZ(500px) rotateY(${-currentAngle}deg) translateZ(-100px)`;
                } else {
                    item.classList.add('hidden');
                    item.classList.remove('front', 'side');
                }
            });
        }
        

        prevButton.addEventListener('click', () => {
    if (currentIndex === 0) {
        // حرکت از اولین عکس به آخرین
        currentIndex = items.length - 1;
    } else {
        currentIndex--;
    }
    updateCarousel();
});

nextButton.addEventListener('click', () => {
    if (currentIndex === items.length - 1) {
        // حرکت از آخرین عکس به اولین
        currentIndex = 0;
    } else {
        currentIndex++;
    }
    updateCarousel();
});


        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });

        updateCarousel();
    </script>
</div>
</html>


       
<div class="banner section">
    <div class="banner-title">هر پروژه داستانی از اعتماد و پیشرفت، بنایی برای آبادانی و پلی به سوی آینده‌ای نوین و درخشان</div>
    <!-- <div class="banner-subtitle">راجب پروژه تان به ما بگویید</div> -->
    <a href="contact.php" class="contact-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 4h16v16H4z"></path>
            <polyline points="4,4 12,12 20,4"></polyline>
        </svg> ارتباط با ما
    </a>
</div>


<style>
    .infotext{
        margin-top:10px;

    }
</style>
<div class="footer">
    <div class="footer-column">
        <h4>آدرس</h4>
        <p>نیشابور<br>ابتدای بلوار گلها</p>
    </div>
    <div class="footer-column">
        <h4>شماره تماس</h4>
        <p>۰۵۱۴۲۲۵۶۷۴۱
        </p>
    </div>
    <div class="footer-column">
        <h4>ایمیل</h4>
        <p>info@delhofreh.ir</p>
    </div>
<div class="social-icons">
    <a href="https://www.instagram.com/delhofrehco" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
    </a>
    <a href="mailto:del.hofreh@gmail.com">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_%282020%29.svg" alt="Gmail">
    </a>
    <a href="mailto:info@delhofreh.ir">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Mail_%28iOS%29.svg" alt="Email">
    </a>
</div>


</div>

    </div>
</div>

<div class="copyright" dir="rtl">
    
     تمام حقوق این سایت محفوظ می باشد &copy;
</div>



<script>

let sections = document.querySelectorAll('.section');
        let isLocked = false;
        let lockedSections = new Set();
        let scrollY = 0;

        function lockScroll() {
            scrollY = window.scrollY;
            document.body.style.top = `-${scrollY}px`;
            document.body.classList.add('lock-scroll');
        }

        function unlockScroll() {
            document.body.classList.remove('lock-scroll');
            window.scrollTo(0, scrollY);
        }

        window.addEventListener('scroll', () => {
            sections.forEach((section, index) => {
                let rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight && rect.bottom >= 0 && !isLocked && !lockedSections.has(index)) {
                    isLocked = true;
                    lockScroll();
                    lockedSections.add(index);

                    setTimeout(() => {
                        isLocked = false;
                        unlockScroll();
                    }, 700);
                }
            });
        });
    </script>

</body>
</html>

</body>
</html>