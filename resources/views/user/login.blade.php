<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            margin: 0;
        }

        main {
            background-color: #fff;
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h3 {
            font-size: 20px;
            font-weight: bold;
            margin: 0 0 10px;
        }

        p {
            color: #888;
            margin: 0;
        }

        a {
            color: #800080;
            font-weight: bold;
            text-decoration: none;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            background-color: #eee;
            border: none;
            border-bottom: 2px solid #888;
            padding: 5px;
            margin-bottom: 10px;
        }

        button {
            background-color: #800080;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #9932cc;
        }

        .error {
            color: #f00;
            font-size: 12px;
            margin: 2px 0;
            padding: 1px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Student Login</h1>
    </header>

    <main>
        <section>
            <h3>Welcome to the Student System</h3>
            <p>Sign up for a new account <a href="/register">here</a></p>
        </section>

        <section>
           <!-- login.blade.php -->
<form action="{{ route('login.process') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
    </div>
    <button type="submit" class="btn btn-primary">Sign In</button>
</form>
        </section>
    </main>

    <footer>
        <!-- Footer content goes here -->
    </footer>
</body>

</html>
