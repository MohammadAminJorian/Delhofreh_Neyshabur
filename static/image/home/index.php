<?php
session_start();

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fa';

date_default_timezone_set('Asia/Tehran');

function getDateTime() {
    return [
        "time" => date("H:i:s"),
        "date" => date("Y-m-d")
    ];
}

$dateTime = getDateTime();
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
<link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شرکت دلحفره</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
@import url('https://cdn.fontcdn.ir/Font/Vazir/vazir.css');

        body {
            font-family: Arial, sans-serif;
            direction: <?= $lang == 'fa' ? 'rtl' : 'ltr' ?>;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .top-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #2C3E50;
            color: #fff;
            font-size: 16px;
        }
        .title-logo {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .title-logo img {
            width: 50px;
            height: 50px;
            margin-bottom: 5px;
        }
        .title-logo .title {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }
        .title-logo .subtitle {
            font-size: 18px;
            color: #bbb;
            margin-top: 3px;
        }
        .quality-box {
            font-family: 'Vazir', sans-serif; 
            text-align: center;
            background-color: #2C3E50;
            color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            margin: 10px auto;
            width: 11%;
            max-width: 300px;
            font-size: 18px;

        }
        .language-switch, .search-box {
            margin-left: 15px;
        }
        .language-switch a {
            margin: 0 5px;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
        .language-switch .separator {
            border-left: 1px solid #fff;
            height: 15px;
            margin: 0 10px;
        }
        .search-box input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .search-box input[type="submit"] {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            background-color: #0066cc;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .navbar {
            display: flex;
            justify-content: space-around;
            background-color: #444;
            padding: 10px 0;
            color: #fff;
            font-size: 16px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            transition: background-color 0.3s;
            border-radius: 5px;
        }
        .navbar a:hover {
            background-color: #708090;
        }
        .swiper-container {
            width: 95%;
            height: 750px;
            margin: 20px auto;
            border-radius: 10px;
            overflow: hidden;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #009688;
            height: 750px;
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
            font-size: 24px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .swiper-button-next{
            color: white;
            margin-left: 120px;
            margin-top: 80px;
        }
        .swiper-button-prev {
            color: white;
            margin-right: 120px;
            margin-top: 80px;

        }
        .swiper-button-next:hover, .swiper-button-prev:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 10px;
            margin: 20px;
        }

        .image-item {
            position: relative;
            overflow: hidden;
            height: 400px; 
            transition: transform 0.3s ease; 
        }

        .image-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .image-item:hover img {
            transform: scale(1.05); 
        }

        .image-description {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0; 
            background-color: rgba(0, 0, 0, 0.3);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0; 
            transition: opacity 0.3s ease; 
        }

        .image-item:hover .image-description {
            opacity: 1; 
        }


        @media (max-width: 768px) {
            .top-bar {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .title-logo {
                align-items: center;
            }
            .language-switch {
                display: block;
                margin-top: 5px;
                font-size: 12px;
            }
            .datetime {
                position: static;
                font-size: 14px;
                margin-top: 5px;
            }
            .quality-box {
                width: 90%;
                margin: 10px auto;
                font-size: 14px;
            }
            .navbar {
                font-size: 14px;
                padding: 8px 0;
            }
            .navbar a {
                font-size: 14px;
                padding: 8px 10px;
            }
            .swiper-container {
                height: 300px;
            }
            .swiper-slide {
                font-size: 14px;
            }
            .footer-container {
        flex-direction: column;
        align-items: center; 
        text-align: center; 
    }

    .swiper-button-next{
            color: white;
            margin-top: -10px ;

            margin-left: 70px;
        }
        .swiper-button-prev {
            color: white;
            margin-top: -10px ;
            margin-right: 70px;
        }
    .footer-column {
        max-width: none; 
        margin-bottom: 20px; 
    }
    .image-item {
        height: 150px; 
    }

}

        
        @media (max-width: 480px) {
            .top-bar {
                padding: 5px 10px;
                font-size: 12px;
            }
            .title-logo img {
                width: 40px;
                height: 40px;
            }
            .title-logo .title {
                font-size: 14px;
            }
            .title-logo .subtitle {
                font-size: 10px;
            }
            .quality-box {
                font-size: 10px;
                width: 40%;
                padding: 8px;
            }
            .language-switch a {
                font-size: 10px;
            }
            .search-box input[type="text"], .search-box input[type="submit"] {
                font-size: 10px;
                padding: 6px;
            }
            .navbar {
                font-size: 11px;
                padding: 5px 0;
            }
            .navbar a {
                font-size: 10.1px;
                padding: 5px;
            }
            .swiper-container {
                height: 300px;
            }
            .swiper-slide {
                font-size: 14px;
            }
            .footer-column h3 {
        font-size: 16px; 
    }

    .footer-column p, .footer-column ul li {
        font-size: 12px;
    }

    .footer-bottom {
        font-size: 12px; 
    }
    .footer-column h3 {
        font-size: 14px; 
    }

    .footer-column p, .footer-column ul li {
        font-size: 10px;
    }

    .footer-bottom {
        font-size: 10px;
    }
    .image-item {
        height: 100px; 
    }

    .image-description {
        font-size: 10px; 
    }
    .swiper-container {
            width: 100%;
            height: 300px;
            margin: 20px auto;
            border-radius: 10px;
            overflow: hidden;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #009688;
            height: 300px;
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
            font-size: 12px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .swiper-button-next{
            color: white;
            margin-top: -85px;
            margin-left: 10px;
        }
        .swiper-button-prev {
            color: white;
            margin-top: -85px;
            margin-right: 10px;
        }
        .swiper-button-next:hover, .swiper-button-prev:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }
}



        .footer {
    background-color: #2C3E50;
    color: #ffffff;
    padding: 20px 0;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-column {
    flex: 1;
    margin: 10px;
    min-width: 200px; 
}

.footer-column h3 {
    border-bottom: 2px solid #ffffff;
    padding-bottom: 10px;
    margin-bottom: 15px;
    font-size: 18px;
}

.footer-column p {
    font-size: 14px;
}

.footer-column ul {
    list-style-type: none;
    padding: 0;
}

.footer-column ul li {
    margin: 8px 0;
}

.footer-column a {
    color: #ffffff;
    text-decoration: none;
}

.footer-column a:hover {
    text-decoration: underline;
}

.social-links {
    display: flex;
    justify-content: space-between;
}

.social-links li {
    margin-right: 10px;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}







.container {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 20px;
}

.company-description {
    background: #f9f9f9;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    border: 1px solid #e6e6e6;
    text-align: center;
    transition: all 0.3s ease;
}

.company-description:hover {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

.company-description h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 25px;
    letter-spacing: 1px;
}

.company-description p {
    font-size: 1.2rem;
    color: ;
    line-height: 1.7;
    font-family: 'Arial', sans-serif;
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .company-description h1 {
        font-size: 2rem;
    }

    .company-description p {
        font-size: 1.1rem;
    }
}

@media (max-width: 480px) {
    .company-description h1 {
        font-size: 1.7rem;
        line-height: 1.3;
    }

    .company-description p {
        font-size: 0.9rem;
    }
}


.navbar .dropdown {
    position: relative;
    display: inline-block;
    margin-top: 0px; 
    z-index: 10; 

}

.navbar .dropdown .dropbtn {
    background-color: #444;
    color: #fff;
    padding: 10px 15px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

.navbar .dropdown-content {
    display: none;
    position: absolute;
    background-color: #444;
    min-width: 160px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.navbar .dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.navbar .dropdown-content a:hover {
    background-color: #708090;
}

.navbar .dropdown:hover .dropdown-content {
    display: block;
}

.navbar .dropdown:hover .dropbtn {
    background-color: #555;
}

@media (max-width: 768px) {
    .navbar .dropdown .dropbtn {
        font-size: 13px;
        padding: 8px 12px;
    }

    .navbar .dropdown-content a {
        font-size: 14px;
        padding: 10px 11px;
    }
}

@media (max-width: 480px) {
    .navbar .dropdown .dropbtn {
        font-size: 11px;
        padding: 6px 10px;
    }

    .navbar .dropdown-content a {
        font-size: 11px;
        padding: 8px 10px;
    }
}

    </style>
</head>
<body>

<div class="top-bar">
    <div class="title-logo">
        <img src="static/logo.jpg" alt="لوگو">
        <div class="title"><?= $lang == 'fa' ? 'شرکت ساختمانی راه سازی و محوطه سازی دلحفره' : 'Delhofreh Construction, Road Construction, and Landscaping Company' ?></div>
        <div class="subtitle"><?= $lang == 'fa' ? 'با بیش از چهل سال سابقه سازندگی و آبادانی' : 'With over 40 years of experience in construction and development.' ?></div>
    </div>
    
    <div class="quality-box" id="quality-box">
    </div>

    <div class="datetime">
        <div class="language-switch" style="display: inline; margin-left: 10px;">
            <a href="?lang=fa">فارسی</a><span class="separator"></span>
            <a href="?lang=en">English</a>
        </div>    
        <?= $lang == 'fa' ? 'تاریخ: ' : 'Date: ' ?><span id="date"><?= $dateTime['date'] ?></span> 
        <span id="time"><?= $dateTime['time'] ?></span>
    </div>
</div>

<div class="navbar">
    <a href="/"><?= $lang == 'fa' ? 'خانه' : 'Home' ?></a>
    <div class="dropdown">
        <a href="#" class="dropbtn"><?= $lang == 'fa' ? 'درباره ما' : 'About Us' ?></a>
        <div class="dropdown-content">
            <a href="aboutus.php"><?= $lang == 'fa' ? 'درباره ما' : 'About Us' ?></a>
            <a href="contact.php"><?= $lang == 'fa' ? 'تماس با ما' : 'Contact Us' ?></a>
        </div>
    </div>
    <a href="projects.php"><?= $lang == 'fa' ? 'پروژه‌ها' : 'Projects' ?></a>
    <div class="dropdown">
    <a href="#" class="dropbtn"><?= $lang == 'fa' ? 'شرکتهای تابعه' : 'Subsidiaries' ?></a>
    <div class="dropdown-content">
        <a href="omidashiyane.php"><?= $lang == 'fa' ? 'امید آشیانه' : 'Omid Ashiyane' ?></a>
        <a href="delhofrehneyshabur.php"><?= $lang == 'fa' ? 'دلحفره نیشابور' : 'Delhofreh Neyshabur' ?></a>
        <a href="fooladbeton.php"><?= $lang == 'fa' ? 'فولاد بتن' : 'Foolad Beton' ?></a>
    </div>
</div>


    <a href="services.php"><?= $lang == 'fa' ? 'زمینه فعالیت' : 'Fields of Activity' ?></a>
    <a href="awards.php"><?= $lang == 'fa' ? 'لوح تقدیرها و مجوزها' : 'Certificates of Appreciation and Licenses' ?></a>
    <a href="cmessage.php"><?= $lang == 'fa' ? 'سخن مدیر عامل' : 'CEOs Message' ?></a>
</div>


<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('static/home/2.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('static/home/1.webp')"></div>
        <div class="swiper-slide" style="background-image: url('static/home/3.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('static/home/4.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('static/home/5.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('static/home/6.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('static/home/8.jpg')"></div>


    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<div class="company-description" style="text-align: center; margin: 20px; font-size: 18px; line-height: 1.8;">
<p><?= $lang == 'fa' ? 'شرکت دلحفره با بیش از ۴۰ سال سابقه سازندگی و آبادانی به عنوان یکی از پیشگامان صنعت ساختمان سازی، راه سازی و محوطه سازی فعالیت داشته و خدمات نوین با کیفیت و درخور شان مشتریان و سهام داران خود در جای جای کشور عزیزمان ارائه می دهد.' : 'Delhofreh Company, with over 40 years of experience in construction and development, has been a pioneer in the building, road construction, and landscaping industries. The company provides innovative, high-quality services worthy of its clients and shareholders across various regions of our beloved country.' ?></p>

</div>



<div class="image-grid">
    <div class="image-item">
        <img src="static/road/16.jpg" alt=" تصویر 1">
        <div class=""></div>
    </div>
    <div class="image-item">
        <img src="static/road/10.jpg" alt=" تصویر 2">
        <div class=""></div>
    </div>
    <div class="image-item">
        <img src="static/road/11.jpg" alt=" تصویر 3">
        <div class=""></div>
    </div>
    <div class="image-item">
        <img src="static/road/12.jpg" alt=" تصویر 4">
        <div class=""></div>
    </div>
    <div class="image-item">
        <img src="static/road/17.JPG" alt=" تصویر 5">
        <div class=""></div>
    </div>
    <div class="image-item">
        <img src="static/home/10.png" alt=" تصویر 6">
        <div class=""></div>
    </div>
</div>


<footer class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3><?= $lang == 'fa' ? 'درباره ما' : 'About Us' ?></h3>
            <p><?= $lang == 'fa' ? 'شرکت دلحفره با بیش از ۴۰ سال سابقه سازندگی و آبادانی به عنوان یکی از پیشگامان صنعت ساختمان سازی، راه سازی و محوطه سازی فعالیت داشته و خدمات نوین با کیفیت و درخور شان مشتریان و سهام داران خود در جای جای کشور عزیزمان ارایه می دهد
' : 'Delhofreh Company, with over 40 years of experience in construction and development, has been a pioneer in the building, road construction, and landscaping industries. The company provides innovative, high-quality services worthy of its clients and shareholders across various regions of our beloved country.' ?></p>
        </div>
        <div class="footer-column">
            <h3><?= $lang == 'fa' ? 'لینک‌های سریع' : 'Quick Links' ?></h3>
            <ul>
                <li><a href="/"><?= $lang == 'fa' ? 'خانه' : 'Home' ?></a></li>
                <li><a href="aboutus.php"><?= $lang == 'fa' ? 'درباره ما' : 'About Us' ?></a></li>
                <li><a href="projects.php"><?= $lang == 'fa' ? 'پروژه‌ها' : 'Projects' ?></a></li>
                <li><a href="contact.php"><?= $lang == 'fa' ? 'تماس با ما' : 'Contact Us' ?></a></li>
            </ul>
        </div>
        <div class="footer-column">
            
        <h3><?= $lang == 'fa' ? 'تماس با ما' : 'Contact Us' ?></h3>
        <p><?= $lang == 'fa' ? 'آدرس: نیشابور، بلوار گلها، جنب شرکت خیام بتن فیروزه ' : 'Address: Neyshabur, Golha Boulevard, next to Khayyam Beton Firouzeh Company' ?></p>

        <p><?= $lang == 'fa' ? 'ایمیل: info@delhofreh.ir' : 'Email: info@delhofreh.ir' ?></p>
            <p><?= $lang == 'fa' ? 'جیمیل: Del.hofreh1@gmail.com' : 'gmail: Del.hofreh1@gmail.com' ?></p>
            <p><?= $lang == 'fa' ? 'تلفن: ۰۵۱۴۲۲۵۶۷۴۱' : 'Phone: 98-051-42256741' ?></p>
        </div>



    </div>
    <div class="footer-bottom">
        <p>&copy; <?= date("Y") ?> <?= $lang == 'fa' ? 'تمامی حقوق این وبسایت محفوظ می باشد.' : 'All rights reserved.' ?></p>
    </div>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true, 
        autoplay: {
            delay: 3000, 
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next', 
            prevEl: '.swiper-button-prev', 
        },
    });

    function updateDateTime(lang) {
        const dateTime = new Date();
        const timeElement = document.getElementById('time');
        const dateElement = document.getElementById('date');

        if (lang === 'fa') {
            timeElement.innerText = dateTime.toLocaleTimeString('fa-IR');
            dateElement.innerText = dateTime.toLocaleDateString('fa-IR');
        } else {
            timeElement.innerText = dateTime.toLocaleTimeString('en-US');
            dateElement.innerText = dateTime.toLocaleDateString('en-US');
        }
    }

    setInterval(() => {
        const lang = '<?= $lang ?>';
        updateDateTime(lang);
    }, 1000);

    document.addEventListener('DOMContentLoaded', () => {
        const lang = '<?= $lang ?>'; 
        updateDateTime(lang);
    });
</script>
<script>
    function performSearch() {
        const query = document.getElementById('search-input').value;
        if (query) {
            window.location.href = `?search=${encodeURIComponent(query)}`;
        }
    }
</script>
<script>
    function typeWriterEffect(text, elementId, delay = 100) {
    const element = document.getElementById(elementId);
    element.innerHTML = "";
    let i = 0;

    function typeCharacter() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(typeCharacter, delay);
        }
    }

    typeCharacter();
}

document.addEventListener('DOMContentLoaded', () => {
    const lang = '<?= $lang ?>';
    const qualityText = lang === 'fa' 
        ? 'کیفیت رمز ماندگاریست' 
        : 'Quality is the key to longevity';

    typeWriterEffect(qualityText, 'quality-box');
});

</script>


</body>
</html>
