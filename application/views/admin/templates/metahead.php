<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/favicon.ico">

        <title><?= $title ?></title>

        <!-- Bootstrap core CSS -->
        <link href="/bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/css/navbar.css" rel="stylesheet">
        <link href="/css/css.css" rel="stylesheet">

        <style type="text/css">
            #map-canvas{
                width: 100%;
                height: 300px;
            }
        </style>

        <link href="/css/datepick/site.css" rel="stylesheet">
        <link href="/css/datepick/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="/css/datepick/pygments-manni.css" rel="stylesheet">
        <link href="/css/datepick/font-awesome.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery-ui.min.js"></script>

        <script type="text/javascript" src="/js/jquery.liTranslit.js"></script>

        <script src="/js/library.js"></script>

        <script src="/js/ie-emulation-modes-warning.js"></script>
        <script src="/ckeditor/ckeditor.js"></script>

        <!-- for date picker -->
        <script src="/js/datepick/moment.js"></script>
        <script src="/js/datepick/ru.js"></script>
        <script src="/js/datepick/bootstrap-datetimepicker.js"></script>
        <!-- end for date picker -->

        <script>
            $(function () {
                $('.name').liTranslit({
                    elAlias: $('.name_translit'),
                    reg: '" "="-"'
                });
            });
        </script>
        <script type="text/javascript" src="/js/imageupload.js"></script>
    </head>

    <body>

        <div class="container">
