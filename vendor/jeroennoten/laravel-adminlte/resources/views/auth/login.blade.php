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
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #D3F1DF 0%, rgb(42, 212, 224) 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 340px;
            backdrop-filter: blur(10px);
        }

        .logo-container {
            text-align: center;
            margin-bottom: 30px;
            transform: scale(1);
            transition: transform 0.4s ease;
        }

        .logo-container:hover {
            transform: scale(1.08);
        }

        .logo-container img {
            width: 120px;
            height: 120px;
            box-shadow: 0 8px 16px rgba(42, 143, 96, 0.15);
            border-radius: 50%;
            border: 4px solid rgb(36, 190, 157);
            transition: all 0.3s ease;
        }

        .logo-container img:hover {
            box-shadow: 0 12px 20px rgba(42, 143, 96, 0.25);
        }

        .login-container h2 {
            text-align: center;
            color: #333;
            margin: 20px 0;
            font-size: 28px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: linear-gradient(45deg, rgb(36, 190, 157), rgb(42, 212, 224));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #eee;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        .form-group input:hover {
            border-color: rgba(36, 190, 157, 0.5);
        }

        .form-group input:focus {
            border-color: rgb(36, 190, 157);
            box-shadow: 0 0 10px rgba(36, 190, 157, 0.2);
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(45deg, rgb(36, 190, 157), hsl(166, 55.30%, 33.30%));
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(36, 190, 157, 0.3);
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }

        .forgot-password a {
            color: rgb(36, 190, 157);
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .forgot-password a:hover {
            color: rgb(42, 212, 224);
            text-decoration: underline;
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
        }

        .is-invalid {
            border-color: #dc3545 !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="logo-container">
                <img src="{{ asset('vendor/adminlte/dist/img/logoremov.png') }}" alt="Logo">
            </div>
            
            <h2>Welcome Back</h2>
            
            @php
                $login_url = route('login');
            @endphp

            <form action="{{ $login_url }}" method="post">
                @csrf
                
                <div class="form-group">
                    <input type="email" 
                           name="email" 
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" 
                           placeholder="Email Address" 
                           autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" 
                           name="password" 
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="login-btn">Sign In</button>
            </form>
        </div>
    </div>

    <style>
    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }
    
    .login-container {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
    }

    .form-control {
        width: 100%;
        box-sizing: border-box;
    }

    .links-container {
        margin-top: 20px;
        text-align: center;
    }

    @media (max-width: 480px) {
        .login-container {
            padding: 20px;
            width: 90%;
        }

        .logo-container img {
            width: 100px;
            height: 100px;
        }
    }
    </style>
</body>
</html>
