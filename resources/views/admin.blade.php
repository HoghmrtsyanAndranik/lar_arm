<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm bg-light">

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link class="nav-link" to="/admin/product">Product</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/admin/user">User</router-link>
                </li>
            </ul>

        </nav>
        <h1>Admin</h1>

        <router-view></router-view>
    </div>

</body>
<script src="{{mix('js/app.js')}}"></script>
</html>
