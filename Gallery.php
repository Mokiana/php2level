<?php

include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templates');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('Gallery.tmpl');

    echo $template->render(array (
        'files1' => $files1,
        'files2' => $files2,
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
//$dir1 = "gallery_img/small";
//$dir2 = "gallery_img/big";// Путь к директории, в которой лежат изображения

//$files1 = array_slice(scandir($dir1), 2);
//$files2 = array_slice(scandir($dir2), 2);

        for ($i = 0; $i < count($files1); $i++) { ?>
            <a rel="gallery" class="photo" href="<?=$dir2."/".$files2[$i]?>" target="_blank"><img src="<?=$dir1."/".$files1[$i]?>" alt="" /></a>
        <?php } ?>
