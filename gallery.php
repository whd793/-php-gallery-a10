<?php
include_once './admin/gallery/galleryClass.php';
$galleryClass=new galleryClass();
$galleryList=$galleryClass->listGallery("where AlbumId='$_GET[id]'");

$albumList=$galleryClass->listAlbum();
?>

<style>
    body {
    padding: 30px 0px;
}

</style>
<div class="container" style="float:center; text-align:center;">
    <?php
  
  if(count($albumList)){
    foreach ($albumList as $value) {
      echo '<div style="display:inline-block; margin: 1em 1%; font-size:16pt;"><h3><a href="gallery.php?id='.$value["AlbumId"].'">'.$value["AlbumName"].'</a></h3></div>';
    }
    }
  
  
    if(count($galleryList)){
    foreach ($galleryList as $value) {
        echo '<div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail"> 
            <img src="galleryImage/'.$value["ImageName"].'" alt="...">
        </a>
    </div>';
    }
    }
    ?>
</div>


