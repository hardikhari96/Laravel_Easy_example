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
                <div class="title m-b-md">
                    Woocommerce
                </div>

                <div class="links">
                    
                    <a href="{{ URL::to('/') }}/woocommerce/api">Woocommerce</a>
                    <a href="{{ URL::to('/') }}/woocommerce/products">Products</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
