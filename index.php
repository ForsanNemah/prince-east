<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>برنس الشرق - محمصو قهوة ومستوردون</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Cairo:wght@300;400;600;700&display=swap');
        
        body {
            font-family: 'Cairo', sans-serif;
            line-height: 1.6;
        }
        
 
.hero-section {
    background: linear-gradient(rgb(92 59 59 / 60%), rgb(225 199 199 / 60%)), url(images/hero-bg.gif) no-repeat center center / cover;
    color: white;
    padding: 120px 0;
    text-align: center;
    min-height: 120vh;
    display: flex
;
    align-items: center;
}
        
        .hero-section h1 {
            font-family: 'Amiri', serif;
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .hero-section .lead {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        
        .navbar-brand {
            font-family: 'Amiri', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: #8B4513 !important;
        }
        
        .navbar {
            background-color: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav-link {
            font-weight: 600;
            color: #333 !important;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: #8B4513 !important;
        }
        
        .section-title {
            font-family: 'Amiri', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 50%;
            transform: translateX(50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #8B4513, #D2691E);
        }
        
        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .product-card .card-img-top {
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .product-card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .product-card .card-body {
            padding: 1.5rem;
            background: linear-gradient(135deg, #fff, #f8f9fa);
        }
        
        .product-card .card-title {
            font-family: 'Amiri', serif;
            font-size: 1.3rem;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 0.5rem;
        }
        
        .about-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 80px 0;
        }
        
        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }
        
        .products-section {
            padding: 80px 0;
            background: #fff;
        }
        
        .contact-section {
            background: linear-gradient(135deg, #8B4513, #D2691E);
            color: white;
            padding: 80px 0;
        }
        
        .contact-form {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .form-control {
            border-radius: 10px;
            border: none;
            padding: 12px 15px;
            font-size: 1rem;
        }
        
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
            border-color: #8B4513;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #8B4513, #D2691E);
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.4);
        }
        
        .footer {
            background: #2c1810;
            color: #fff;
            padding: 40px 0 20px;
        }
        
        .footer-content {
            text-align: center;
        }
        
        .footer-logo {
            font-family: 'Amiri', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #D2691E;
            margin-bottom: 1rem;
        }
        
        .social-links {
            margin: 20px 0;
        }
        
        .social-links a {
            color: #D2691E;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        
        .social-links a:hover {
            color: #fff;
        }
        
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: #8B4513;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .scroll-to-top.show {
            opacity: 1;
        }
        
        .scroll-to-top:hover {
            background: #D2691E;
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section .lead {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>

 



<?php include "info.php";?>
</head>
<body>

    <!-- Navbar -->
     <?php include "wapp.php";?>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i hidden class="fas fa-coffee me-2"></i>

                 <img src="images/logo.png" alt="Logo" height="40" class="me-2">

                   
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">نبذة عنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">منتجاتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">اتصل بنا</a>
                    </li>


       <li class="nav-item">
    <a class="nav-link" href="en/index.php" title="English">EN</a>
</li>



                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1>مرحبا بكم في موقع برنس  الشرق اللوجستية</h1>


                    <p class="lead"
                    

                    >  

                      متخصصون في استيراد وتصدير جميع مستلزمات القهوة بجودة عالية.
نوفر كل ما يحتاجه عشاق القهوة والمقاهي من أدوات ومكونات.
                    
                     
                    
                    
                     
                
                
                </p>
                    <a href="#products" class="btn btn-primary btn-lg">
                        <i class="fas fa-arrow-down me-2"></i>
                        اكتشف منتجاتنا
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">نبذة عنا</h2>
                    <p class="about-text">

                        نحن في برنس الشرق اللوجستية نفخر بكوننا محمصي قهوة متخصصين ومستوردين لأجود أنواع البن من جميع أنحاء العالم. 
                        نقدم لعملائنا تجربة فريدة من خلال توفير أفضل الماركات العالمية والمشروبات الشهيرة، مع التزامنا بأعلى معايير الجودة والخدمة.


                        
                    </p>
                    <p class="about-text">


                        رؤيتنا  
                        أن نكون الخيار الأول لمستلزمات القهوة في العالم العربي.
ونسعى لرفع معايير الجودة والاحتراف في هذا المجال المتخصص.


                        
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
     <?php include "products.php" ; ?>
      <?php include "map.php" ; ?>

    <!-- Contact Section -->

        <?php include "form.php" ; ?>
    <!-- Footer -->

      <?php include "footer.php" ; ?>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll to top functionality
        const scrollToTopBtn = document.getElementById('scrollToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
            } else {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            }
        });

        // Form submission
        /*
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('شكراً لك! تم إرسال رسالتك بنجاح. سنتواصل معك قريباً.');
            this.reset();
        });
        */
    </script>
</body>
</html>

