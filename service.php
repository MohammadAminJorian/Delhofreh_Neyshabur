

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
    <link rel="stylesheet" href="static/style/service_style.css">

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
                <li><a href="service.php" class="active">زمینه فعالیت</a></li>
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



    <div class="background-banner">
        <div class="main-title">زمینه فعالیت</div>
        </div>
    </div>


<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات</title>
    <style>
        body {
            font-family: 'Fira Sans', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .service-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            padding: 40px 20px;
        }

        .service {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 100%;
            max-width: 700px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            padding: 20px;
            height: 350px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .icon {
            background: linear-gradient(135deg, #ffeb3b, #fbc02d);
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .icon:hover {
            transform: scale(1.1);
        }

        .icon img {
            width: auto;
            height: auto;
        }

        h2 {
            margin: 10px 0 15px;
            font-size: 30px;
            font-weight: 600;
            color: #333;
        }

        .highlighted-paragraph {
            margin: 0;
            font-size: 16px;
            text-align: justify;
            text-align: right;
            line-height: 1.8;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
            color: #666;
        }

        /* استایل جدید برای بخش ویدئوها */
        .video-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 40px 20px;
            max-width: 1400px;
            margin-right: 30px;
            margin: 40px auto;
        }

        .video {
            position: relative;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            aspect-ratio: 16/9;
        }

        .video:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        /* استایل برای ویدئوهای عمودی */
        .video.vertical {
            aspect-ratio: 9/16;
            max-width: 300px;
            margin: 0 auto;
        }

        @media screen and (max-width: 768px) {
            .video-container {
                grid-template-columns: 1fr;
            }

            .video.vertical {
                max-width: 100%;
            }
        }
        @media (max-width: 1024px) {
    .service-container {
        gap: 30px;
        padding: 30px 15px;
    }

    .service {
        max-width: 600px;
        height: auto;
        padding: 15px;
    }

    .icon {
        width: 70px;
        height: 70px;
    }

    h2 {
        font-size: 26px;
    }

    .highlighted-paragraph {
        font-size: 15px;
        padding-bottom: 15px;
    }
}

@media (max-width: 768px) {
    .service-container {
        flex-direction: column;
        align-items: center;
        padding: 20px 10px;
    }

    .service {
        max-width: 90%;
        height: auto;
        padding: 15px;
    }

    .icon {
        width: 60px;
        height: 60px;
    }

    h2 {
        font-size: 24px;
    }

    .highlighted-paragraph {
        font-size: 14px;
        padding-bottom: 10px;
    }
}

    </style>
</head>
<body>
    <div class="service-container">
        <div class="service">
            <div class="icon">
                <img src="static/image/roadـconstruction.png" alt="Construction">
            </div>
            <h2>راه‌سازی و زیرساخت‌های عمرانی</h2><br>
            <p class="highlighted-paragraph">
                احداث و بهسازی جاده‌ها، پل‌ها و تقاطع‌های غیرهمسطح ✔
                <br>
                توسعه شبکه‌های حمل‌ونقل شهری و بین‌شهری ✔
                <br>
                اجرای پروژه‌های محوطه‌سازی و زیرساختی ✔
            </p>
            <br>
        </div>
        <div class="service">
            <div class="icon">
                <img src="static/image/building.png" alt="Roofing">
            </div>
            <h2>اجرای پروژه‌های ساختمانی پیشرفته</h2><br>
            <p class="highlighted-paragraph">
                طراحی و اجرای ساختمان‌های مسکونی، تجاری و اداری ✔
                <br>
                ساخت سازه‌های بتنی و فلزی مطابق با استانداردهای روز ✔
                <br>
                به‌کارگیری فناوری‌های نوین در ساختمان‌سازی ✔
            </p>
            <br>
        </div>
    </div>

    <div class="service-container">
        <div class="service">
            <div class="icon">
                <img src="static/image/Development.png" alt="Remodeling">
            </div>
            <h2>توسعه پایدار و نوآوری</h2><br>
            <p class="highlighted-paragraph">
                به‌کارگیری فناوری‌های جدید در ساخت‌وساز ✔
                <br>
                رعایت اصول زیست‌محیطی در تمامی پروژه‌ها ✔
                <br>
                استفاده از مواد اولیه استاندارد برای افزایش عمر مفید سازه‌ها ✔
            </p>
            <br>
        </div>
        <div class="service">
            <div class="icon">
                <img src="static/image/materials.png" alt="Solar Installation">
            </div>
            <h2>تولید و تأمین مصالح ساختمانی</h2><br>
            <p class="highlighted-paragraph">
                تولید آسفالت با کیفیت بالا در کارخانه مارینی ✔
                <br>
                تولید بتن آماده و قطعات بتنی (نیوجرسی، باکس‌های بتنی و...) ✔
                <br>
                استخراج و فرآوری مصالح ساختمانی با سنگ‌شکن پیشرفته ✔
            </p>
            <br>
        </div>
    </div>

    <!-- بخش ویدئوها با چیدمان جدید -->
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات</title>
    <style>
        /* تمام استایل‌های قبلی بدون تغییر باقی می‌مانند */

        /* استایل جدید برای متن پایینی */
        .video-container {
            position: relative; /* اضافه کردن این خط */
        }


    .abc{
    margin-top:340px;
    margin-left:102px;
    opacity:2;
    z-index: 2;

    }
    .divv{
        max-width: 100%;
        overflow: auto;
    }
    .imga{
        max-width: 100%;
        height: auto;
        margin-left: 0px;
        display: block;
        margin-top:-150px

    }

    @media (max-width: 1024px) {
        .imga{
        margin-left: 1px;
        margin-top:0px

    }
}
@media (max-width: 768px) {
        .imga{
        margin-left: 1px;
        margin-top:0px

    }
}
@media (max-width: 458px) {
        .imga{

        margin-left: 1px;
        margin-top:0px

    }
}
@media (max-width: 430px) {
        .imga{

        margin-left: 1px;
        margin-top:0px

    }
}
@media (max-width: 412px) {
        .imga{

        margin-left: 1px;
        margin-top:0px

    }
}
@media (max-width: 375px) {
        .imga{

        margin-left: 1px;
        margin-top:0px

    }
}
@media (max-width: 360px) {
        .imga{

        margin-left: 1px;
        margin-top:0px

    }
}
@media (max-width: 390px) {
        .imga{

        margin-left: 1px;
        margin-top:0px

    }
}


    </style>
</head>
<body>

    <div class="video-container">
        <div class="video">
            <video controls>
                <source src="static/videos/video3.mp4" type="video/mp4">
                مرورگر شما از ویدئو پشتیبانی نمی‌کند.
            </video>
        </div>
        <div class="video">
            <video controls>
                <source src="static/videos/video5.mp4" type="video/mp4">
                مرورگر شما از ویدئو پشتیبانی نمی‌کند.
            </video>
        </div>

        <div class="video vertical">
            <video controls>
                <source src="static/videos/video2.mp4" type="video/mp4">
                مرورگر شما از ویدئو پشتیبانی نمی‌کند.
            </video>
        </div>
    </div>
</body>
</html>
</body>
</html>
<div class="divv">
<div class="imga">
    <img class="imga" src="static/image/home/slider/12.webp" alt="">
</div>
</div>

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

