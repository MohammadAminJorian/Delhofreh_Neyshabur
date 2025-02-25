
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renovation Header</title>
    <link rel="stylesheet" href="static/style/service_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
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
    <title> سخنان مدیر عامل</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;500&display=swap');

        .container {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            direction: rtl;
            font-family: 'Vazirmatn', sans-serif;
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: right;
            background: url('static/image/home/222.jpg') no-repeat center center fixed;
            background-size: cover;
            overflow: hidden;
            animation: fadeInBackground 2s ease-in-out;
            backdrop-filter: blur(5px);
        }

        @keyframes fadeInBackground {
            from { filter: blur(10px); opacity: 0; }
            to { filter: blur(0); opacity: 1; }
        }

        .content {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 35px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 20px;
            box-shadow: 0 20px 100px rgba(0, 0, 0, 0.8);
            animation: slideIn 1.5s ease-in-out;
            max-width: 90%;
            flex-direction: column;
            text-align: center;
            transform: scale(1.02);
            transition: transform 0.3s ease-in-out;
        }

        .content:hover {
            transform: scale(1.05); 
        }

        @keyframes slideIn {
            from { transform: translateY(80px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .quote-box {
            color: white;
            font-size: 0.95rem; /* فونت کوچکتر */
            font-weight: 300;
            max-width: 580px;
            line-height: 1.6;
            text-align: justify;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.8);
            margin-top: 20px;
            padding: 20px;
            border-radius: 12px;
        }

        .quote-box p {
            margin: 0;
            padding-bottom: 20px;
        }

        .manager-photo img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 5px solid #f7a500;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }

        .description {
            color: #f7a500;
            font-size: 0.95rem; /* فونت کوچکتر */
            line-height: 1.7;
            margin-top: 20px;
            padding: 10px;
            text-align: center;
            border-radius: 12px;
        }

        @media (max-width: 768px) {
            .content {
                padding: 25px;
                flex-direction: column;
                text-align: center;
            }

            .quote-box {
                font-size: 0.85rem; /* فونت حتی کوچکتر برای موبایل */
            }
        }

        @media (max-width: 1024px) {
    .content {
        padding: 30px;
        gap: 15px;
    }

    .quote-box {
        font-size: 0.9rem; /* کمی فونت بزرگتر */
    }

    .description {
        font-size: 1rem; /* کمی فونت بزرگتر */
    }

    .manager-photo img {
        width: 120px;
        height: 120px;
    }
}

@media (max-width: 768px) {
    .container {
        background-size: cover; /* پس‌زمینه به طور کامل نمایش داده می‌شود */
    }

    .content {
        padding: 25px;
        flex-direction: column;
        text-align: center;
    }

    .quote-box {
        font-size: 0.85rem; /* فونت حتی کوچکتر برای موبایل */
    }

    .manager-photo img {
        width: 100px;
        height: 100px;
    }

    .description {
        font-size: 0.9rem; /* برای موبایل کمی کوچکتر */
    }
}

@media (max-width: 576px) {
    .content {
        padding: 20px;
    }

    .quote-box {
        font-size: 0.8rem; /* فونت کوچکتر */
    }

    .manager-photo img {
        width: 80px;
        height: 80px;
    }

    .description {
        font-size: 0.85rem; /* فونت کوچکتر */
    }
}

@media (max-width: 400px) {
    .content {
        padding: 15px;
    }

    .quote-box {
        font-size: 0.75rem; /* فونت کوچکتر برای صفحه‌های بسیار کوچک */
    }

    .manager-photo img {
        width: 70px;
        height: 70px;
    }

    .description {
        font-size: 0.8rem; /* فونت کوچکتر */
    }
}

        
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="manager-photo">
                <img src="static/image/home/2.jpg" alt="مدیر">
            </div>
            <div class="quote-box" id="quote">
                <!-- متن‌ها با جاوااسکریپت وارد می‌شوند -->
            </div>
        </div>
    </div>

    <script>
        const fullText = `
                        رئیس هیئت مدیره:<br>
            شرکت دل حفره در حال حاظر با اشتغال بیش از 100 نفر نیروی مجرب و متخصص به صورت مستقیم به عنوان یک شرکت خصوصی در زمینه تولید و خدمات مهندسی در یک تراز پیشرو و دانش بنیان مشغول به فعالیت می باشد . روند حرکتی آن بر مبنای یک رویکرد مدیریتی صحیح به نحوی بنا نهاده شده که کلیه فرایند ها با هم افزایی دانش و تجربه بر اساس یک تفکر سیستماتیک ، یکسان و هماهنگ پیگیری شوند. <br><br>

            بدیهی است تلاش و سرمایه گذای در این عرضه گسترده با مشکلات و چالش های بسیاری همراه بوده است اما با هدف کارآفرینی بطور مستقیم و غیر مستقیم و خدمت رسانی به مردم دو عامل مهم و اصلی بوده که فراتر از انگیزه های اقتصادی مدنظر واقع شده است. در پایان با این جمله که “ کیفیت رمز ماندگاریست “همه شما را به خدا می سپاریم و همواره منتظر دیدار شما خوبان هستیم.

        `;

        const quoteBox = document.getElementById('quote');

        quoteBox.innerHTML = fullText; // استفاده از innerHTML برای درج محتوای با تگ‌های HTML
    </script>
</body>
</html>





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
