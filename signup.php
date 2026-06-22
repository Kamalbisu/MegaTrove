<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 400px;">
        <h2 class="text-center">Create Account</h2>
        <form action="signup.php" method="POST" class="p-4 bg-white rounded shadow">
            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <button type="submit" name="signup" class="btn btn-warning w-100">Sign Up</button>
        </form>
        <?php
        include 'config.php';
        if(isset($_POST['signup'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            if(mysqli_query($conn, $sql)) echo "<p class='text-success mt-3'>Registered! <a href='login.php'>Login</a></p>";
        }
        ?>
    </div>
</body>
</html>