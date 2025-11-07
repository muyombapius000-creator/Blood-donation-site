<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - BloodConnect | Saving Lives Through Blood Donation</title>
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
      background-color: #f8f9fa;
      color: #333;
      line-height: 1.7;
    }

    .navbar {
      background: linear-gradient(135deg, #dc3545, #a71d2a);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      letter-spacing: 0.5px;
    }
    
    .nav-link {
      font-weight: 500;
      padding: 0.5rem 1rem;
      transition: all 0.3s ease;
    }
    
    .nav-link:hover, .nav-link.active {
      transform: translateY(-2px);
      color: #fff !important;
    }

    .hero-section {
      background: linear-gradient(rgba(220, 53, 69, 0.85), rgba(165, 28, 48, 0.85)), url('/images/image3.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 6rem 0;
      margin-bottom: 4rem;
      text-align: center;
    }

    .hero-title {
      font-size: 3rem;
      font-weight: 700;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      margin-bottom: 1rem;
    }

    .hero-subtitle {
      font-size: 1.5rem;
      max-width: 700px;
      margin: 0 auto 2rem;
      opacity: 0.9;
    }

    .section-title {
      color: var(--primary-color);
      font-weight: 700;
      margin-bottom: 2rem;
      position: relative;
      display: inline-block;
      font-size: 2rem;
    }

    .section-title:after {
      content: '';
      position: absolute;
      width: 50%;
      height: 4px;
      background: linear-gradient(90deg, var(--primary-color), #ff6b6b);
      bottom: -10px;
      left: 0;
      border-radius: 2px;
    }

    .about-content {
      margin: 4rem 0;
    }

    .about-image {
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .about-image:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
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
      box-shadow: 0 20px 40px rgba(220, 53, 69, 0.15);
      border-color: rgba(220, 53, 69, 0.2);
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

    .feature-box h3 {
      color: var(--dark-color);
      margin-bottom: 1rem;
      font-weight: 600;
    }

    .feature-box p {
      color: #6c757d;
      margin-bottom: 0;
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
      width: 60px;
      height: 60px;
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

    .fact-card {
      background: white;
      border-radius: 15px;
      padding: 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      border: 1px solid rgba(220, 53, 69, 0.1);
      transition: all 0.3s ease;
    }

    .fact-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .fact-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 1rem;
      display: block;
    }

    .fact-title {
      font-weight: 600;
      margin-bottom: 1rem;
      color: var(--dark-color);
    }

    .eligibility-card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      margin-bottom: 2rem;
      transition: all 0.3s ease;
    }

    .eligibility-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .eligibility-card .card-header {
      background-color: var(--primary-color);
      color: white;
      font-weight: 600;
      border: none;
      padding: 1.25rem 1.5rem;
    }

    .eligibility-card .list-group-item {
      padding: 1rem 1.5rem;
      border-left: none;
      border-right: none;
      display: flex;
      align-items: center;
    }

    .eligibility-card .list-group-item i {
      color: var(--primary-color);
      margin-right: 10px;
      width: 24px;
      text-align: center;
    }

    .btn-donate-now {
      background: var(--primary-color);
      color: white;
      font-weight: 600;
      padding: 0.75rem 2.5rem;
      border-radius: 50px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
      border: none;
      font-size: 1.1rem;
      box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }

    .btn-donate-now:hover {
      background: #bb2d3b;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(220, 53, 69, 0.4);
      color: white;
    }

    .btn-donate-now i {
      margin-left: 8px;
      transition: transform 0.3s ease;
    }

    .btn-donate-now:hover i {
      transform: translateX(5px);
    }

    .text-primary-red {
      color: var(--primary-color);
    }

    .bg-light-red {
      background-color: #fff5f5;
    }

    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 0.5rem;
      line-height: 1;
    }

    .stat-label {
      font-size: 1.1rem;
      color: #6c757d;
      font-weight: 500;
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.2rem;
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
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">
        <i class="fas fa-heartbeat me-2"></i>BloodConnect
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('donor') }}">Donate Blood</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('display') }}">Find Donors</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 class="hero-title">About BloodConnect</h1>
      <p class="hero-subtitle">Connecting Generous Donors with Those in Need</p>
      <a href="{{ route('donor') }}" class="btn btn-light btn-lg px-4">
        <i class="fas fa-heart me-2"></i>Become a Donor
      </a>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-section py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h2 class="section-title">Our Mission</h2>
          <p class="lead">At BloodConnect, we believe that no one should die due to the unavailability of blood. Our mission is to create a bridge between voluntary blood donors and those in need of blood, ensuring that every patient has access to safe blood when they need it the most.</p>
          <p>Founded in 2023, BloodConnect has grown into a trusted platform connecting thousands of blood donors with recipients across the country. Our dedicated team works tirelessly to ensure that the process of blood donation is simple, efficient, and impactful.</p>
          <p>We partner with hospitals, blood banks, and healthcare organizations to maintain a steady supply of blood and save countless lives every day.</p>
        </div>
        <div class="col-lg-6">
          <img src="/images/image4.jpg" alt="Blood Donation" class="img-fluid about-image">
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-5 bg-light-red">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3 col-6 mb-4 mb-md-0">
          <div class="stat-number">10,000+</div>
          <div class="stat-label">Lives Saved</div>
        </div>
        <div class="col-md-3 col-6 mb-4 mb-md-0">
          <div class="stat-number">5,000+</div>
          <div class="stat-label">Active Donors</div>
        </div>
        <div class="col-md-3 col-6">
          <div class="stat-number">50+</div>
          <div class="stat-label">Partner Hospitals</div>
        </div>
        <div class="col-md-3 col-6">
          <div class="stat-number">24/7</div>
          <div class="stat-label">Support</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Donate Section -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">Why Donate Blood?</h2>
        <p class="lead">Your single donation can save up to three lives. Here's why your donation matters:</p>
      </div>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-heartbeat"></i>
            </div>
            <h3>Save Lives</h3>
            <p>Every blood donation can help save up to three lives. Your contribution makes a direct impact on someone's survival during emergencies, surgeries, and medical treatments.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-medal"></i>
            </div>
            <h3>Health Benefits</h3>
            <p>Regular blood donation helps reduce harmful iron stores, improves cardiovascular health, and stimulates the production of new blood cells.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-users"></i>
            </div>
            <h3>Community Impact</h3>
            <p>Join a community of heroes who are making a difference in people's lives every day. Your donation strengthens our healthcare system and brings hope to patients in need.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Donation Process Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">The Donation Process</h2>
        <p class="lead">Donating blood is simple, safe, and only takes about an hour. Here's what to expect:</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="process-step">
            <div class="step-number">1</div>
            <h3>Registration</h3>
            <p>Complete a simple registration form with your basic information and present a valid ID. Our staff will guide you through the process and answer any questions you may have.</p>
          </div>
          
          <div class="process-step">
            <div class="step-number">2</div>
            <h3>Health Screening</h3>
            <p>Undergo a quick and confidential health screening that includes checking your temperature, blood pressure, pulse, and hemoglobin levels to ensure you're eligible to donate.</p>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="process-step">
            <div class="step-number">3</div>
            <h3>Donation</h3>
            <p>The actual blood donation takes about 8-10 minutes. You'll be seated comfortably while approximately one pint of blood is collected using sterile, disposable equipment.</p>
          </div>
          
          <div class="process-step">
            <div class="step-number">4</div>
            <h3>Refresh & Recover</h3>
            <p>After donating, enjoy some light refreshments and rest for 10-15 minutes. You can return to your normal activities afterward, but avoid heavy lifting or vigorous exercise for the rest of the day.</p>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-5">
        <a href="{{ route('donor') }}" class="btn btn-donate-now">
          Register as a Donor <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Blood Facts Section -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">Amazing Blood Facts</h2>
        <p class="lead">Did you know these interesting facts about blood donation?</p>
      </div>
      
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="fact-card text-center">
            <span class="fact-number">2</span>
            <h4 class="fact-title">Seconds</h4>
            <p>Every 2 seconds, someone in the world needs blood.</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="fact-card text-center">
            <span class="fact-number">3</span>
            <h4 class="fact-title">Lives</h4>
            <p>One blood donation can save up to 3 lives.</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="fact-card text-center">
            <span class="fact-number">56</span>
            <h4 class="fact-title">Days</h4>
            <p>You can donate whole blood every 56 days.</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="fact-card text-center">
            <span class="fact-number">7%</span>
            <h4 class="fact-title">Of Body Weight</h4>
            <p>Blood makes up about 7% of your body weight.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Eligibility Section -->
  <section class="py-5 bg-light-red">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">Eligibility Requirements</h2>
        <p class="lead">Before you donate, please check if you meet these basic requirements</p>
      </div>
      
      <div class="row">
        <div class="col-lg-6 mb-4">
          <div class="eligibility-card">
            <div class="card-header">
              <i class="fas fa-check-circle me-2"></i> You can donate if you:
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fas fa-check text-success"></i> Are in good health and feeling well
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success"></i> Weigh at least 50 kg (110 lbs)
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success"></i> Are between 18-65 years old
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success"></i> Have not donated blood in the last 3 months
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success"></i> Have a valid ID with photo and proof of address
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-lg-6 mb-4">
          <div class="eligibility-card">
            <div class="card-header">
              <i class="fas fa-exclamation-triangle me-2"></i> You should wait to donate if you:
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fas fa-times text-danger"></i> Have a cold, flu, or other illness
              </li>
              <li class="list-group-item">
                <i class="fas fa-times text-danger"></i> Are pregnant or recently gave birth
              </li>
              <li class="list-group-item">
                <i class="fas fa-times text-danger"></i> Have had major surgery recently
              </li>
              <li class="list-group-item">
                <i class="fas fa-times text-danger"></i> Have traveled to certain countries
              </li>
              <li class="list-group-item">
                <i class="fas fa-times text-danger"></i> Have certain medical conditions
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-4">
        <p class="mb-4">Not sure if you're eligible? Contact us for more information about donation requirements.</p>
        <a href="#" class="btn btn-outline-danger btn-lg">
          <i class="fas fa-envelope me-2"></i>Contact Us
        </a>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-5 text-center" style="background: linear-gradient(rgba(220, 53, 69, 0.9), rgba(165, 28, 48, 0.9)), url('/images/image5.jpg'); background-size: cover; background-position: center; color: white;">
    <div class="container">
      <h2 class="display-5 fw-bold mb-4">Ready to Make a Difference?</h2>
      <p class="lead mb-5" style="max-width: 700px; margin: 0 auto;">Join our community of life-savers today and help us ensure that no one has to suffer due to the unavailability of blood.</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="{{ route('donor') }}" class="btn btn-light btn-lg px-4">
          <i class="fas fa-heart me-2"></i>Become a Donor
        </a>
        <a href="{{ route('display') }}" class="btn btn-outline-light btn-lg px-4">
          <i class="fas fa-search me-2"></i>Find Donors
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start">
          <h5><i class="fas fa-heartbeat me-2"></i>BloodConnect</h5>
          <p class="mb-0">Connecting donors with those in need since 2023</p>
        </div>
        <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
          <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <hr class="my-3">
      <div class="text-center">
        <p class="mb-0">&copy; 2025 BloodConnect. All rights reserved.</p>
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
        const elements = document.querySelectorAll('.feature-box, .fact-card, .process-step');
        
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
      const animatedElements = document.querySelectorAll('.feature-box, .fact-card, .process-step');
      animatedElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      });
      
      // Run once on load
      animateOnScroll();
      
      // Run on scroll
      window.addEventListener('scroll', animateOnScroll);
    });
  </script>
</body>
</html>
