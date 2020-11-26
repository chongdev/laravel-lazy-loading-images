<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">



    <style>
        img{
            background-color: gray;
            height: 250px;
            width: 100%;
            border: 1ox solid gray;
            margin-top: 20px;

        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="my-5">Lazy Loading Images</h1>
        <div class="">

            @for ($i = 0; $i < 12; $i++)
            <div>
                <img class="lazy" data-src="http://45.33.113.129/images/img-{{$i}}.jpg" />
            </div>
            @endfor
        </div>
    </div>



    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="{{ asset('assets/plugins/jquery.lazy/jquery.lazy.min.js') }}"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/dkern/jquery.lazy@1.7.10/jquery.lazy.plugins.min.js"></script>
    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.plugins.min.js"></script> --}}
    <script>
        $(function() {
            $('.lazy').lazy();
        });
    </script>
</body>
</html>
