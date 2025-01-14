<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }

        form>div {
            margin-bottom: 20px;
        }

        input,
        select {
            height: 30px;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="">
        <form action="login" method="post">
            @csrf

            @if(session('loggedinUser'))
                redirect(route('dashboardPage'));
            @endif


            @if(session('message'))
                <div class="alert alert-danger" style="color: red;">
                    {{ session('message') }}
                </div>
            @endif


            <div class="username">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" />
            </div>

            <div class="password">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
            </div>

            <div class="submit">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>

</html>