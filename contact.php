<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academy School - Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --gold: #F5BA2C;
            --brown: #978452;
            --dark-brown: #6B5B3F;
            --light-cream: #FEFAF0;
            --white: #FFFFFF;
            --dark-text: #2D2D2D;
            --accent-teal: #2C7873;
            --accent-grey: #D4D4D4;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-text);
            background-color: var(--light-cream);
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><text x="500" y="500" font-family="Arial" font-size="800" font-weight="bold" text-anchor="middle" dy=".3em" fill="rgba(151,132,82,0.08)">✎</text></svg>');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 150%;
            position: relative;
        }
        
        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, var(--dark-brown) 0%, var(--brown) 50%, var(--gold) 100%);
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            padding: 12px 0;
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: clamp(1rem, 4vw, 1.35rem);
            color: var(--white) !important;
            margin-right: 20px;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .navbar-brand i {
            font-size: 1.2rem;
            background: rgba(255,255,255,0.2);
            padding: 6px 10px;
            border-radius: 6px;
        }
        
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            margin: 5px 8px;
            font-weight: 600;
            font-size: 0.85rem;
            transition: all 0.3s ease;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            padding: 8px 0 !important;
        }
        
        .nav-link:hover {
            color: var(--gold) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: -8px;
            left: 0;
            background: linear-gradient(90deg, var(--gold), transparent);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .btn-auth {
            background: var(--gold);
            color: var(--dark-brown);
            border: none;
            padding: 6px 14px;
            margin-left: 4px;
            border-radius: 25px;
            font-weight: 700;
            font-size: 0.8rem;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(245, 186, 44, 0.3);
            text-transform: uppercase;
            letter-spacing: 0.3px;
            white-space: nowrap;
        }
        
        .btn-auth:hover {
            background: var(--white);
            color: var(--dark-brown);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(245, 186, 44, 0.4);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--dark-brown) 0%, var(--brown) 35%, var(--gold) 100%);
            color: var(--white);
            padding: clamp(40px, 15vw, 80px) 0;
            text-align: center;
            min-height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 56px;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></svg>');
            opacity: 0.1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeInUp 0.8s ease;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero h1 {
            font-size: clamp(1.8rem, 8vw, 2.8rem);
            font-weight: 800;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        
        .hero p {
            font-size: clamp(0.9rem, 4vw, 1.15rem);
            margin-bottom: 30px;
            opacity: 0.98;
            font-weight: 500;
            letter-spacing: 0.3px;
        }
        
        .hero .btn {
            padding: 10px 20px;
            font-size: 0.9rem;
            font-weight: 700;
            margin: 8px;
            border-radius: 25px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .btn-hero-primary {
            background-color: var(--gold);
            border: none;
            color: var(--dark-brown);
            box-shadow: 0 6px 20px rgba(245, 186, 44, 0.4);
        }
        
        .btn-hero-primary:hover {
            background-color: var(--white);
            color: var(--dark-brown);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(245, 186, 44, 0.5);
        }
        
        .btn-hero-secondary {
            background-color: transparent;
            border: 2.5px solid var(--gold);
            color: var(--gold);
        }
        
        .btn-hero-secondary:hover {
            background-color: var(--gold);
            color: var(--dark-brown);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(245, 186, 44, 0.4);
        }
        
        /* Sections */
        .section {
            padding: clamp(40px, 10vw, 60px) 0;
            position: relative;
            z-index: 1;
        }
        
        .section-title {
            font-size: clamp(1.5rem, 6vw, 2.2rem);
            font-weight: 800;
            color: var(--dark-brown);
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            padding-bottom: 20px;
            letter-spacing: -0.5px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--gold), var(--accent-teal));
            left: 50%;
            transform: translateX(-50%);
            bottom: 0;
            border-radius: 2px;
        }
        
        /* Principal Section */
        .principal-section {
            background: linear-gradient(180deg, var(--light-cream) 0%, rgba(245, 186, 44, 0.08) 100%);
            position: relative;
        }
        
        .principal-card {
            background: var(--white);
            padding: clamp(25px, 5vw, 40px);
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            text-align: center;
            border-top: 5px solid var(--gold);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .principal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }
        
        .principal-image {
            width: clamp(80px, 15vw, 110px);
            height: clamp(80px, 15vw, 110px);
            border-radius: 50%;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, var(--brown), var(--gold));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(2rem, 6vw, 3rem);
            color: var(--white);
            box-shadow: 0 6px 20px rgba(151, 132, 82, 0.3);
            border: 3px solid var(--gold);
        }
        
        .principal-card h3 {
            color: var(--dark-brown);
            font-weight: 800;
            font-size: clamp(1rem, 4vw, 1.25rem);
            margin-bottom: 5px;
            letter-spacing: -0.3px;
        }
        
        .principal-card .position {
            color: var(--gold);
            font-size: 0.9rem;
            margin-bottom: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .principal-card p {
            color: #555;
            font-size: clamp(0.85rem, 2vw, 0.98rem);
            line-height: 1.8;
            font-style: italic;
        }
        
        /* Vision & Goals */
        .vision-goals {
            background: var(--white);
        }
        
        .card-item {
            background: linear-gradient(135deg, var(--white) 0%, rgba(245, 186, 44, 0.05) 100%);
            padding: clamp(20px, 5vw, 30px);
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            margin-bottom: 25px;
            transition: all 0.3s ease;
            border-left: 5px solid var(--gold);
            position: relative;
            overflow: hidden;
        }
        
        .card-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
            border-left-color: var(--accent-teal);
        }
        
        .card-item i {
            font-size: clamp(1.8rem, 5vw, 2.2rem);
            color: var(--gold);
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .card-item:hover i {
            color: var(--accent-teal);
            transform: scale(1.1);
        }
        
        .card-item h4 {
            color: var(--dark-brown);
            font-weight: 800;
            font-size: clamp(1rem, 4vw, 1.2rem);
            margin-bottom: 12px;
            letter-spacing: -0.3px;
        }
        
        .card-item p {
            color: #666;
            font-size: clamp(0.85rem, 2vw, 0.97rem);
            line-height: 1.7;
            position: relative;
            z-index: 1;
        }
        
        /* People Section */
        .people-section {
            background: linear-gradient(180deg, var(--light-cream) 0%, rgba(245, 186, 44, 0.05) 100%);
        }
        
        .person-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            text-align: center;
            border: 2px solid transparent;
            margin-bottom: 20px;
        }
        
        .person-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.15);
            border-color: var(--gold);
        }
        
        .person-image {
            width: 100%;
            height: clamp(120px, 25vw, 150px);
            background: linear-gradient(135deg, var(--brown) 0%, var(--gold) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(2.5rem, 6vw, 3.5rem);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }
        
        .person-info {
            padding: clamp(12px, 3vw, 18px);
        }
        
        .person-info h5 {
            color: var(--dark-brown);
            font-weight: 800;
            font-size: clamp(0.9rem, 3vw, 1.05rem);
            margin-bottom: 5px;
            letter-spacing: -0.2px;
        }
        
        .person-info p {
            color: var(--gold);
            font-size: clamp(0.75rem, 2vw, 0.88rem);
            margin: 0;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--dark-brown) 0%, var(--brown) 50%, rgba(245, 186, 44, 0.9) 100%);
            color: var(--white);
            padding: clamp(25px, 5vw, 35px) 0 15px;
            margin-top: 50px;
            font-size: clamp(0.85rem, 2vw, 0.95rem);
            box-shadow: 0 -4px 15px rgba(0,0,0,0.1);
        }
        
        .footer h5 {
            font-weight: 800;
            margin-bottom: 15px;
            font-size: clamp(0.95rem, 3vw, 1.05rem);
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        
        .footer p {
            font-size: clamp(0.8rem, 2vw, 0.92rem);
            margin-bottom: 8px;
            opacity: 0.95;
        }
        
        .footer a {
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer a:hover {
            color: var(--white);
            text-decoration: underline;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 15px;
            border-top: 1px solid rgba(255,255,255,0.2);
            margin-top: 20px;
            font-size: clamp(0.75rem, 2vw, 0.88rem);
            opacity: 0.9;
        }
        
        /* Modal */
        .modal-content {
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            overflow: hidden;
        }
        
        .modal-header {
            background: linear-gradient(135deg, var(--dark-brown) 0%, var(--brown) 50%, var(--gold) 100%);
            color: var(--white);
            border: none;
            padding: 20px;
            font-weight: 800;
            letter-spacing: 0.5px;
        }
        
        .form-label {
            font-weight: 700;
            color: var(--dark-brown);
            font-size: clamp(0.85rem, 2vw, 0.95rem);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        
        .form-control {
            font-size: 0.95rem;
            border-radius: 8px;
            border: 2px solid #ddd;
            padding: 10px 14px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 0.2rem rgba(245, 186, 44, 0.25);
            background-color: rgba(245, 186, 44, 0.02);
        }
        
        .btn-submit {
            background: linear-gradient(135deg, var(--gold), var(--brown));
            color: var(--white);
            font-weight: 800;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(245, 186, 44, 0.3);
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(245, 186, 44, 0.4);
            color: var(--white);
        }
        
        /* Contact Section */
        .contact-section {
            background: linear-gradient(180deg, var(--white) 0%, rgba(245, 186, 44, 0.05) 100%);
        }
        
        .contact-info-card {
            background: var(--white);
            padding: clamp(25px, 5vw, 35px);
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            text-align: center;
            transition: all 0.3s ease;
            border-top: 5px solid var(--gold);
        }
        
        .contact-info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
            border-top-color: var(--accent-teal);
        }
        
        .contact-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--gold), var(--brown));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--white);
            margin: 0 auto 15px;
            box-shadow: 0 4px 15px rgba(245, 186, 44, 0.3);
        }
        
        .contact-info-card h5 {
            color: var(--dark-brown);
            font-weight: 800;
            font-size: clamp(1rem, 3vw, 1.1rem);
            margin-bottom: 12px;
            letter-spacing: -0.2px;
        }
        
        .contact-info-card p {
            color: #666;
            font-size: clamp(0.85rem, 2vw, 0.95rem);
            line-height: 1.8;
        }
        
        .contact-form-card,
        .auth-form-card {
            background: var(--white);
            padding: clamp(25px, 5vw, 35px);
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border: 2px solid #f5f5f5;
            transition: all 0.3s ease;
        }
        
        .contact-form-card:hover,
        .auth-form-card:hover {
            box-shadow: 0 12px 35px rgba(0,0,0,0.15);
            border-color: var(--gold);
        }
        
        .contact-form-card h4,
        .auth-form-card h4 {
            color: var(--dark-brown);
            font-weight: 800;
            font-size: clamp(1.1rem, 4vw, 1.3rem);
            margin-bottom: 25px;
            letter-spacing: -0.3px;
        }
        
        .contact-form-card h4 i,
        .auth-form-card h4 i {
            color: var(--gold);
            margin-right: 10px;
        }
        
        .form-check-label {
            color: #666;
            font-size: 0.95rem;
            margin-left: 5px;
        }
        
        .form-check-label a {
            color: var(--gold);
            text-decoration: none;
            font-weight: 600;
        }
        
        .form-check-label a:hover {
            text-decoration: underline;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar-brand {
                margin-right: 10px;
            }
            
            .nav-link {
                margin: 3px 5px;
                font-size: 0.75rem;
            }
            
            .btn-auth {
                padding: 5px 10px;
                font-size: 0.7rem;
                margin-left: 2px;
            }
            
            .hero .btn {
                padding: 8px 16px;
                font-size: 0.8rem;
                margin: 6px;
            }
            
            .section-title::after {
                width: 60px;
            }
        }
        
        @media (max-width: 480px) {
            .navbar {
                padding: 10px 0;
            }
            
            .navbar-brand {
                font-size: 1.1rem;
            }
            
            .navbar-brand i {
                font-size: 1rem;
                padding: 4px 8px;
            }
            
            .nav-link {
                font-size: 0.7rem;
                margin: 2px 3px;
            }
            
            .btn-auth {
                font-size: 0.65rem;
                padding: 4px 8px;
            }
            
            .hero h1 {
                margin-bottom: 10px;
            }
            
            .hero p {
                margin-bottom: 20px;
            }
            
            .hero .btn {
                padding: 6px 14px;
                font-size: 0.7rem;
                margin: 4px;
            }
            
            .person-card {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-3 px-md-4">
            <a class="navbar-brand" href="#home">
                <i class="fas fa-book-open"></i> <span class="d-none d-sm-inline">Academy School</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#home" data-bs-toggle="collapse" data-bs-target="#navbarNav">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#vision" data-bs-toggle="collapse" data-bs-target="#navbarNav">VISION</a></li>
                    <li class="nav-item"><a class="nav-link" href="#teachers" data-bs-toggle="collapse" data-bs-target="#navbarNav">TEACHERS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#students" data-bs-toggle="collapse" data-bs-target="#navbarNav">STUDENTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" data-bs-toggle="collapse" data-bs-target="#navbarNav">CONTACT</a></li>
                    <li class="nav-item mt-2 mt-lg-0">
                        <button class="btn-auth" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt"></i> <span class="d-none d-sm-inline">LOGIN</span>
                        </button>
                    </li>
                    <li class="nav-item mt-2 mt-lg-0">
                        <button class="btn-auth" data-bs-toggle="modal" data-bs-target="#signupModal">
                            <i class="fas fa-user-plus"></i> <span class="d-none d-sm-inline">SIGNUP</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="container px-3 px-md-4">
                <h1><i class="fas fa-graduation-cap"></i> Welcome to Academy School</h1>
                <p>Empowering Minds, Shaping Futures - Quality Education Excellence</p>
                <button class="btn btn-hero-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                    <i class="fas fa-clipboard-list"></i> REGISTER
                </button>
                <button class="btn btn-hero-secondary">
                    <i class="fas fa-info-circle"></i> DISCOVER
                </button>
            </div>
        </div>
    </section>

    <!-- PRINCIPAL MESSAGE -->
    <section class="section principal-section" id="principal">
        <div class="container px-3 px-md-4">
            <h2 class="section-title">Principal's Message</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="principal-card">
                        <div class="principal-image">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Dr. Ahmad Ali Khan</h3>
                        <div class="position">Principal & Director</div>
                        <p>
                            "Education is the cornerstone of a prosperous future. At Academy School, we believe in nurturing not just brilliant minds, but also compassionate hearts. Our commitment to excellence, innovation, and holistic development ensures that every student becomes a responsible global citizen prepared to lead tomorrow's world."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VISION & GOALS -->
    <section class="section vision-goals" id="vision">
        <div class="container px-3 px-md-4">
            <h2 class="section-title">Our Vision & Goals</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-item">
                        <i class="fas fa-eye"></i>
                        <h4>Our Vision</h4>
                        <p>To be a beacon of academic excellence and character development, fostering confident, creative, and compassionate leaders equipped to excel in a dynamic global community and make meaningful contributions to society.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-item">
                        <i class="fas fa-bullseye"></i>
                        <h4>Our Goals</h4>
                        <p>✓ Excellence in academic achievement<br>✓ Leadership & critical thinking<br>✓ Creativity & innovation<br>✓ Moral & ethical values<br>✓ Global readiness</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEACHERS SECTION -->
    <section class="section people-section" id="teachers">
        <div class="container px-3 px-md-4">
            <h2 class="section-title">Meet Our Expert Educators</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="person-card">
                        <div class="person-image">
                            <i class="fas fa-chalkboard-user"></i>
                        </div>
                        <div class="person-info">
                            <h5>Mrs. Fatima Hassan</h5>
                            <p>English Literature</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="person-card">
                        <div class="person-image">
                            <i class="fas fa-chalkboard-user"></i>
                        </div>
                        <div class="person-info">
                            <h5>Mr. Muhammad Hasan</h5>
                            <p>Mathematics</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="person-card">
                        <div class="person-image">
                            <i class="fas fa-chalkboard-user"></i>
                        </div>
                        <div class="person-info">
                            <h5>Dr. Sarah Ahmed</h5>
                            <p>Science & Physics</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="person-card">
                        <div class="person-image">
                            <i class="fas fa-chalkboard-user"></i>
                        </div>
                        <div class="person-info">
                            <h5>Mr. Ali Khan</h5>
                            <p>History & Social Studies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STUDENTS SECTION -->
    <section class="section" id="students">
        <div class="container px-3 px-md-4">
            <h2 class="section-title">Our Brilliant Students</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="person-card">
                        <div class="person-image">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="person-info">
                            <h5>Mina Rashid</h5>
                            <p>Grade 10 - Sports Head</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="section contact-section" id="contact">
        <div class="container px-3 px-md-4">
            <h2 class="section-title">Get In Touch With Us</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5>Location</h5>
                        <p>Academy School Main Campus<br>Karachi, Sindh<br>Pakistan</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5>Phone Number</h5>
                        <p>Main: +92 (300) 123-4567<br>Office: +92 (21) 111-222-333<br>24/7 Support Available</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Email Address</h5>
                        <p>info@academyschool.edu<br>admission@academyschool.edu<br>support@academyschool.edu</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form & Auth Forms -->
            <div class="row mt-4">
                <!-- Contact Form -->
                <div class="col-lg-6 mb-4">
                    <div class="contact-form-card">
                        <h4><i class="fas fa-envelope"></i> Send us a Message</h4>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" placeholder="Enter your full name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Enter your phone number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <select class="form-control" required>
                                    <option value="">Select Subject</option>
                                    <option value="admission">Admission Inquiry</option>
                                    <option value="fees">Fees Information</option>
                                    <option value="curriculum">Curriculum Details</option>
                                    <option value="event">Event Registration</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit w-100">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Login Form -->
                <div class="col-lg-6 mb-4">
                    <div class="auth-form-card">
                        <h4><i class="fas fa-sign-in-alt"></i> User Login</h4>
                        <form id="loginForm">
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-submit w-100">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </button>
                            <hr>
                            <p class="text-center" style="font-size: 0.9rem; color: #666;">
                                Don't have an account? <a href="#" style="color: var(--gold); font-weight: 700;">Sign Up Here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="row mt-4">
                <div class="col-lg-6 offset-lg-3">
                    <div class="auth-form-card">
                        <h4><i class="fas fa-user-plus"></i> Create New Account</h4>
                        <form id="registerForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="First name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Enter your phone number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Role</label>
                                <select class="form-control" required>
                                    <option value="">Choose your role</option>
                                    <option value="student">Student</option>
                                    <option value="parent">Parent/Guardian</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="staff">Staff Member</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Create password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">
                                    I agree to the <a href="#" style="color: var(--gold);">Terms & Conditions</a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-submit w-100">
                                <i class="fas fa-check-circle"></i> Create Account
                            </button>
                            <hr>
                            <p class="text-center" style="font-size: 0.9rem; color: #666;">
                                Already have an account? <a href="#" style="color: var(--gold); font-weight: 700;">Login Here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container px-3 px-md-4">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5><i class="fas fa-graduation-cap"></i> Academy School</h5>
                    <p>Delivering quality education and shaping tomorrow's leaders with integrity, innovation, and excellence.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Quick Links</h5>
                    <p><a href="#home">Home</a></p>
                    <p><a href="#vision">Vision & Goals</a></p>
                    <p><a href="#teachers">Teachers</a></p>
                    <p><a href="#students">Students</a></p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Contact Information</h5>
                    <p><i class="fas fa-phone"></i> +92 (300) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> info@academyschool.edu</p>
                    <p><i class="fas fa-map-marker-alt"></i> Karachi, Sindh, Pakistan</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Academy School. All rights reserved. | Designed for Excellence</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-sign-in-alt"></i> Login</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-submit w-100">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-user-plus"></i> Sign Up</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select class="form-control" required>
                                <option value="">Select Role</option>
                                <option value="student">Student</option>
                                <option value="parent">Parent</option>
                                <option value="teacher">Teacher</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-submit w-100">
                            <i class="fas fa-user-plus"></i> Sign Up
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-clipboard-list"></i> Student Registration</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Student Name</label>
                            <input type="text" class="form-control" placeholder="Enter student name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Grade Level</label>
                            <select class="form-control" required>
                                <option value="">Select Grade</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                                <option value="11">Grade 11</option>
                                <option value="12">Grade 12</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Parent Email</label>
                            <input type="email" class="form-control" placeholder="Enter parent email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Enter phone number" required>
                        </div>
                        <button type="submit" class="btn btn-submit w-100">
                            <i class="fas fa-check-circle"></i> Register Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && document.querySelector(href)) {
                    e.preventDefault();
                    document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Add active state to nav links
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        });

        // Form submission handler
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your submission! We will contact you soon.');
                this.reset();
                const modal = bootstrap.Modal.getInstance(this.closest('.modal'));
                if (modal) modal.hide();
            });
        });
    </script>
</body>
</html>graduate"></i>
                        </div>
                        <div class="person-info">
                            <h5>Ahmed Malik</h5>
                            <p>Grade 10 - Distinction</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="person-card">
                        <div class="person-image">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="person-info">
                            <h5>Ayesha Khan</h5>
                            <p>Grade 9 - Honour Roll</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="person-card">
                        <div class="person-image">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="person-info">
                            <h5>Hassan Ali</h5>
                            <p>Grade 11 - Leadership</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="person-card">
                        <div class="person-image">
                            <i class="fas fa-user-