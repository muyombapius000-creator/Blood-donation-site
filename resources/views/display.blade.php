<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find Blood Donors | BloodConnect</title>
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

    .page-header {
      background: linear-gradient(rgba(220, 53, 69, 0.85), rgba(165, 28, 48, 0.85)), url('/images/image6.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 5rem 0;
      margin-bottom: 3rem;
      text-align: center;
    }

    .page-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .page-subtitle {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto 2rem;
      opacity: 0.9;
    }

    .donor-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      margin-bottom: 2rem;
      overflow: hidden;
      border: none;
    }

    .donor-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(220, 53, 69, 0.15);
    }

    .donor-header {
      background-color: var(--primary-color);
      color: white;
      padding: 1.5rem;
      text-align: center;
      position: relative;
    }

    .blood-group {
      background: white;
      color: var(--primary-color);
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      font-weight: 700;
      margin: -40px auto 1rem;
      border: 4px solid white;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .donor-name {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .donor-location {
      color: #6c757d;
      margin-bottom: 0.5rem;
    }

    .donor-info {
      padding: 1.5rem;
    }

    .info-item {
      display: flex;
      margin-bottom: 0.8rem;
      align-items: center;
    }

    .info-item i {
      width: 24px;
      color: var(--primary-color);
      margin-right: 10px;
      text-align: center;
    }

    .info-label {
      font-weight: 500;
      color: #6c757d;
      min-width: 100px;
    }

    .info-value {
      font-weight: 500;
    }

    .btn-contact {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 0.5rem 1.5rem;
      border-radius: 50px;
      font-weight: 500;
      transition: all 0.3s ease;
      width: 100%;
      margin-top: 1rem;
    }

    .btn-contact:hover {
      background-color: #bb2d3b;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }

    .search-container {
      background: white;
      border-radius: 10px;
      padding: 1.5rem;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      margin-bottom: 2rem;
    }

    .filter-title {
      color: var(--primary-color);
      font-weight: 600;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
    }

    .filter-title i {
      margin-right: 8px;
    }

    .form-select {
      border-radius: 8px;
      padding: 0.75rem 1rem;
      border: 1px solid #dee2e6;
    }

    .form-select:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    }

    .no-donors {
      text-align: center;
      padding: 3rem;
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .no-donors i {
      font-size: 4rem;
      color: #dc3545;
      margin-bottom: 1.5rem;
      opacity: 0.7;
    }

    .no-donors h3 {
      color: var(--primary-color);
      margin-bottom: 1rem;
    }

    .no-donors p {
      color: #6c757d;
      margin-bottom: 1.5rem;
    }

    .btn-become-donor {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 0.75rem 2rem;
      border-radius: 50px;
      font-weight: 500;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .btn-become-donor:hover {
      background-color: #bb2d3b;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }

    .pagination {
      justify-content: center;
      margin-top: 2rem;
    }

    .page-link {
      color: var(--primary-color);
      border: 1px solid #dee2e6;
      margin: 0 5px;
      border-radius: 8px !important;
      transition: all 0.3s ease;
    }

    .page-link:hover {
      background-color: var(--primary-color);
      color: white;
      border-color: var(--primary-color);
    }

    .page-item.active .page-link {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }

    @media (max-width: 768px) {
      .page-header {
        padding: 3rem 1rem;
      }
      
      .page-title {
        font-size: 2rem;
      }
      
      .donor-card {
        margin-bottom: 2rem;
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
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('donor') }}">Donate Blood</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('display') }}">Find Donors</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="page-header">
    <div class="container">
      <h1 class="page-title">Find Blood Donors</h1>
      <p class="page-subtitle">Connect with our community of blood donors. Your search for the right blood type ends here.</p>
    </div>
  </header>

  <div class="container">
    <!-- Search and Filter -->
    <div class="search-container">
      <div class="row g-3">
        <div class="col-md-4">
          <h4 class="filter-title"><i class="fas fa-tint"></i> Blood Type</h4>
          <select class="form-select" id="bloodTypeFilter">
            <option value="">All Blood Types</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
        </div>
        <div class="col-md-4">
          <h4 class="filter-title"><i class="fas fa-map-marker-alt"></i> Location</h4>
          <input type="text" class="form-control" id="locationFilter" placeholder="Enter city or area">
        </div>
        <div class="col-md-4">
          <h4 class="filter-title"><i class="fas fa-sort-amount-down"></i> Sort By</h4>
          <select class="form-select" id="sortBy">
            <option value="recent">Most Recent</option>
            <option value="name">Name (A-Z)</option>
            <option value="blood">Blood Type</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Donors Grid -->
    <div class="row" id="donorsGrid">
      <!-- Donor cards will be dynamically inserted here -->
      @if(isset($donors) && count($donors) > 0)
        @foreach($donors as $donor)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="donor-card h-100">
              <div class="donor-header">
                <div class="blood-group">{{ $donor->select ?? 'A+' }}</div>
                <h3 class="donor-name">{{ $donor->fname ?? 'John Doe' }}</h3>
                <div class="donor-location">
                  <i class="fas fa-map-marker-alt me-1"></i> {{ $donor->location ?? 'Nairobi, Kenya' }}
                </div>
              </div>
              <div class="donor-info">
                <div class="info-item">
                  <i class="fas fa-birthday-cake"></i>
                  <span class="info-label">Age:</span>
                  <span class="info-value">{{ $donor->age ?? '30' }} years</span>
                </div>
                <div class="info-item">
                  <i class="fas fa-phone"></i>
                  <span class="info-label">Phone:</span>
                  <span class="info-value">{{ $donor->phone ?? '+254 700 000000' }}</span>
                </div>
                <div class="info-item">
                  <i class="fas fa-envelope"></i>
                  <span class="info-label">Email:</span>
                  <span class="info-value text-truncate d-inline-block" style="max-width: 150px;">
                    {{ $donor->email ?? 'johndoe@example.com' }}
                  </span>
                </div>
                <div class="info-item">
                  <i class="fas fa-clock"></i>
                  <span class="info-label">Last Donated:</span>
                  <span class="info-value">2 months ago</span>
                </div>
                <button class="btn btn-contact">
                  <i class="fas fa-comment-dots me-2"></i>Send Message
                </button>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <div class="col-12">
          <div class="no-donors">
            <i class="fas fa-user-slash"></i>
            <h3>No Donors Found</h3>
            <p>We couldn't find any donors matching your criteria. Please try different filters or check back later.</p>
            <a href="{{ route('donor') }}" class="btn btn-become-donor">
              <i class="fas fa-heart me-2"></i>Become a Donor
            </a>
          </div>
        </div>
      @endif
    </div>

    <!-- Pagination -->
    <nav aria-label="Donor pagination">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
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
  
  <!-- Custom Scripts -->
  <script>
    // Filter functionality
    document.addEventListener('DOMContentLoaded', function() {
      const bloodTypeFilter = document.getElementById('bloodTypeFilter');
      const locationFilter = document.getElementById('locationFilter');
      const sortBy = document.getElementById('sortBy');
      const donorCards = document.querySelectorAll('.donor-card');
      
      // Filter function
      function filterDonors() {
        const bloodType = bloodTypeFilter.value.toLowerCase();
        const location = locationFilter.value.toLowerCase();
        
        donorCards.forEach(card => {
          const cardBloodType = card.querySelector('.blood-group').textContent.trim().toLowerCase();
          const cardLocation = card.querySelector('.donor-location').textContent.toLowerCase();
          
          const bloodMatch = !bloodType || cardBloodType === bloodType;
          const locationMatch = !location || cardLocation.includes(location);
          
          if (bloodMatch && locationMatch) {
            card.closest('.col-lg-4').style.display = '';
          } else {
            card.closest('.col-lg-4').style.display = 'none';
          }
        });
        
        // Show no results message if no cards are visible
        const visibleCards = document.querySelectorAll('.col-lg-4[style=""]');
        const noResults = document.querySelector('.no-donors');
        
        if (visibleCards.length === 0 && noResults) {
          noResults.closest('.col-12').style.display = '';
        } else if (noResults) {
          noResults.closest('.col-12').style.display = 'none';
        }
      }
      
      // Add event listeners
      bloodTypeFilter.addEventListener('change', filterDonors);
      locationFilter.addEventListener('input', filterDonors);
      sortBy.addEventListener('change', filterDonors);
    });
  </script>
</body>
</html>
          </tr>
        </thead>
        <tbody>
          @forelse ($feedbacks as $feedback)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $feedback->fname }}</td>
              <td>{{ $feedback->age }}</td>
              <td>{{ $feedback->select }}</td>
              <td>{{ $feedback->email }}</td>
              <td>{{ $feedback->phone }}</td>
              <td>{{ $feedback->location }}</td>
  <td>
<form action="{{ Route('feedback.destroy'  , $feedback->id) }}" method="post" style="display:inline;">
    @csrf
    @method('DELETE')
    <button 
        type="submit" 
        style="
            background-color: #dc3545; 
            color: white; 
            border: none; 
            padding: 8px 16px; 
            border-radius: 6px; 
            cursor: pointer; 
            font-size: 14px; 
            transition: background 0.3s ease;
        " 
        onmouseover="this.style.backgroundColor='#b52a38'" 
        onmouseout="this.style.backgroundColor='#dc3545'">
        Delete
    </button>
</form>

              </td>
              <td>
                <a href="{{ Route('edit',$feedback->id) }}">Edit</a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="7" class="text-muted">No donors have registered yet.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="text-center mt-4">
      <a href="{{ route('index') }}" class="btn-back">← Back to Home</a>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Blood Donation System | All Rights Reserved</p>
  </footer>
</body>
</html>
