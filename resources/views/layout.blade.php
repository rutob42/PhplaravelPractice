<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="TF-EDGE">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Management System</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7f6;
            color: #333;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            position: fixed;
            height: 100%;
            overflow: auto;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            display: block;
            color: #adb5bd;
            padding: 15px 20px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.2s ease;
        }

        .sidebar a.active {
            background-color: #007bff;
            color: white;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .content {
    margin-left: 250px;
    padding: 20px;
    transition: margin-left 0.3s ease;
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), 
                url('https://source.unsplash.com/1600x900/?education,school') 
                no-repeat center center;
    background-size: cover;
    min-height: 100vh;
}

        .navbar {
            background-color: #007bff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #fff;
            font-weight: 500;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            font-size: 18px;
            font-weight: 500;
            border-bottom: none;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table th {
            background-color: #f8f9fa;
        }

        /* Responsive adjustments */
        @media (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                text-align: center;
                padding: 10px;
                float: none;
            }

            .content {
                margin-left: 0;
            }
        }

        @media (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>
  
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
            <div class="sidebar">
    <a href="#home" class="active"><i class="fas fa-home"></i> Home</a>
    <a href="{{url('/students')}}"><i class="fas fa-user-graduate"></i> Student</a>
    <a href="#teacher"><i class="fas fa-chalkboard-teacher"></i> Teacher</a>
    <a href="#courses"><i class="fas fa-book"></i> Courses</a>
    <a href="#enrollment"><i class="fas fa-user-plus"></i> Enrollment</a>
    <a href="#payment"><i class="fas fa-wallet"></i> Payment</a>
</div>


            </div>
            
            <!-- Main content -->
            <div class="col-md-9 content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Student Management Project</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>

                @yield('content')
            </div>
        </div>
    </div>
   
</body>
</html>
