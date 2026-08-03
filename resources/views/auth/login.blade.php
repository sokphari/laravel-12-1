<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - InventoryPro</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: pink;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 1050px;
            background: white;
            border-radius: 25px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            display: flex;
        }

        /* Left Side Illustration */
        .left-panel {
            flex: 1;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            border-right: 1px solid #edf2f7;
        }

        .left-panel img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            object-fit: contain;
        }

        /* Right Side Form */
        .right-panel {
            flex: 1;
            padding: 65px 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-title {
            font-size: 32px;
            font-weight: 700;
            color: #172033;
            margin-bottom: 8px;
        }

        .login-subtitle {
            font-size: 18px;
            color: #6b7280;
            margin-bottom: 40px;
        }

        .form-label {
            font-size: 16px;
            font-weight: 600;
            color: #202938;
            margin-bottom: 10px;
        }

        .input-group {
            margin-bottom: 25px;
        }

        .input-group-text {
            width: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: white;
            border-right: none;
            border-color: #d6dce5;
            border-radius: 14px 0 0 14px;
            color: #64748b;
            font-size: 22px;
        }

        .form-control {
            height: 60px;
            border-left: none;
            border-color: #d6dce5;
            border-radius: 0 14px 14px 0;
            font-size: 17px;
            color: #374151;
            box-shadow: none !important;
        }

        .form-control:focus {
            border-color: #2563eb;
        }

        .password-input {
            border-radius: 0 !important;
        }

        .show-password {
            width: 60px;
            border-left: none;
            border-color: #d6dce5;
            background: white;
            color: #64748b;
            font-size: 20px;
            border-radius: 0 14px 14px 0;
        }

        .remember-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-check-input {
            width: 22px;
            height: 22px;
            cursor: pointer;
            border-radius: 5px;
        }

        .form-check-label {
            font-size: 16px;
            color: #4b5563;
        }

        .forgot-password {
            color: #1f5cc8;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            height: 60px;
            border: none;
            border-radius: 14px;
            background: #2457d6;
            color: white;
            font-size: 18px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #1746bc;
            transform: translateY(-2px);
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 18px;
            margin: 30px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #d9dee7;
        }

        .divider span {
            color: #6b7280;
            font-size: 16px;
        }

        .create-account {
            text-align: center;
            font-size: 16px;
            color: #4b5563;
        }

        .create-account a {
            color: #1f5cc8;
            font-weight: 600;
            text-decoration: none;
            margin-left: 6px;
        }

        .create-account a:hover {
            text-decoration: underline;
        }

        @media (max-width: 992px) {
            .left-panel {
                display: none; /* Hide illustration on small screens */
            }

            .login-card {
                max-width: 550px;
            }

            .right-panel {
                padding: 40px 30px;
            }
        }
    </style>
</head>
<body>

<div class="login-card">
    
    {{-- Left Side: Image --}}
    <div class="left-panel">
        <img src="{{ asset('./image/login.png') }}" alt="">
    </div>

    {{-- Right Side: Form --}}
    <div class="right-panel">
        <h1 class="login-title">Sign in to your account</h1>
        <p class="login-subtitle">Enter your credentials to continue</p>

        <form onsubmit="loginPage(event)">
            {{-- Email --}}
            <label class="form-label">Email Address</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </span>
                <input type="email" class="form-control" placeholder="you@example.com" required>
            </div>

            {{-- Password --}}
            <label class="form-label">Password</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-lock"></i>
                </span>
                <input type="password" id="password" class="form-control password-input" placeholder="Enter your password" required>
                <button type="button" class="btn show-password" onclick="showPassword()">
                    <i class="bi bi-eye" id="eyeIcon"></i>
                </button>
            </div>

            {{-- Remember and Forgot --}}
            <div class="remember-area">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" checked>
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="#" class="forgot-password" onclick="alert('Front-End only')">Forgot password?</a>
            </div>

            {{-- Sign In Button --}}
            <button type="submit" class="btn-login">Sign In</button>

            {{-- Divider --}}
            <div class="divider">
                <span>or</span>
            </div>

            {{-- Register Link --}}
            <div class="create-account">
                Don't have an account?
                <a href="{{ route('register') }}">Create account</a>
            </div>
        </form>
    </div>

</div>

<script>
    function loginPage(event) {
        event.preventDefault();
        alert("Login successful!");
    }

    function showPassword() {
        let password = document.getElementById("password");
        let eyeIcon = document.getElementById("eyeIcon");

        if (password.type === "password") {
            password.type = "text";
            eyeIcon.classList.remove("bi-eye");
            eyeIcon.classList.add("bi-eye-slash");
        } else {
            password.type = "password";
            eyeIcon.classList.remove("bi-eye-slash");
            eyeIcon.classList.add("bi-eye");
        }
    }
</script>

</body>
</html>