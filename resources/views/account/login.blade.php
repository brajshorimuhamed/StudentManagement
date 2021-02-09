<!DOCTYPE html>
<html>
    <head>
        <title>Login System in Laravel PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            .box{
                width:600px;
                margin:0 auto;
                border:1px solid #ccc;
            }
        </style>
    </head>
    <body>
        <br />
        <div class="container box">
            <h3 align="center">Login System in Laravel PHP</h3>
            <br />
            
            <a class="btn btn-primary" href="/account/register">Register user</a>
                      
            <form method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-success" value="Login" />
                    <input type="reset" name="Clear" class="btn btn-danger" value="Clear" />
                </div>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </body>
</html>