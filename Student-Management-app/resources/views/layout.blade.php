<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Full-page background color */
        body {
            background-color: #f8f9fa;  /* Light gray background color */
        }

        /* Sidebar background color */
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #343a40;  /* Dark gray background color */
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: #ffffff;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #28a745;  /* Green background for the active link */
            color: #ffffff;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: #ffffff;
        }

        /* Page content */
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        /* Navbar background color */
        .navbar {
            background-color: #007bff;  /* Blue background for the navbar */
            color: #ffffff;
        }

        /* Card background color */
        .card {
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;  /* White background for the card */
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: #ffffff;
            border-bottom: 2px solid #0056b3;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
        }

        .card-header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        /* Table header background color */
        .table thead th {
            background-color: #343a40;  /* Dark gray for table headers */
            color: #ffffff;  /* White text for contrast */
        }

        /* Buttons */
        .btn {
            border-radius: 5px;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-sm {
            padding: 6px 10px;
            font-size: 12px;
        }

        .btn-success {
            background-color: #28a745;  /* Green background for the success button */
        }

        .btn-info {
            background-color: #17a2b8;  /* Teal background for the info button */
        }

        .btn-primary {
            background-color: #007bff;  /* Blue background for the primary button */
        }

        .btn-danger {
            background-color: #dc3545;  /* Red background for the danger button */
        }

        /* Button hover effects */
        .btn:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"><h2>Teacher Management System<h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                    <a class="active" href="#home">Home</a>
                    <a href="{{ url('/students') }}">Student</a>
                    <a href="{{ url('/teachers') }}">Teacher</a>
                    <a href="{{ url('/courses') }}">Courses</a>
                    <a href="{{ url('/batches') }}">Batches</a>
                    <a href="{{ url('/enrollments') }}">Enrollment</a>
                    <a href="{{ url('/payments') }}">Payment</a>
                </div>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
