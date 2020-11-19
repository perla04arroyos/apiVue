<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{  mix('css/app.css') }}">
</head>
<body>
    <h3>API Vue</h3>

    <div id="app" class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <show-component/>

            </div>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>