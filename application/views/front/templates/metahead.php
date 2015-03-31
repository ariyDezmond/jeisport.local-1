<!DOCTYPE html>
<html>
    <head>
        <title><?php
            if (isset($point)) {
                echo $category['name'] . ' | ' . $sport['name'] . ' | ' . $stitle;
            } else {
                if (isset($sport)) {
                    echo $category['name'] . ' | ' . $stitle;
                } else {
                    if (isset($category['name'])) {
                        echo $category['name'];
                    } else {
                        echo $title;
                    }
                }
            }
            ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="keywords" content="<?php if (isset($metakeyw)) echo $metakeyw ?>">
        <meta name="description" content="<?php if (isset($metadesc)) echo $metadesc ?>">


        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/slider.css">
        <link rel="stylesheet" href="/colorbox/example4/colorbox.css">
        <link rel="stylesheet" href="/css/jquery-ui.css">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="/js/jquery-ui.min.js"></script>
        <script src="/colorbox/jquery.colorbox-min.js"></script>
        <script src="/js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="/js/prefixfree.min.js"></script>
        <script type="text/javascript" src="/js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <!--<script type="text/javascript" src="/js/library.js"></script>-->
        <script>
            $(document).ready(function () {
                $(".video_block .img_link,.video_block .title_link").colorbox({iframe: true, innerWidth: 700, innerHeight: 500});
            });

            $(function () {
                var availableTags = [
<?php
$c = count($subways);
foreach ($subways as $k => $s)
    if ($k == $c - 1) {
        echo "'{$s['name']}'\r\n";
    } else {
        echo "'{$s['name']}',\r\n";
    }
?>
                ];
                $("#select-3").autocomplete({
                    source: availableTags,
                    minLength: 2
                });
            });
        </script>
    </head>