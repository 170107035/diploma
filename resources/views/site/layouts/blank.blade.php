<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ setting('site.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/dev.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/datepicker/css/datepicker.material.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    @yield('layout')

    <script src="{{ asset('assets/datepicker/datepicker.js') }}"></script>
    <script>
        var datepicker = new Datepicker('#datepicker',{
            weekStart: 1
        });
    </script>
    
    <script src="{{ asset('assets/js/notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('assets/js/dev.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/map.js') }}"></script>

    <script>
        // select взят с codepen.io
        jQuery(($) => {
            $('.select').on('click', '.select__head', function () {
                if ($(this).hasClass('open')) {
                    $(this).removeClass('open');
                    $(this).next().fadeOut();
                } else {
                    $('.select__head').removeClass('open');
                    $('.select__list').fadeOut();
                    $(this).addClass('open');
                    $(this).next().fadeIn();
                }
            });

            $('.select').on('click', '.select__item', function () {
                $('.select__head').removeClass('open');
                $(this).parent().fadeOut();
                $(this).parent().prev().text($(this).text());
                $(this).parent().prev().prev().val($(this).text());
            });

            $(document).click(function (e) {
                if (!$(e.target).closest('.select').length) {
                    $('.select__head').removeClass('open');
                    $('.select__list').fadeOut();
                }
            });
        });
    </script>
</body>
</html>