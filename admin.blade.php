<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add custom inline CSS styles here */
        .container {
            margin-top: 170px;
            border: 1px solid #ccc; /* Add border to container */
            border-radius: 5px; /* Optional: Add border-radius for rounded corners */
            padding: 20px; /* Optional: Add padding to container */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Add text shadow for emphasis */
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #700;
            border-color: #700;
        }

        .btn-primary:hover {
            background-color: #800;
            border-color: #800;
        }
    </style>
</head>
<body style="background-color: #f8f9fa;"> <!-- Add background color to body -->
    <div class="container bg-light"> <!-- Add background color to container -->
        <h2>Admin Login</h2>
        <form method="POST" action="{{ route('login') }}" style="border: 1px solid #ccc; padding: 20px;">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="security_token">Security Token</label>
                <input type="text" id="security_token" name="security_token" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button> <!-- Make button full width -->
        </form>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
