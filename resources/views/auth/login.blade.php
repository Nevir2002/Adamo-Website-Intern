<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('postLogin') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            @if (session('error'))
                <div class="error">{{ session('error') }}</div>
            @endif

            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>

        <div class="form-group">
            <a href="{{ route('getRegister') }}">
                <button type="button">Register</button>
            </a>
        </div>
    </div>
</body>

</html>
