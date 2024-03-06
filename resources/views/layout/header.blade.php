<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maids</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Define hover effect for anchor tags */
    .navbar-light .navbar-nav .nav-link {
      margin-right: 15 px; /* Add space between anchor tags */
      position: relative;
      color: #333; /* Change text color */
    }

    .navbar-light .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: #007bff; /* Change hover underline color */
      transition: width 0.3s ease;
    }

    .navbar-light .navbar-nav .nav-link:hover::after {
      width: 100%;
    }

    /* Add fixed position to navbar */
    .navbar.fixed-top {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      background-color: #3498db; /* Change background color to a blueish tone */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow */
    }

    /* Add margin to body when navbar is fixed to prevent content from being hidden */
    body.navbar-fixed {
      margin-top: 56px; /* Adjust based on your navbar height */
    }

    /* Center the navigation links */
    .navbar-nav {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
    }

    /* Adjust spacing between navigation links */
    .navbar-nav .nav-link {
      margin: 0 15px;
    }

    /* Make the navigation links responsive */
    @media (max-width: 768px) {
      .navbar-nav .nav-link {
        margin: 0 5px;
      }
    }
  </style>
</head>
<body>

<div class="shadow p-1 mb-5 bg-white rounded">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse font-weight-bold" id="navbarNavAltMarkup">
            <div  class="navbar-nav d-flex justify-content-start">
                <a class="nav-item nav-link text-dark " href="{{ route('display') }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-dark" href="{{ route('show') }}">Maids</a>
                <a class="nav-item nav-link text-dark " href="{{ route('booking.index') }}">Book</a>
            </div>
            <!-- Logout button at the end -->
            <div class="navbar-nav  d-flex justify-content-end">
                <a class="nav-item nav-link text-dark" href="{{ route('main') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
