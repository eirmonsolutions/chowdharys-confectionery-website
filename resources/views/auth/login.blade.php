<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background:
                radial-gradient(circle at top left, rgba(185, 132, 70, 0.18), transparent 35%),
                radial-gradient(circle at bottom right, rgba(17, 17, 17, 0.10), transparent 35%),
                linear-gradient(135deg, #fff8ef, #ffffff);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Plus Jakarta Sans', Arial, sans-serif;
            padding: 20px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 980px;
            min-height: 560px;
            background: #fff;
            border-radius: 32px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            box-shadow: 0 30px 90px rgba(0, 0, 0, 0.12);
        }

        .login-left {
            background: linear-gradient(rgba(0, 0, 0, .45), rgba(0, 0, 0, .55)),
            url("{{ asset('images/banner-img/img-2.jpeg') }}");
            background-size: cover;
            background-position: center;
            padding: 45px;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .login-left .badge-text {
            display: inline-block;
            width: fit-content;
            background: rgba(255, 255, 255, 0.18);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 13px;
            margin-bottom: 18px;
            backdrop-filter: blur(8px);
        }

        .login-left h1 {
            font-size: 38px;
            line-height: 1.15;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .login-left p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 15px;
            line-height: 1.7;
            margin: 0;
        }

        .login-right {
            padding: 55px 48px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-icon {
            width: 58px;
            height: 58px;
            border-radius: 18px;
            background: #111;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 24px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .18);
        }

        .login-card h2 {
            font-size: 35px;
            font-weight: 600;
            margin-bottom: 6px;
            color: #111;
        }

        .login-card p {
            color: #6b6b6b;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #222;
        }

        .form-control {
            height: 56px;
            border-radius: 15px;
            border: 1px solid #e3e3e3;
            background: #f8f8f8;
            padding: 0 18px;
            font-size: 15px;
        }

        .form-control:focus {
            background: #fff;
            border-color: #111;
            box-shadow: 0 0 0 4px rgba(0, 0, 0, .08);
        }

        .btn-login {
            width: 100%;
            height: 56px;
            border: none;
            border-radius: 15px;
            background: #111;
            color: #fff;
            font-weight: 800;
            margin-top: 8px;
            transition: .3s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            background: #2b2b2b;
            box-shadow: 0 14px 30px rgba(0, 0, 0, .18);
        }

        .back-home {
            display: inline-block;
            margin-top: 24px;
            color: #111;
            font-weight: 700;
            text-decoration: none;
        }

        .back-home:hover {
            color: #b98446;
        }

        @media (max-width: 768px) {
            .login-wrapper {
                grid-template-columns: 1fr;
            }

            .login-left {
                min-height: 260px;
                padding: 30px;
            }

            .login-left h1 {
                font-size: 30px;
            }

            .login-right {
                padding: 38px 26px;
            }

            .login-card h2 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">

        <div class="login-left">
            <span class="badge-text">Admin Panel</span>
            <h1>Manage Your Website Easily</h1>
            <p>Login to access your dashboard, manage content, and keep your website updated.</p>
        </div>

        <div class="login-right">
            <div class="login-card">
                <div class="login-icon">🔐</div>

                <h2>Welcome Back</h2>
                <p>Please login to continue dashboard.</p>

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="admin@admin.com" required>
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn-login">Login Dashboard</button>
                </form>

                <a href="{{ url('/') }}" class="back-home">← Back to Website</a>
            </div>
        </div>

    </div>

</body>

</html>