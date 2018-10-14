<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


            <div class="content">
                <div class="title m-b-md">
                    Edit User
                </div>
                <center>
                    <form action="{{route('update',['id'=>$user->id])}}" method="post">
                        {{csrf_field()}}

                    <div class="form-group col-md-4">
                        <label for="user Name">User Name:</label>
                        <input type="text" name="user_name" class="form-control" value="{{$user->user_name}}">
                    </div>

                        <div class="form-group col-md-4">
                            <label for="user Name">Email:</label>
                            <input type="text" name="email" class="form-control" value="{{$user->email}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="user Name">Password:</label>
                            <input type="text" name="password" class="form-control" value="{{$user->password}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="edit" value="Edit" class="btn btn-primary">
                        </div>
                    </form>
                </center>

            </div>
    </body>
</html>
