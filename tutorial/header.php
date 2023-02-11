<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* header {
            padding: 20px 40px;
            background-color: #ccc;
            box-shadow: 0 0 30px 10px #ccc;
            position: sticky;
            top: 0;
            display: flex;
            gap: 10px;
        } */

        /* header a {
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: none;
            color: #333;
            transition: all .2s;
        } */

        /* header a:hover {
            color: black;
            text-decoration: underline;
            font-weight: bold;
        } */

    </style>
</head>

<body class="h-full">
    <header class="container shadow-md bg-slate-300 flex gap-4 py-4 px-20" >
        <a href="/">
        <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
        </a>
        <a class="uppercase text-slate-500 hover:text-slate-900" href="/tutorial">Home</a>
        <a class="uppercase text-slate-500 hover:text-slate-900" href="/tutorial/function.php">Functions</a>
    </header>