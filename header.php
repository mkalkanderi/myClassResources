<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {margin: 0;}

        ul.topnav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        ul.topnav li {float: left;}

        ul.topnav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: 'Nunito', sans-serif;
        }

        ul.topnav li a:hover:not(.active) {background-color: #42413d;}

        /*ul.topnav li a.active {background-color: #e9a72c;}*/

        ul.topnav li.right {float: right;}

        @media screen and (max-width: 600px){
            ul.topnav li.right,
            ul.topnav li {float: none;}
        }
    </style>
</head>
<body>

<ul class="topnav">
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="csclasses.php">Computer Science Classes</a></li>
    <li class="right"><a href="about.php">About</a></li>
</ul>

</body>
</html>