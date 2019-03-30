<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: gray;

        }
        .content{
            border:solid red 2px;
            margin-top: 150px;
            text-align: center;
            padding:15px;
        }
        .h1{
            color:white;
            font-size: 3rem;
        }
        .urlentrer{
            display: block;
            margin: 20px auto;
            width:60%;
            height: 2rem;
            border-radius: 15px;
            padding-right: 10px;
            padding-left: 10px;
            border: none;
        }
        .btn-submit{

        }
        .link{
            color: yellow;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>