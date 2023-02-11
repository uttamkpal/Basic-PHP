<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            padding: 20px 40px;
            background-color: #ccc;
            box-shadow: 0 0 30px 10px #ccc;
            position: sticky;
            top: 0;
            display: flex;
            gap: 10px;
        }

        header a {
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: none;
            color: #333;
            transition: all .2s;
        }

        header a:hover {
            color: black;
            text-decoration: underline;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: 20px auto 0 auto;
            border: 1px solid #ccc;

            padding: 10px;
            min-height: 80vh;
        }

        ul {
            list-style-type: none;
            padding: 0 0 0 20px;
        }

        ol {
            padding-left: 30px;
        }
        .my-20{
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
        }
    </style>
</head>

<body>
    <header>
        <a href="/">Home</a>
        <a href="/function.php">Functions</a>
    </header>