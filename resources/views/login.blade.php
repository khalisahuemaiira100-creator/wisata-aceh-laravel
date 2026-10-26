<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wisata Aceh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef5ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0 4px 15px #0002;
        }

        h2 {
            text-align: center;
            color: #1756a9;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 11px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #1756a9;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .error {
            color: #c62828;
            font-size: 14px;
        }

        .success {
            color: #16743b;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Wisata Aceh</h2>

        @if ($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif

        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >

            <button type="submit">Masuk</button>
        </form>

        <p style="text-align:center; font-size:13px;">
            Wisata Aceh
        </p>
    </div>
</body>
</html>