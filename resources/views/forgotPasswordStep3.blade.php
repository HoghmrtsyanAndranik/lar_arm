<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <span>We heard that you lost your GitHub password. Sorry about that!
        <br>
        But don’t worry! You can use the following link to reset your password:
        <br>
    </span>
    <h5>
        <br>
        <a href="{{url('/forgotpassword/'.$id.'/'.$hash)}}">Link</a>
        </h5>
    <span>
        If you don’t use this link within 3 hours, it will expire.
        <br>
        Thanks,
        <br>
        Shop team!
    </span>
</body>
</html>
