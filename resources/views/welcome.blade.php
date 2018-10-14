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
                    Crud Operations
                </div>


                <center>
                    <form method="post" action="{{route('add')}}">
                        {{csrf_field()}}
                        <div class="form-group col-md-6">
                                <label for="user_name">User Name</label>
                                <input type="text" name="user_name" placeholder="User Name" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" name="email" placeholder="Email" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="text" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div>
                             <input type="submit" value="Add User" class="btn btn-info">
                        </div>
                    </form>
                <div class="table-responsive col-md-12">
                    <table class="table table-responsive table-hover table-bordered " >
                        <tr class="bg-primary" style="color:white;">
                            <td>ID</td>
                            <td>User Name</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Created At</td>
                            <td>Updated At</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>

                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->user_name}}</td>
                                <td>{{$user->password}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td><a href="{{route('edit',['id'=>$user->id])}}" class="btn btn-primary">Edit</a></td>
                                <td><a href="{{route('delete',['id'=>$user->id])}}" class="btn btn-danger">Delete</a> </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                </center>

            </div>
    </body>
</html>
