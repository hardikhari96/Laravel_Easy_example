<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style type="text/css">
            form.form {
            display: inline;
        }
        form.form>input {
            border: 0px;
            background-color: transparent;
            cursor: pointer;
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        </style>
    

       <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
      
            <div class="content">
                <div class="title m-b-md ">
                   <a href="<?php echo URL::to('/'); ?>"> Methods</a>
                </div>
                <div class="links">
                    <a href="<?php echo URL::to('/'); ?>/methods/getplain/yourdataishere">Get Plane link method</a>
                    <a href="<?php echo URL::to('/'); ?>/methods/get/fetchall">Fetch Data All Using Model</a>
                    <a href="<?php echo URL::to('/'); ?>/methods/get/value?key1=keyonedata&key2=keytwodata"> Question Get Method</a>
                  <form class="form" action="<?php echo URL::to('/'); ?>/methods/post/" method="post">
                    {{ csrf_field() }}
                      <input type="hidden" name="name" value="hari">
                      <input type="submit" value="controller direct post method">
                  </form>
                  <form class="form" action="<?php echo URL::to('/'); ?>/methods/postview/" method="post">
                    {{ csrf_field() }}
                      <input type="hidden" name="name" value="hari">
                      <input type="submit" value="view post method">
                  </form>
                    <form class="form" action="<?php echo URL::to('/'); ?>/methods/insertdata/" method="post">
                    {{ csrf_field() }}
                      <input type="hidden" name="name" value="hari">
                      <input type="submit" value="sent data in table database">
                  </form>
                </div>
            </div>
        </div>
    </body>
</html>
