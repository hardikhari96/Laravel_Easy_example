<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    

       <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hari Laravel Fun Test 
                </div>

                <div class="links">
                    <a href="<?php echo URL::to('/'); ?>/posthari">posthari</a>
                    <a href="<?php echo URL::to('/'); ?>/woocommerce">woocommerce</a>
                    <a href="<?php echo URL::to('/'); ?>/database">database</a>
                    <a href="<?php echo URL::to('/'); ?>/dir">dir</a>
                    <a href="<?php echo URL::to('/'); ?>/hari">hari</a>
                    <a href="{{ URL::to('/') }}/methods">methods</a>
                    <a href="{{ asset('storage/file.txt') }} ">Access Storage Folder</a>
                    <a href="script">Script</a>
                    <a href="denimdemo">Demo sites</a>
                </div>
            </div>
        </div>
    </body>
</html>
