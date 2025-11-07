<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donor Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{ Route('index') }}">Blood Donation</a>
                 <li class="nav-item"><a class="nav-link" href="{{ Route('display') }}">Donors</a></li>
    </div>
  </nav>

  <div class="container my-5">
    <h2 class="text-center text-danger mb-4">Donor Registration Form</h2>

    <form id="donorForm" method="post" action="{{ route('update',$feedback->id) }}">
        @csrf
      <div class="row g-3">
        <div class="col-md-6"><input type="text" class="form-control" id="name" placeholder="Full Name" required name="fname" value="{{ $feedback->fname }}"></div>
        <div class="col-md-3"><input type="number" class="form-control" id="age" placeholder="Age" required name="age" value="{{ $feedback->age }}"></div>
        <div class="col-md-3">
          <select id="blood" class="form-control" required name="select" value="{{ $feedback->select }}">
            <option value="">Select Blood Group</option>
            <option>A+</option><option>A-</option><option>B+</option><option>B-</option>
            <option>O+</option><option>O-</option><option>AB+</option><option>AB-</option>
          </select>
        </div>
        <div class="col-md-6"><input type="email" id="email" class="form-control" placeholder="Email" required name="email" value="{{ $feedback->email }}"></div>
        <div class="col-md-6"><input type="text" id="phone" class="form-control" placeholder="Phone Number" required name="phone" value="{{ $feedback->phone }}"></div>
        <div class="col-12"><input type="text" id="location" class="form-control" placeholder="Location" required name="location" value="{{ $feedback->location }}"></div>
        <div class="col-12 text-center"><button class="btn btn-danger mt-3" type="submit">Update Record</button></div>
      </div>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
