<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <section>
        <div>
            <div>
                <div>
                    <form action="{{route('login.control')}}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="enter your email" required>
                        <input type="password" name="password" placeholder="enter your password" required>
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>