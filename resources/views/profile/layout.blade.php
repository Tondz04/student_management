<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
      body {
        padding-top: 10%;
        background-image: url('{{ asset('image/Buildings.jpg') }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
      }

      .footer {
        position: relative;
        bottom: 0;
        width: 100%;
        height: 60px;
        background-color: rgba(255, 255, 255, 0.8); /* Slight transparency */
      }

      .container {
        z-index: 1;
      }

      .navbar-dark .navbar-nav .nav-link {
        color: white; /* Ensure navbar items are visible on background */
      }

      .navbar-dark .navbar-brand {
        color: white; /* Ensure brand name is visible */
      }

      .navbar-dark .navbar-toggler-icon {
        background-color: white; /* Make the toggler icon visible */
      }

      
    </style>
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand ms-3" href="{{ route('students.index') }}">Student Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-5 ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fa-solid fa-house"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer -->
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

    <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted">© 2025 Student Management System</span>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
