<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Document</title>
    <style>
        section{
            background-image: url("{{asset('images/grad.jpg')}}");

        }

    </style>
</head>
<body>
    <section>
        <form action='/login' method='POST' class="login100-form validate-form">
            <input name="_token" value="{{ csrf_token() }}" type="hidden"/>
            <input name="_method" value="POST" type="hidden"/>
            <div class="form_box">
                <div class="form_value">
                    <h2>Login</h2>
                    <div class="input_box">
                        <input type="email" name="email" id="email" required>
                        <label for="email">email</label>
                    </div>
                    <div class="input_box">
                        <input type="password" name="password" id="password" required>
                        <label for="password">password</label>
                    </div>
                    <div class="radio_box">
                        <input  type="radio" name="usertype"  value="admin" checked="checked">
                        <label  for="usertype_0">System User</label>

                        <input  type="radio"  name="usertype"  value="doctor">
                        <label  for="usertype_2">Staff</label>

                        <input  type="radio" name="usertype" id="usertype_1" value="student">
                        <label  for="usertype_1">Student</label>
                    </div>

                    <div class="forget">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Remmber Me  <a href="#">Forget Password</a></label>
                    </div>

                    <button type="submit">Login</button>

                    <div class="register">
                        <p>Don't have another account?</p>
                        <a href="#">Register</a>
                    </div>

                </div>
            </div>
        </form>
    </section>
</body>
</html>
