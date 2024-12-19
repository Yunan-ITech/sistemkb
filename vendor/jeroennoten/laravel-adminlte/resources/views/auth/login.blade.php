<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(120deg, #D3F1DF,rgb(42, 212, 224));
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: rgba(229, 241, 240, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 25px;
            transform: scale(1);
            transition: transform 0.3s ease;
        }

        .logo-container:hover {
            transform: scale(1.05);
        }

        .logo-container img {
            width: 100px;
            height: 100px;
            box-shadow: 0 4px 8px rgba(42, 143, 96, 0.1);
            border-radius: 50%;
        }

        .login-container h2 {
            text-align: center;
            color: #333;
            margin: 20px 0;
            font-size: 24px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group input {
            width: calc(100% - 24px);
            padding: 10px;
            border: none;
            border-bottom: 2px solid #2ecc71;
            outline: none;
            font-size: 14px;
            transition: all 0.3s ease;
            background: transparent;
            border-radius: 4px;
        }

        .form-group input:hover {
            background: rgba(46, 204, 113, 0.05);
        }

        .form-group input:focus {
            border-bottom-color:rgb(79, 107, 109);
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background:rgb(36, 190, 157);
            border: none;
            border-radius: 5px;
            color: #333;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-btn:hover {
            background:rgb(18, 10, 22);
            color: white;
        }

        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password a {
            color:rgb(9, 26, 16);
            text-decoration: none;
        }

        .forgot-password a:hover {
            color:rgb(44, 133, 136);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <!-- Replace 'logo.png' with your actual logo file path -->
            <img src="{{ asset('vendor/adminlte/dist/img/logoremov.png') }}" style="border-radius: 50%; object-fit: cover;">
        </div>
        <h2>Welcome Back</h2>
        @php
            $login_url = route('login');
        @endphp
        <form action="{{ $login_url }}" method="post" class="modern-login-form">
            @csrf
            <div class="form-group">
            <input type="email" name="email" class="form-control modern-input @error('email') is-invalid @enderror"
                   value="{{ old('email') }}" placeholder="" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
            <input type="password" name="password" class="form-control modern-input @error('password') is-invalid @enderror"
                   placeholder="">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
        <div class="forgot-password" style="margin-top: 10px;">
            <a href="{{ route('register') }}">Don't have an account? Register here</a>
        </div>
    </div>
</body>
</html>
