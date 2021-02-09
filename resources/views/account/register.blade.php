<!DOCTYPE html>
<html>
    <head>
        <title>User Registration System in Laravel PHP</title>
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
            <h3 align="center">User Registration System in Laravel PHP</h3>
            <br />
            
                       
            <form method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Enter Name</label>
                    <input type="text" name="name" placeholder="Enter name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Enter email</label>
                    <input type="email" name="email" placeholder="some@example.com" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Enter password</label>
                    <input type="password" name="password" placeholder="*******" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" name="register" class="btn btn-success" value="Register" />
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