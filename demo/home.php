<?php
session_start();


if (!isset($_SESSION['username'])) {
    $email = $_SESSION['email'];
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username']; 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for Navbar -->
    <style>
        .navbar {
            background-color: #f8f9fa; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        }
        .navbar-brand {
            font-weight: bold;
            color: #007bff !important; 
        }
        .navbar-nav .nav-link {
            color: #333; 
        }
        .navbar-nav .nav-link:hover {
            color: #007bff; 
        }
        .logout-btn {
            margin-left: auto; 
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DEMO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item logout-btn">
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Welcome, <?php echo $username; ?>!</h2>
                <p>You have successfully logged in.</p>

                <!-- Dashboard Content -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Dashboard</h5>
                        <p class="card-text">Here's a quick overview of your account:</p>
                        <ul>
                            <li>Total Posts: 10</li>
                            <li>Unread Messages: 3</li>
                            <li>Notifications: 2</li>
                        </ul>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activity</h5>
                        <ul>
                            <li>Logged in at <?php echo date("Y-m-d H:i:s"); ?></li>
                            <li>Updated profile picture</li>
                            <li>Posted a new comment</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Profile</h5>
                        <p class="card-text">Username: <?php echo $username; ?></p>
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal for Welcome Alert -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="welcomeModalLabel">Login Successful</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Welcome, <?php echo $username; ?>! You have successfully logged in.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Show welcome modal on page load
        window.onload = function() {
            var myModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
            myModal.show();
        };
    </script>

</body>
</html>