<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BloodConnect | Donate Blood, Save Lives</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #dc3545;
      --secondary-color: #f8d7da;
      --dark-color: #343a40;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      line-height: 1.7;
    }

    .navbar {
      background: linear-gradient(135deg, #dc3545, #a71d2a);
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      padding: 1rem 0;
    }
    
    .navbar-brand {
      font-weight: 700;
      font-size: 1.8rem;
      letter-spacing: 0.5px;
      display: flex;
      align-items: center;
    }
    
    .navbar-brand i {
      margin-right: 10px;
      font-size: 1.5rem;
    }
    
    .nav-link {
      font-weight: 500;
      padding: 0.5rem 1.2rem !important;
      transition: all 0.3s ease;
      position: relative;
    }
    
    .nav-link:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 1.2rem;
      background-color: white;
      transition: width 0.3s ease;
    }
    
    .nav-link:hover:after,
    .nav-link.active:after {
      width: calc(100% - 2.4rem);
    }
    
    .hero-section {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/image1.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: white;
      padding: 8rem 0;
      text-align: center;
      position: relative;
    }
    
    .hero-title {
      font-size: 3.5rem;
      font-weight: 800;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }
    
    .hero-subtitle {
      font-size: 1.5rem;
      margin-bottom: 2.5rem;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }
    
    .btn-hero {
      padding: 0.8rem 2.5rem;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 50px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }
    
    .btn-hero:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
      z-index: -1;
    }
    
    .btn-hero:hover:before {
      width: 100%;
    }
    
    .section-title {
      position: relative;
      display: inline-block;
      margin-bottom: 3rem;
      font-weight: 700;
      color: var(--dark-color);
    }
    
    .section-title:after {
      content: '';
      position: absolute;
      width: 60%;
      height: 4px;
      background: linear-gradient(90deg, var(--primary-color), #ff6b6b);
      bottom: -12px;
      left: 0;
      border-radius: 2px;
    }
    
    .feature-box {
      text-align: center;
      padding: 2.5rem 1.5rem;
      border-radius: 15px;
      background-color: white;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      margin-bottom: 2rem;
      transition: all 0.3s ease;
      height: 100%;
      border: 1px solid rgba(220, 53, 69, 0.1);
    }
    
    .feature-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(220, 53, 69, 0.15);
    }
    
    .feature-icon {
      font-size: 2.5rem;
      color: var(--primary-color);
      margin-bottom: 1.5rem;
      background: rgba(220, 53, 69, 0.1);
      width: 80px;
      height: 80px;
      line-height: 80px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }
    
    .feature-box:hover .feature-icon {
      background: var(--primary-color);
      color: white;
      transform: scale(1.1);
    }
    
    .process-step {
      position: relative;
      padding-left: 90px;
      margin-bottom: 3rem;
    }
    
    .step-number {
      position: absolute;
      left: 0;
      top: 0;
      width: 70px;
      height: 70px;
      background: var(--primary-color);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      font-weight: 700;
      box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }
    
    .blood-type-card {
      text-align: center;
      padding: 1.5rem;
      border-radius: 10px;
      background: white;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      border: 2px solid #f0f0f0;
    }
    
    .blood-type-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(220, 53, 69, 0.2);
      border-color: var(--primary-color);
    }
    
    .blood-type {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 0.5rem;
    }
    
    .blood-donors {
      color: #6c757d;
      font-size: 0.9rem;
    }
    
    .cta-section {
      background: linear-gradient(rgba(220, 53, 69, 0.9), rgba(165, 28, 48, 0.9)), url('/images/image2.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: white;
      padding: 5rem 0;
      text-align: center;
    }
    
    .cta-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }
    
    .cta-text {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto 2.5rem;
    }
    
    .btn-cta {
      background: white;
      color: var(--primary-color);
      font-weight: 600;
      padding: 0.8rem 2.5rem;
      border-radius: 50px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    
    .btn-cta:hover {
      background: #f8f9fa;
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    
    footer {
      background: #1a1a1a;
      color: #fff;
      padding: 3rem 0 1.5rem;
    }
    
    .footer-logo {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      display: inline-block;
    }
    
    .footer-links h5 {
      color: #fff;
      font-weight: 600;
      margin-bottom: 1.5rem;
      position: relative;
      padding-bottom: 10px;
    }
    
    .footer-links h5:after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 50px;
      height: 2px;
      background: var(--primary-color);
    }
    
    .footer-links ul {
      list-style: none;
      padding: 0;
    }
    
    .footer-links li {
      margin-bottom: 10px;
    }
    
    .footer-links a {
      color: #adb5bd;
      transition: all 0.3s ease;
      text-decoration: none;
    }
    
    .footer-links a:hover {
      color: #fff;
      padding-left: 5px;
    }
    
    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      margin-right: 10px;
      color: #fff;
      transition: all 0.3s ease;
    }
    
    .social-links a:hover {
      background: var(--primary-color);
      transform: translateY(-3px);
    }
    
    .copyright {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 1.5rem;
      margin-top: 3rem;
      text-align: center;
      color: #adb5bd;
      font-size: 0.9rem;
    }
    
    @media (max-width: 991.98px) {
      .hero-title {
        font-size: 2.5rem;
      }
      
      .hero-subtitle {
        font-size: 1.2rem;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
      
      .process-step {
        padding-left: 70px;
      }
      
      .step-number {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
      }
    }
    
    @media (max-width: 767.98px) {
      .hero-section {
        padding: 6rem 0;
      }
      
      .hero-title {
        font-size: 2rem;
      }
      
      .hero-subtitle {
        font-size: 1.1rem;
      }
      
      .cta-title {
        font-size: 2rem;
      }
      
      .cta-text {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ Route('index') }}">
        <i class="fas fa-heartbeat"></i>BloodConnect
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="{{ Route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ Route('about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ Route('donor') }}">Donate Blood</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ Route('display') }}">Find Donors</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 class="hero-title">Donate Blood, Save Lives</h1>
      <p class="hero-subtitle">Your single donation can save up to three lives. Join us in making a difference today.</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="{{ Route('donor') }}" class="btn btn-light btn-lg btn-hero">
          <i class="fas fa-heart me-2"></i>Become a Donor
        </a>
        <a href="{{ Route('display') }}" class="btn btn-outline-light btn-lg btn-hero">
          <i class="fas fa-search me-2"></i>Find Donors
        </a>
      </div>
    </div>
  </section>

  <!-- Why Donate Section -->
  <section class="py-5 bg-light">
    <div class="container py-5">
      <div class="text-center mb-5">
        <h2 class="section-title">Why Donate Blood?</h2>
        <p class="text-muted">Your blood donation can make a life-saving difference</p>
      </div>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-heartbeat"></i>
            </div>
            <h3>Save Lives</h3>
            <p>Your blood donation can help save up to three lives. Every drop counts in emergencies, surgeries, and medical treatments.</p>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-medal"></i>
            </div>
            <h3>Health Benefits</h3>
            <p>Donating blood helps reduce harmful iron stores, improves cardiovascular health, and stimulates the production of new blood cells.</p>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-hands-helping"></i>
            </div>
            <h3>Community Impact</h3>
            <p>Join a community of heroes making a difference. Your donation strengthens our healthcare system and brings hope to those in need.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="py-5">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="/images/image3.jpg" alt="Blood Donation Process" class="img-fluid rounded shadow">
        </div>
        <div class="col-lg-6">
          <h2 class="section-title">How It Works</h2>
          <p class="text-muted mb-4">The donation process is simple, safe, and takes about an hour of your time.</p>
          
          <div class="process-step">
            <div class="step-number">1</div>
            <h4>Registration</h4>
            <p>Complete a simple registration form with your basic information and present a valid ID.</p>
          </div>
          
          <div class="process-step">
            <div class="step-number">2</div>
            <h4>Health Screening</h4>
            <p>Undergo a quick health check including temperature, blood pressure, and hemoglobin test.</p>
          </div>
          
          <div class="process-step">
            <div class="step-number">3</div>
            <h4>Donation</h4>
            <p>Donate one pint of blood in about 8-10 minutes using sterile, single-use equipment.</p>
          </div>
          
          <div class="process-step">
            <div class="step-number">4</div>
            <h4>Refresh & Recover</h4>
            <p>Enjoy light refreshments and rest for 10-15 minutes before resuming your day.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Blood Types Section -->
  <section class="py-5 bg-light">
    <div class="container py-5">
      <div class="text-center mb-5">
        <h2 class="section-title">Blood Types</h2>
        <p class="text-muted">All blood types are needed to ensure a reliable supply for patients</p>
      </div>
      
      <div class="row g-4">
        <div class="col-6 col-md-3">
          <div class="blood-type-card">
            <div class="blood-type">A+</div>
            <div class="blood-donors">32% of population</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="blood-type-card">
            <div class="blood-type">A-</div>
            <div class="blood-donors">6% of population</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="blood-type-card">
            <div class="blood-type">B+</div>
            <div class="blood-donors">9% of population</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="blood-type-card">
            <div class="blood-type">B-</div>
            <div class="blood-donors">2% of population</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="blood-type-card">
            <div class="blood-type">AB+</div>
            <div class="blood-donors">3% of population</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="blood-type-card">
            <div class="blood-type">AB-</div>
            <div class="blood-donors">1% of population</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="blood-type-card">
            <div class="blood-type">O+</div>
            <div class="blood-donors">37% of population</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="blood-type-card">
            <div class="blood-type">O-</div>
            <div class="blood-donors">6% of population</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2 class="cta-title">Ready to Make a Difference?</h2>
      <p class="cta-text">Join thousands of donors who are saving lives every day. Your single donation can help up to three people in need.</p>
      <a href="{{ Route('donor') }}" class="btn btn-light btn-lg btn-cta">
        <i class="fas fa-tint me-2"></i>Donate Now
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <a href="{{ Route('index') }}" class="footer-logo">
            <i class="fas fa-heartbeat me-2"></i>BloodConnect
          </a>
          <p class="text-muted">Connecting generous blood donors with those in need. Together, we can save lives.</p>
          <div class="social-links mt-4">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-4">
          <div class="footer-links">
            <h5>Quick Links</h5>
            <ul>
              <li><a href="{{ Route('index') }}">Home</a></li>
              <li><a href="{{ Route('about') }}">About Us</a></li>
              <li><a href="{{ Route('donor') }}">Donate Blood</a></li>
              <li><a href="{{ Route('display') }}">Find Donors</a></li>
              <li><a href="#">Eligibility</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-4">
          <div class="footer-links">
            <h5>Blood Info</h5>
            <ul>
              <li><a href="#">Blood Donation Process</a></li>
              <li><a href="#">Blood Types</a></li>
              <li><a href="#">Donation FAQs</a></li>
              <li><a href="#">Donor Health</a></li>
              <li><a href="#">Blood Donation Tips</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-4">
          <div class="footer-links">
            <h5>Contact Us</h5>
            <ul class="contact-info">
              <li><i class="fas fa-map-marker-alt me-2"></i> 123 Blood Drive, Nairobi, Kenya</li>
              <li><i class="fas fa-phone-alt me-2"></i> +254 700 000000</li>
              <li><i class="fas fa-envelope me-2"></i> info@bloodconnect.org</li>
              <li><i class="fas fa-clock me-2"></i> Mon - Sat: 8:00 AM - 8:00 PM</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="copyright">
        <p class="mb-0">&copy; 2025 BloodConnect. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Custom Scripts -->
  <script>
    // Add animation to elements when they come into view
    document.addEventListener('DOMContentLoaded', function() {
      const animateOnScroll = function() {
        const elements = document.querySelectorAll('.feature-box, .process-step, .blood-type-card');
        
        elements.forEach(element => {
          const elementTop = element.getBoundingClientRect().top;
          const windowHeight = window.innerHeight;
          
          if (elementTop < windowHeight - 100) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
          }
        });
      };
      
      // Set initial state for animation
      const animatedElements = document.querySelectorAll('.feature-box, .process-step, .blood-type-card');
      animatedElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      });
      
      // Run once on load
      animateOnScroll();
      
      // Run on scroll
      window.addEventListener('scroll', animateOnScroll);
      
      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          
          const targetId = this.getAttribute('href');
          if (targetId === '#') return;
          
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop - 80,
              behavior: 'smooth'
            });
          }
        });
      });
    });
  </script>
</body>
</html>
