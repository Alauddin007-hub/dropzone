<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Plugin -->
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

    <style>
        body {
            background: #EEE;
            font-family: 'Roboto', sans-serif
        }

        .dropzone {
            width: 98%;
            margin: 1%;
            border: 2px dashed #3498db !important;
            border-radius: 5px;
            transition: .2s
        }

        .dropzone.dz-drag-hover {
            border: 2px solid #3498db !important
        }

        .dz-message.needsclick img {
            width: 50px;
            display: block;
            margin: auto;
            opacity: .6;
            margin-bottom: 15px
        }

        span.plus {
            display: none
        }

        .dropzone.dz-started .dz-message {
            display: inline-block !important ;width: 120px;
            float: right ;
            border: 1px solid rgba(238, 238, 238, 0.36);
            border-radius: 30px;
            height: 120px;
            margin: 16px;
            transition: .2s
        }
        /* span.text{
            display: none
        }

        span.plus {
            display: block;
            font-size: 70px;
            color: #AAA;
            line-height: 110px
        } */
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>