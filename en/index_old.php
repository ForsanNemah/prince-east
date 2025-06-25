<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prince Al Sharq - Coffee Roasters and Importers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
        }
        
        .hero-section {
            background: linear-gradient(rgb(92 59 59 / 60%), rgb(225 199 199 / 60%)), url(images/hero-bg.gif) no-repeat center center / cover;
            color: white;
            padding: 120px 0;
            text-align: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .hero-section h1 {
            font-family: 'Playfair Display', serif;
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
            font-family: 'Playfair Display', serif;
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
            font-family: 'Playfair Display', serif;
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
            left: 50%;
            transform: translateX(-50%);
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
            object-fit: contain;
            transition: transform 0.3s ease;
            padding: 15px;
            background-color: #fafafa;
        }
        
        .product-card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .product-card .card-body {
            padding: 1.5rem;
            background: linear-gradient(135deg, #fff, #f8f9fa);
        }
        
        .product-card .card-title {
            font-family: 'Playfair Display', serif;
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
            font-family: 'Playfair Display', serif;
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
            right: 20px;
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
            
            .navbar-nav {
                text-align: center;
            }
            
            .product-card .card-img-top {
                height: 200px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-section {
                padding: 80px 0;
            }
            
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .hero-section .lead {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .about-section, .products-section, .contact-section {
                padding: 60px 0;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo" height="40" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
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
                    <h1>Welcome to Prince Al Sharq Logistics</h1>
                    <p class="lead">We specialize in importing and exporting all coffee supplies with high quality. We provide everything coffee lovers and cafes need, from tools to ingredients.</p>
                    <a href="#products" class="btn btn-primary btn-lg">
                        <i class="fas fa-arrow-down me-2"></i>
                        Discover Our Products
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
                    <h2 class="section-title">About Us</h2>
                    <p class="about-text">
                        At Prince Al Sharq Logistics, we pride ourselves on being specialized coffee roasters and importers of the finest coffee beans from around the world. We offer our customers a unique experience by providing the best international brands and famous beverages, while adhering to the highest standards of quality and service.
                    </p>
                    <p class="about-text">
                        Our Vision: To be the first choice for coffee supplies in the Arab world. We strive to raise the standards of quality and professionalism in this specialized field.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Our Featured Products</h2>
            <div class="row g-4 justify-content-center">
                <!-- Marcafe -->
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card shadow-sm h-100">
                        <img src="images/brands/marcafe.png" class="card-img-top" alt="Marcafe" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Marcafe</h5>
                            <p class="card-text">Distinctive Marcafe coffee with its rich and authentic flavor</p>
                        </div>
                    </div>
                </div>

                <!-- Thirst -->
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card shadow-sm h-100">
                        <img src="images/brands/thirst.png" class="card-img-top" alt="Thirst" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Thirst Beverages</h5>
                            <p class="card-text">A variety of refreshing Thirst beverages</p>
                        </div>
                    </div>
                </div>

                <!-- Hario -->
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card shadow-sm h-100">
                        <img src="images/brands/sp.png" class="card-img-top" alt="Hario" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Hario Filters</h5>
                            <p class="card-text">Hario 02 white paper filters, 100 pieces</p>
                        </div>
                    </div>
                </div>

                <!-- Cafec -->
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card shadow-sm h-100">
                        <img src="images/brands/cafec.png" class="card-img-top" alt="Cafec" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Cafec</h5>
                            <p class="card-text">Various and distinctive Cafec products</p>
                        </div>
                    </div>
                </div>

                <!-- Bon -->
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card shadow-sm h-100">
                        <img src="images/brands/bon.png" class="card-img-top" alt="Bon" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Bon Filters</h5>
                            <p class="card-text">High-quality Bon products with a distinctive taste</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title text-center text-white">Contact Us</h2>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="contact-form">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" name="msg" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" id="submitBtn">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content text-center">
                <div class="footer-logo">Prince Al Sharq</div>
                <p>Coffee roasters and importers of the best international brands</p>
                
                <div class="contact-info my-3">
                    <p><i class="fas fa-map-marker-alt"></i> Al-Khobar - North Al-Khobar - Prince Musaed bin Abdulaziz Street - Saudi Arabia</p>
                    <p><i class="fas fa-envelope"></i> info@prince-alsharq.com</p>
                    <p><i class="fas fa-phone"></i> 966554377469</p>
                </div>

                <div class="social-links mb-3">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>

                <hr style="border-color: #555;">
                <p>&copy; 2025 Prince Al Sharq Logistics. All rights reserved.</p>
            </div>
        </div>
    </footer>

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
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you! Your message has been sent successfully. We will contact you soon.');
            this.reset();
        });
    </script>
</body>
</html>

