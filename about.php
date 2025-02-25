

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شرکت دلحفره</title>
    <link rel="stylesheet" href="static/style/a_style.css">
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
    <link rel="stylesheet" href="static/style/a_style.css">

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
                <li><a href="about.php" class="active">درباره ما</a></li>
                <li><a href="index.php">خانه</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>




<div class="background-banner">
        <div class="main-title">درباره ما</div>
        <!-- <div class="subtitle">متن دلخواه -->
        </div>
    </div>


<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما - دلحفره</title>
    <link href="https://fonts.googleapis.com/css2?family=IRANSans:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset CSS */
        .ss-* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'IRANSans', sans-serif;
        }

        /* Container Styles */
        .ss-container {
            direction: rtl;
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Section Styles */
        .ss-section {
            position: relative;
            padding: 80px 0;
            background: linear-gradient(135deg, #FFF9F0 0%, #FFECD3 100%);
            clip-path: polygon(0 0, 100% 4%, 100% 96%, 0 100%);
            border-radius: 30px;
            margin: 40px 0;
        }

        .ss-section-inner {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        /* Typography */
        .ss-heading {
            font-size: 2.8rem;
            color: #1A237E;
            margin-bottom: 40px;
            position: relative;
            text-align: center;
            font-weight: 700;
        }

        .ss-heading::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: #FF9800;
            border-radius: 2px;
        }

        .ss-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #424242;
            margin-bottom: 30px;
            text-align: justify;
            font-weight: 300;
        }

        .ss-highlight {
            color: #FF6D00;
            font-weight: 500;
            position: relative;
            padding: 0 3px;
        }

        .ss-highlight::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background: rgba(255, 109, 0, 0.15);
            z-index: -1;
        }

        /* Achievements Grid */
        .ss-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .ss-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .ss-card::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg,
                rgba(255, 152, 0, 0.1) 0%,
                rgba(255, 152, 0, 0.2) 50%,
                rgba(255, 152, 0, 0.1) 100%);
            transform: rotate(45deg);
            transition: all 0.6s ease;
        }

        .ss-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.12);
        }

        .ss-card:hover::before {
            animation: ssShine 1.2s;
        }

        .ss-icon {
            font-size: 2.5rem;
            color: #FF9800;
            margin-bottom: 20px;
        }

        .ss-card-text {
            font-size: 1.1rem;
            color: #212121;
            font-weight: 500;
            line-height: 1.6;
        }

        /* Video Gallery */
        .ss-video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .ss-video-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            transform-style: preserve-3d;
        }

        .ss-video-card video {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .ss-video-card:hover video {
            transform: scale(1.05);
        }

        .ss-video-overlay {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            padding: 20px;
        }

        .ss-video-title {
            color: black;
            font-size: 1.2rem;
            font-weight: 500;
            text-shadow: 0 2px 4px rgba(0, 0, 0 , 0);
        }

        /* Animations */
        @keyframes ssShine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .ss-heading { font-size: 2.4rem; }
            .ss-section { clip-path: polygon(0 0, 100% 2%, 100% 98%, 0 100%); }
        }

        @media (max-width: 768px) {
            .ss-section-inner { padding: 30px; }
            .ss-heading { font-size: 2rem; }
            .ss-text { font-size: 1rem; }
            .ss-grid { gap: 20px; }
            .ss-card { padding: 25px; }
        }

        @media (max-width: 480px) {
            .ss-section { clip-path: none; }
            .ss-heading { font-size: 1.8rem; }
            .ss-section-inner { padding: 20px; }
        }
    </style>
</head>
<body>
    <div class="ss-container">
        <section class="ss-section">
            <div class="ss-section-inner">
                <h2 class="ss-heading">دلحفره؛ تجربه، تخصص و تعهد در سازندگی</h2>

                <p class="ss-text">
                    <span class="ss-highlight">شرکت دلحفره</span> در سال
                    <span class="ss-highlight">۱۳۵۹</span> با هدف توسعه زیرساخت‌های
                    عمرانی کشور تأسیس شد و از آن زمان تاکنون، پروژه‌های متعددی را در
                    زمینه‌های ساختمانی، راه‌سازی و محوطه‌سازی اجرا کرده است.
                    ما با ترکیب تجربه، فناوری و نیروی انسانی متخصص، همواره در تلاش بوده‌ایم تا پروژه‌هایی با بالاترین استانداردهای جهانی ارائه دهیم.

                </p>

                <div class="ss-grid">
                    <div class="ss-card">
                        <i class="fas fa-road ss-icon"></i>
                        <p class="ss-card-text">احداث و بهسازی صدها کیلومتر جاده و پل</p>
                    </div>

                    <div class="ss-card">
                        <i class="fas fa-industry ss-icon"></i>
                        <p class="ss-card-text">بهره‌برداری از کارخانه آسفالت مارینی با ظرفیت ۲۴۰ تن اسفالت در ساعت</p>
                    </div>

                    <div class="ss-card">
                        <i class="fas fa-cubes ss-icon"></i>
                        <p class="ss-card-text">تأسیس واحد تولید بتن آماده و سنگ‌شکن مدرن</p>
                    </div>

                    <div class="ss-card">
                        <i class="fas fa-trophy ss-icon"></i>
                        <p class="ss-card-text">رتبه ۳ راه‌سازی و رتبه ۴ ساختمان‌سازی</p>
                    </div>
                </div>

                <p class="ss-text">
                    با نگاه به آینده، ما همچنان در مسیر توسعه، نوآوری و کیفیت گام برمی‌داریم
                    تا نقش مؤثرتری در آبادانی کشور داشته باشیم.
                </p>

                <h2 class="ss-heading">گالری پروژه‌ها</h2>

                <div class="ss-video-grid">
                    <div class="ss-video-card">
                        <video controls>
                            <source src="static/videos/video1.mp4" type="video/mp4">
                        </video>
                        <div class="ss-video-overlay">
                        </div>
                    </div>

                    <div class="ss-video-card">
                        <video controls>
                            <source src="static/videos/video4.mp4" type="video/mp4">
                        </video>
                        <div class="ss-video-overlay">
                        </div>
                    </div>

                    <div class="ss-video-card">
                        <video controls>
                            <source src="static/videos/video3.mp4" type="video/mp4">
                        </video>
                        <div class="ss-video-overlay">
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

