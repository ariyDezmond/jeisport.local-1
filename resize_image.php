<?php

// Здесь можно и нужно добавить код, проверяющий  
// содержимое переменной $_GET["file"]  
// Вдруг вам хакер или просто любопытствующий туда  
// что-нибудь не то передаст  
$filename = $_GET["file"];
if (isset($_GET['w'])) {
    $w = $_GET["w"];
} else {
    $w = 200;
}
if (isset($_GET['h'])) {
    $h = $_GET["h"];
} else {
    $h = 200;
}
// Вызываем функцию масштабирования  
resizeimg($filename, $w, $h);

// Функция масштабирования  
function resizeimg($filename, $w, $h) {
    // определим коэффициент сжатия изображения, которое будем генерить  
    $ratio = $w / $h;
    // получим размеры исходного изображения  
    $size_img = getimagesize($filename);
    // Если размеры меньше, то масштабирования не нужно  
    if (($size_img[0] < $w) && ($size_img[1] < $h))
        return true;
    // получим коэффициент сжатия исходного изображения  
    $src_ratio = $size_img[0] / $size_img[1];

    // Здесь вычисляем размеры уменьшенной копии,  
    // чтобы при масштабировании сохранились  
    // пропорции исходного изображения  
    if ($ratio < $src_ratio) {
        $h = $w / $src_ratio;
    } else {
        $w = $h * $src_ratio;
    }
    // создадим пустое изображение по заданным размерам  
    $dest_img = imagecreatetruecolor($w, $h);
    $white = imagecolorallocate($dest_img, 255, 255, 255);

    if ($size_img[2] == 2)
        $src_img = imagecreatefromjpeg($filename);
    else if ($size_img[2] == 1)
        $src_img = imagecreatefromgif($filename);
    else if ($size_img[2] == 3)
        $src_img = imagecreatefrompng($filename);

    // масштабируем изображение     функцией imagecopyresampled()  
    // $dest_img - уменьшенная копия  
    // $src_img - исходной изображение  
    // $w - ширина уменьшенной копии  
    // $h - высота уменьшенной копии           
    // $size_img[0] - ширина исходного изображения  
    // $size_img[1] - высота исходного изображения  
    imagecopyresampled($dest_img, $src_img, 0, 0, 0, 0, $w, $h, $size_img[0], $size_img[1]);

    // Выводим уменьшенную копию в поток вывода  
    if ($size_img[2] == 2)
        header('Content-type: image/jpg');
    else if ($size_img[2] == 1)
        header('Content-type: image/gif');
    else if ($size_img[2] == 3)
        header('Content-type: image/png');
    // Выводим уменьшенную копию в поток вывода  
    if ($size_img[2] == 2)
        imagejpeg($dest_img);
    else if ($size_img[2] == 1)
        imagegif($dest_img);
    else if ($size_img[2] == 3)
        imagepng($dest_img);

    // чистим память от созданных изображений  
    imagedestroy($dest_img);
    imagedestroy($src_img);
    return true;
}
