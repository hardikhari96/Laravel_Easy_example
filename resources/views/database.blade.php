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
      
            <div class="content">
                <div class="title m-b-md ">
                   <a href="<?php echo URL::to('/'); ?>"> Manage Database</a>
                </div>

                <div class="links">
                    <a href="<?php echo URL::to('/'); ?>/database/select">Select</a>

                    <a href="<?php echo URL::to('/'); ?>/database/insert?name=keyonedata"> Insert using get</a>


                    <a href="<?php echo URL::to('/'); ?>/database/update?id=11&name=hari"> Update</a>
                  
                    <a href="<?php echo URL::to('/'); ?>/database/delete?id=10"> Delete</a>

                    <a href="<?php echo URL::to('/'); ?>/database/ssingle?id=11"> Select Single</a>
                    
                    
                </div>
            </div>
        </div>
    </body>
</html>
