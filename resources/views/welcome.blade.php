<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel with Vue</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">

    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">
            <example-component></example-component>

            <div class="content">
                <div class="title m-b-md">
                    This is from welcome.blade.php with example-component above this text, and another-component below this text.
                </div>
            </div>

            <another-component></another-component>
        </div>

        <script src="{{mix('/js/manifest.js')}}"></script>
        <script src="{{mix('/js/vendor.js')}}"></script>
        <script src="{{mix('/js/app.js')}}"></script>                
    </body>
</html>
