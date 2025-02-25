<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شرکت دلحفره</title>
    <link rel="stylesheet" href="static/style/service_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<style>

body.lock-scroll {
    overflow: hidden;
    padding-right: 15px;
}
</style>
</head>
<body>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شرکت دلحفره</title>
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
          /* Media queries برای ریسپانسیو کردن */
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
                <li><a href="index.php">خانه</a></li>
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
    <title>شرکت دلحفره نیشابور</title>
    <style>
        /* تنظیمات کلی */
        body {
            font-family: 'Arial', sans-serif;
            background: #fff5d1; /* پس‌زمینه زرد کم‌رنگ */
            color: #333;
            margin: 0;
            padding: 0;
            text-align: right; /* راست چین */
        }
        
        .container-shh {
            width: 90%;
            margin: auto;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        /* عنوان اصلی شرکت */
        .company-header-shh {
            text-align: right;
            margin-bottom: 50px;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: flex-end; 
        }
        .company-header-shh h1 {
            font-size: 50px;
            font-weight: 700;
            color: #ff6f00; /* رنگ زرد */
            text-shadow: 3px 3px 10px rgba(0,0,0,0.2);
            margin-right: 20px; /* فاصله از لوگو */
        }
        .company-header-shh p {
            font-size: 22px;
            color: #555;
            margin-top: 10px;
        }

        /* لوگو شرکت */
        .company-logo-shh {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #ff6f00; /* رنگ نارنجی برای حاشیه */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* توضیحات درباره شرکت */
        .company-description-shh {
            background: #fff; /* پس‌زمینه سفید */
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 8px 15px rgba(0,0,0,0.1);
            margin-bottom: 50px;
            color: #333;
            text-align: right; /* راست چین کردن متن درباره ما */
        }
        .company-description-shh h2 {
            font-size: 32px;
            color: #ff6f00; /* رنگ نارنجی */
            text-align: center;
            margin-bottom: 20px;
        }
        .company-description-shh p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            text-align: right; /* راست چین کردن متن داخل تگ p */
        }

        /* گالری عکس */
        .image-gallery-shh {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: space-between;
        }
        .image-gallery-shh img {
            width: 32%;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .image-gallery-shh img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }

        /* دکمه‌ها */
        .btn-shh {
            background-color: #ff6f00; /* رنگ نارنجی */
            color: white;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            border: none;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-shh:hover {
            background-color: #ff8f00;
            transform: translateY(-5px);
        }
        @media (max-width: 1024px) {
    .container-shh {
        width: 95%;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .company-header-shh {
        flex-direction: column;
        text-align: center;
        justify-content: center;
    }

    .company-header-shh h1 {
        font-size: 40px;
        margin-right: 0;
        margin-bottom: 10px;
    }

    .company-logo-shh {
        width: 120px;
        height: 120px;
    }

    .company-description-shh {
        padding: 30px;
    }

    .company-description-shh h2 {
        font-size: 28px;
    }

    .company-description-shh p {
        font-size: 16px;
    }

    .image-gallery-shh {
        gap: 20px;
        justify-content: center;
    }

    .image-gallery-shh img {
        width: 48%;
    }

    .btn-shh {
        font-size: 16px;
        padding: 10px 25px;
    }
}

@media (max-width: 768px) {
    .company-header-shh h1 {
        font-size: 36px;
    }

    .company-logo-shh {
        width: 100px;
        height: 100px;
    }

    .company-description-shh {
        padding: 20px;
    }

    .company-description-shh h2 {
        font-size: 24px;
    }

    .company-description-shh p {
        font-size: 14px;
    }

    .image-gallery-shh img {
        width: 100%;
    }

    .btn-shh {
        font-size: 14px;
        padding: 8px 20px;
    }
}

    </style>
</head>
<body>

    <div class="container-shh">
        <!-- بخش هدر و اطلاعات شرکت -->
        <div class="company-header-shh">
            <h1>شرکت دلحفره نیشابور</h1>
            <img src="static/image/delhofreh/1.jpg" alt="Logo" class="company-logo-shh">
        </div>
        <p class="company-header-shh">*شرکت دلحفره نیشابور – پیشرو در ساخت آینده‌ای ایمن و پایدار*</p>

        <!-- توضیحات درباره شرکت -->
        <div class="company-description-shh">
            <p>

شرکت دلحفره نیشابور، با تکیه بر ساختار مدیریتی پویا و نظام‌مند، همواره در خط مقدم توسعه و تعالی زیرساخت‌های عمرانی کشور ایستاده است. این مجموعه با بهره‌گیری از دانش عمیق و تجربه نیروی انسانی متخصص، همراه با استفاده از پیشرفته‌ترین فناوری‌های مهندسی، در مسیر احداث راه‌های استاندارد، ایمن و نوین گام برمی‌دارد. ما نه تنها به ساخت راه‌ها می‌اندیشیم، بلکه به ساخت آینده‌ای بهتر برای ایران عزیزمان متعهد هستیم.
<br>
<br>
ماموریت ما در شرکت دلحفره نیشابور، اجرای پروژه‌های عمرانی با بالاترین استانداردهای کیفی و استفاده از رویکردهای نوین مهندسی است. از سال ۱۳۹۳، زمانی که این شرکت در شهرستان فیروزه تأسیس شد، همواره در تلاش بوده‌ایم تا با بهره‌گیری از تیمی مجرب و فناوری‌های روز دنیا، سهمی مؤثر در پیشرفت و توسعه راه‌سازی و ساخت‌وساز کشور داشته باشیم. ما به کیفیت، ایمنی و پایداری در هر پروژه‌ای که انجام می‌دهیم، پایبند هستیم.
<br><br>
*چرا دلحفره نیشابور؟*
<br><br>
تیمی از مهندسین مجرب و فناوری‌های پیشرفته*: ما با تکیه بر دانش فنی و تجربه‌ی تیم خود، همراه با استفاده از آخرین فناوری‌های روز دنیا، پروژه‌هایی با کیفیت و ماندگار اجرا می‌کنیم*
  <br>
احداث راه‌های استاندارد و ایمن*: ایمنی و استانداردهای بین‌المللی در اولویت کار ما قرار دارد. ما راه‌هایی می‌سازیم که نه تنها نیازهای امروز، بلکه چالش‌های فردا را نیز پاسخگو باشند*
<br>
 مدیریت نظام‌مند و کارآمد*: با سیستم مدیریتی منسجم و برنامه‌ریزی دقیق، پروژه‌ها را در زمان مقرر و با بالاترین کیفیت به پایان می‌رسانیم*
<br>
تعهد به توسعه پایدار*: ما به آینده‌ای پایدار می‌اندیشیم و در هر پروژه، حفظ محیط زیست و استفاده بهینه از منابع را در نظر می‌گیریم*
<br>    <br>
در دلحفره نیشابور، ما به آینده‌ای ایمن، پیشرفته و پایدار می‌اندیشیم. با تلاش مستمر و تعهد به کیفیت، مسیر توسعه را هموار می‌سازیم.
            </p>
        </div>

        <!-- گالری عکس -->
        <div class="image-gallery-shh">
            <img src="static/image/delhofreh/2.jpg" alt="Image 1">
            <img src="static/image/delhofreh/3.jpg" alt="Image 2">
            <img src="static/image/delhofreh/4.jpg" alt="Image 3">
        </div>

    </div>

</body>
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


</body>
</html>

