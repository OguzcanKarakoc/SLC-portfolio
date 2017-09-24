<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link href="{{ asset('css/colorbox.css') }}" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
    <script src="{{ asset('js/jquery.colorbox-min.js') }}"></script>

    <script>
        $(document).ready(function () {
            //Examples of how to assign the Colorbox event to elements
            $(".group1").colorbox({rel: 'group1'});
            $(".group2").colorbox({rel: 'group2', transition: "fade"});
            $(".group3").colorbox({rel: 'group3', transition: "none", width: "75%", height: "75%"});
            $(".group4").colorbox({rel: 'group4', slideshow: true});
            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe: true, innerWidth: 640, innerHeight: 390});
            $(".vimeo").colorbox({iframe: true, innerWidth: 500, innerHeight: 409});
            $(".iframe").colorbox({iframe: true, width: "80%", height: "80%"});
            $(".inline").colorbox({inline: true, width: "50%"});
            $(".callbacks").colorbox({
                onOpen: function () {
                    alert('onOpen: colorbox is about to open');
                },
                onLoad: function () {
                    alert('onLoad: colorbox has started to load the targeted content');
                },
                onComplete: function () {
                    alert('onComplete: colorbox has displayed the loaded content');
                },
                onCleanup: function () {
                    alert('onCleanup: colorbox has begun the close process');
                },
                onClosed: function () {
                    alert('onClosed: colorbox has completely closed');
                }
            });

            $('.non-retina').colorbox({rel: 'group5', transition: 'none'})
            $('.retina').colorbox({rel: 'group5', transition: 'none', retinaImage: true, retinaUrl: true});

            //Example of preserving a JavaScript event for inline calls.
            $("#click").click(function () {
                $('#click').css({
                    "background-color": "#f00",
                    "color": "#fff",
                    "cursor": "inherit"
                }).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    </script>
</head>
<body>

@yield('content')

<!-- Scripts -->

<script src="{{ asset('js/scrolling.js') }}"></script>
<script src="{{ asset('js/progressbar.js') }}"></script>

</body>
</html>
