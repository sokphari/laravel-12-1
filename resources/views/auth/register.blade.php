<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - InventoryPro</title>

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

        .register-card {
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
            padding: 50px 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .register-title {
            font-size: 32px;
            font-weight: 700;
            color: #172033;
            margin-bottom: 8px;
        }

        .register-subtitle {
            font-size: 18px;
            color: #6b7280;
            margin-bottom: 30px;
        }

        .form-label {
            font-size: 15px;
            font-weight: 600;
            color: #202938;
            margin-bottom: 8px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group-text {
            width: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: white;
            border-right: none;
            border-color: #d6dce5;
            border-radius: 12px 0 0 12px;
            color: #64748b;
            font-size: 20px;
        }

        .form-control {
            height: 55px;
            border-left: none;
            border-color: #d6dce5;
            border-radius: 0 12px 12px 0;
            font-size: 16px;
            box-shadow: none !important;
        }

        .form-control:focus {
            border-color: #2563eb;
        }

        .password-input {
            border-radius: 0 !important;
        }

        .show-password {
            width: 55px;
            background: white;
            border-left: none;
            border-color: #d6dce5;
            border-radius: 0 12px 12px 0;
            color: #64748b;
            font-size: 19px;
        }

        .btn-register {
            width: 100%;
            height: 58px;
            border: none;
            border-radius: 12px;
            background: #2457d6;
            color: white;
            font-size: 18px;
            font-weight: 600;
            margin-top: 10px;
            transition: 0.3s;
        }

        .btn-register:hover {
            background: #1746bc;
            transform: translateY(-2px);
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 18px;
            margin: 25px 0;
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

        .login-link {
            text-align: center;
            font-size: 16px;
            color: #4b5563;
        }

        .login-link a {
            color: #1f5cc8;
            font-weight: 600;
            text-decoration: none;
            margin-left: 6px;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 992px) {
            .left-panel {
                display: none;
            }

            .register-card {
                max-width: 550px;
            }

            .right-panel {
                padding: 40px 30px;
            }
        }
    </style>
</head>
<body>

<div class="register-card">

    {{-- Left Side: Image --}}
    <div class="left-panel">
    <img src="{{ asset('./image/login.png') }}" alt="">
    </div>

    {{-- Right Side: Form --}}
    <div class="right-panel">
        <h1 class="register-title">Create your account</h1>
        <p class="register-subtitle">Enter your information to create an account</p>

        <form onsubmit="registerPage(event)">
            {{-- Full Name --}}
            <label class="form-label">Full Name</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text" class="form-control" placeholder="Enter your full name" required>
            </div>

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
                <input type="password" id="password" class="form-control password-input" placeholder="Create a password" required>
                <button type="button" class="btn show-password" onclick="showPassword()">
                    <i class="bi bi-eye" id="passwordIcon"></i>
                </button>
            </div>

            {{-- Confirm Password --}}
            <label class="form-label">Confirm Password</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-shield-lock"></i>
                </span>
                <input type="password" id="confirmPassword" class="form-control password-input" placeholder="Confirm your password" required>
                <button type="button" class="btn show-confirm-password show-password" onclick="showConfirmPassword()">
                    <i class="bi bi-eye" id="confirmIcon"></i>
                </button>
            </div>

            {{-- Create Account --}}
            <button type="submit" class="btn-register">Create Account</button>

            {{-- Divider --}}
            <div class="divider">
                <span>or</span>
            </div>

            {{-- Login Link --}}
            <div class="login-link">
                Already have an account?
                <a href="{{ route('login') }}">Sign In</a>
            </div>
        </form>
    </div>

</div>

<script>
    function registerPage(event) {
        event.preventDefault();
        let password = document.getElementById("password");
        let confirmPassword = document.getElementById("confirmPassword");

        if (password.value !== confirmPassword.value) {
            alert("Passwords do not match!");
            return;
        }

        alert("Account created successfully!");
        window.location.href = "{{ route('login') }}";
    }

    function showPassword() {
        let password = document.getElementById("password");
        let icon = document.getElementById("passwordIcon");

        if (password.type === "password") {
            password.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            password.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    }

    function showConfirmPassword() {
        let password = document.getElementById("confirmPassword");
        let icon = document.getElementById("confirmIcon");

        if (password.type === "password") {
            password.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            password.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    }
</script>

</body>
</html>