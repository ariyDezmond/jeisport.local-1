<?php

function getExtension($filename) {
    return end(explode(".", $filename));
}

function getImage($link, $type) {
    $filename = $link;
    $percent = 0.5;
    if (getExtension($filename) == 'jpg' || getExtension($filename) == 'jpeg') {
        header('Content-type: image/jpeg');
    }
    if (getExtension($filename) == 'png') {
        header('Content-type: image/png');
    }
    if (getExtension($filename) == 'gif') {
        header('Content-type: image/gif');
    }

    list($width, $height) = getimagesize($filename);
    switch ($type) {
        case 1: //images for point (миниатюры)
            $newwidth = 160;
            $newheight = 96;
            break;
        case 2: //картинки для тренировочных залов
            $newwidth = 350;
            $newheight = 240;
            break;
        case 3: //картинки для тренировочных залов
            $newwidth = 350;
            $newheight = 240;
            break;
        //вывод картинок на фронте
        case 4: //для спорт залов
            $newwidth = 320;
            $newheight = 180;
            break;
        case 5: //для главной у спорт точки
            $newwidth = 480;
            $newheight = 265;
            break;
        case 6: //для миниатюр
            $newwidth = 147;
            $newheight = 85;
            break;
        case 7: //для тренеров
            $newwidth = 185;
            $newheight = 105;
            break;
        case 8: //для видов спорта
            $newwidth = 226;
            $newheight = 161;
            break;
        case 9: //для логотипом метро
            $newwidth = 19;
            $newheight = 18;
            break;
        case 10: //для логотипом метро
            $newwidth = 256;
            $newheight = 191;
            break;
    }
    $thumb = imagecreatetruecolor($newwidth, $newheight);
    if (getExtension($filename) == 'jpg' || getExtension($filename) == 'jpeg') {
        $source = imagecreatefromjpeg($filename);
    }
    if (getExtension($filename) == 'png') {
        $source = imagecreatefrompng($filename);
    }
    if (getExtension($filename) == 'gif') {
        $source = imagecreatefromgif($filename);
    }

    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    if (getExtension($filename) == 'jpg' || getExtension($filename) == 'jpeg') {
        imagejpeg($thumb);
    }
    if (getExtension($filename) == 'png') {
        imagepng($thumb);
    }
    if (getExtension($filename) == 'gif') {
        imagegif($thumb);
    }
}

if ($_GET['key'] and ! $_GET['type'])
    getImage($_GET['key']);
elseif ($_GET['key'] and $_GET['type'])
    getImage($_GET['key'], $_GET['type']);
?>