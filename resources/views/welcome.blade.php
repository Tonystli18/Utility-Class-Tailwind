<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/app.css">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</head>

<body class="flex items-center justify-center">
    <div class="card flex rounded">
        <div class="card-left flex rounded flex-col justify-between p-6 items-center text-center text-white">
            <a href="#" class="card-skill-button no-underline text-xs rounded-full py-1 px-6">PHP</a>
            <img src="./images/customer-support.svg">
            <span class="card-difficulty text-xs">Intermediate Difficulty</span>
        </div>

        <div class="card-right flex flex-col text-gray-700 p-6">
            <h3 class="card-title text-black font-light text-3xl mb-3">
                <a href="#" class="no-underline text-inherit">Testing Jargon</a>
            </h3>
            <p class="card-excerpt flex-1">
                Lorem ipsum dolor sit amet consectetur r elit. Illum, quisquam quo? Exercitationem reiciendis amet est qui sapiente pariatur earum, quidem
            </p>
            <div class="card-meta flex text-sm">
                <div class="flex items-center mr-4">
                    <img src="./images/books-stack-of-three.svg"  class="flex mr-2">
                    5 Lessons
                </div>
                <div class="flex items-center">
                    <img src="./images/clock.svg" class="flex mr-2">
                    53:10 minutes
                </div>
            </div>

        </div>
    </div>
</body>

</html>