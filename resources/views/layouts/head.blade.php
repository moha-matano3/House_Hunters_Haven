<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>House Hunters' Haven</title>

    <style>
        *
        {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .navbar
        {
            background: #7c6e7f;
            text-align: center;
        }
        .navbar ul
        {
            display: inline-flex;
            list-style: none;
            color: #000000;
        }
        .navbar ul li 
        {
            width: 400px;
            margin: 15px;
            padding: 15px;
        }
        .navbar ul li a
        {
            text-decoration: none;
            color: #000000;
        }
        .navbar ul li a:hover
        {
            color: #fff;
        }
        .subMenu {
            width: 300px;
            margin: 0px;
            display: none;
        }
        .navbar ul li:hover .subMenu {
            display: block;
            position: absolute;
            margin-top: 15px;
            margin-left: -15px;
            background: #7c6e7f;
        }
        .navbar ul li:hover .subMenu ul {
            display: block;
        }
        .navbar ul li:hover .subMenu ul li {
            width: auto;
            padding: 10px;
            border-bottom: 1px dotted #000;
            background: transparent;
            border-radius: 0;
            text-align: left;
        }
        .navbar ul li:hover .subMenu ul li:last-child {
            border-bottom: none;
        }
        .navbar ul li:hover .subMenu ul li:hover {
            color: #fff;
        }

    </style>
</head>