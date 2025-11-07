<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Become a Blood Donor - Save Lives</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #dc3545;
      --secondary-color: #f8d7da;
      --dark-color: #343a40;
    }
    
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
    
    .nav-link:hover {
      transform: translateY(-2px);
    }
    
    .donor-hero {
      background: linear-gradient(rgba(220, 53, 69, 0.9), rgba(165, 28, 48, 0.9)), url('/images/image7.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 4rem 0;
      margin-bottom: 3rem;
      border-radius: 10px;
    }
    
    .form-container {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      padding: 2.5rem;
      margin-bottom: 3rem;
    }
    
    .form-control, .form-select {
      padding: 0.75rem 1rem;
      border: 1px solid #dee2e6;
      border-radius: 8px;
      transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    }
    
    .btn-donor {
      background-color: var(--primary-color);
      color: white;
      font-weight: 600;
      padding: 0.75rem 2rem;
      border-radius: 50px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
      border: none;
    }
    
    .btn-donor:hover {
      background-color: #bb2d3b;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }
    
    .benefits {
      background-color: var(--secondary-color);
      border-radius: 10px;
      padding: 2rem;
      margin-top: 2rem;
    }
    
    .benefit-item {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
    }
    
    .benefit-icon {
      background-color: var(--primary-color);
      color: white;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 1rem;
      flex-shrink: 0;
    }
    
    .section-title {
      color: var(--primary-color);
      font-weight: 700;
      margin-bottom: 1.5rem;
      position: relative;
      display: inline-block;
    }
    
    .section-title:after {
      content: '';
      position: absolute;
      width: 50%;
      height: 3px;
      background-color: var(--primary-color);
      bottom: -8px;
      left: 0;
      border-radius: 3px;
    }
    
    .form-label {
      font-weight: 500;
      color: var(--dark-color);
      margin-bottom: 0.5rem;
    }
    
    .required-field:after {
      content: ' *';
      color: var(--primary-color);
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
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('donor') }}">Donate Blood</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('display') }}">Find Donors</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="container mt-4">
    <div class="donor-hero text-center p-5 rounded">
      <h1 class="display-4 fw-bold mb-3">Become a Life Saver</h1>
      <p class="lead mb-4">Your single donation can save up to 3 lives. Join our community of heroes today!</p>
      <a href="#donationForm" class="btn btn-light btn-lg px-4">Register Now</a>
    </div>
  </div>

  <!-- Registration Form -->
  <div class="container" id="donationForm">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="form-container">
          <h2 class="section-title mb-4">Donor Registration</h2>
          <p class="text-muted mb-4">Please fill in your details to join our donor network. All fields are required.</p>
          
          <form id="donorForm" method="post" action="{{ route('feedback.store') }}" class="needs-validation" novalidate>
            @csrf
            
            <div class="row g-3">
              <!-- Full Name -->
              <div class="col-md-6">
                <label for="name" class="form-label required-field">Full Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <input type="text" class="form-control" id="name" placeholder="John Doe" required name="fname" pattern="[A-Za-z\s]+" minlength="3">
                  <div class="invalid-feedback">
                    Please enter a valid name (letters and spaces only).
                  </div>
                </div>
              </div>
              
              <!-- Age -->
              <div class="col-md-3">
                <label for="age" class="form-label required-field">Age</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                  <input type="number" class="form-control" id="age" placeholder="18-65" required name="age" min="18" max="65">
                  <div class="invalid-feedback">
                    Age must be between 18 and 65 years.
                  </div>
                </div>
              </div>
              
              <!-- Blood Group -->
              <div class="col-md-3">
                <label for="blood" class="form-label required-field">Blood Group</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-tint"></i></span>
                  <select id="blood" class="form-select" required name="select">
                    <option value="" selected disabled>Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select your blood group.
                  </div>
                </div>
              </div>
              
              <!-- Email -->
              <div class="col-md-6">
                <label for="email" class="form-label required-field">Email</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  <input type="email" id="email" class="form-control" placeholder="your@email.com" required name="email">
                  <div class="invalid-feedback">
                    Please enter a valid email address.
                  </div>
                </div>
              </div>
              
              <!-- Phone -->
              <div class="col-md-6">
                <label for="phone" class="form-label required-field">Phone Number</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  <input type="tel" id="phone" class="form-control" placeholder="+1 (123) 456-7890" required name="phone" pattern="[0-9+\-\s()]+" minlength="10">
                  <div class="invalid-feedback">
                    Please enter a valid phone number.
                  </div>
                </div>
              </div>
              
              <!-- Location -->
              <div class="col-12">
                <label for="location" class="form-label required-field">Address</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                  <input type="text" id="location" class="form-control" placeholder="Your full address" required name="location">
                  <div class="invalid-feedback">
                    Please provide your location.
                  </div>
                </div>
              </div>
              
              <!-- Health Declaration -->
              <div class="col-12 mt-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="healthDeclaration" required>
                  <label class="form-check-label" for="healthDeclaration">
                    I confirm that I am in good health and meet all donor eligibility requirements.
                  </label>
                  <div class="invalid-feedback">
                    You must agree to the health declaration.
                  </div>
                </div>
              </div>
              
              <!-- Submit Button -->
              <div class="col-12 text-center mt-4">
                <button class="btn btn-donor btn-lg" type="submit">
                  <i class="fas fa-heart me-2"></i>Register as Donor
                </button>
              </div>
            </div>
          </form>
        </div>
        
        <!-- Benefits Section -->
        <div class="benefits">
          <h3 class="section-title">Why Donate Blood?</h3>
          <div class="benefit-item">
            <div class="benefit-icon">
              <i class="fas fa-heartbeat"></i>
            </div>
            <div>
              <h5 class="mb-1">Saves Lives</h5>
              <p class="mb-0 text-muted">Your donation can save up to 3 lives.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon">
              <i class="fas fa-stethoscope"></i>
            </div>
            <div>
              <h5 class="mb-1">Free Health Check</h5>
              <p class="mb-0 text-muted">Get a mini health screening before donation.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon">
              <i class="fas fa-award"></i>
            </div>
            <div>
              <h5 class="mb-1">Become a Hero</h5>
              <p class="mb-0 text-muted">Join our community of life-savers.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4 mt-5">
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
  
  <!-- Form Validation -->
  <script>
    // Form validation
    (function () {
      'use strict'
      
      // Fetch the form we want to apply custom Bootstrap validation styles to
      var form = document.querySelector('.needs-validation')
      
      // Prevent submission if form is invalid
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        
        form.classList.add('was-validated')
      }, false)
      
      // Phone number formatting
      const phoneInput = document.getElementById('phone');
      phoneInput.addEventListener('input', function (e) {
        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
      });
    })()
  </script>
</body>
</html>
