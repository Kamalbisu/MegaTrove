<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login / Sign Up - MegaTrove</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            /* Ek premium dark aesthetic background image */
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=1920&h=1080&fit=crop') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
            color: white;
            width: 100%;
            max-width: 450px;
            padding: 2rem;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: #ffc107;
            color: white;
            box-shadow: none;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .nav-pills .nav-link {
            color: white;
            border-radius: 10px;
        }
        .nav-pills .nav-link.active {
            background-color: #ffc107;
            color: black;
            font-weight: bold;
        }
        /* Home Button styling */
        .btn-home {
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>
<body>
    

    <a href="home.html" class="btn btn-outline-light btn-home px-3 rounded-pill">
        ← Back to Store
    </a>

    <div class="glass-card">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-white">Mega</h2>
            <h2 class="fw-bold text-warning">Trove</h2>
            <p class="small text-light">Welcome to the ultimate shopping experience</p>
        </div>

        <ul class="nav nav-pills nav-justified mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab-login" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-selected="true">Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-register" data-bs-toggle="pill" data-bs-target="#pills-register" type="button" role="tab" aria-selected="false">Sign Up</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" tabindex="0">
                <form>
                    <div class="mb-3">
                        <label class="form-label small">Email address</label>
                        <input type="email" class="form-control rounded-pill px-3" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small">Password</label>
                        <input type="password" class="form-control rounded-pill px-3" placeholder="••••••••" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4 small">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="text-warning text-decoration-none">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 rounded-pill fw-bold">Login to Account</button>
                </form>
            </div>

            <div class="tab-pane fade" id="pills-register" role="tabpanel" tabindex="0">
                <form>
                    <div class="mb-3">
                        <label class="form-label small">Full Name</label>
                        <input type="text" class="form-control rounded-pill px-3" placeholder="Kamal" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small">Email address</label>
                        <input type="email" class="form-control rounded-pill px-3" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small">Password</label>
                        <input type="password" class="form-control rounded-pill px-3" placeholder="Create a strong password" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 rounded-pill fw-bold">Create Account</button>
                </form>
            </div>

        </div>

        <div class="text-center mt-4 pt-3 border-top border-secondary">
            <p class="small text-light mb-3">Or continue with</p>
            <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-outline-light rounded-circle" style="width: 40px; height: 40px;">G</button>
                <button class="btn btn-outline-light rounded-circle" style="width: 40px; height: 40px;">f</button>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>