<div class="gallery">

<?php
$dir = __DIR__.'/./uploads/';

// Open a directory, and read its contents
if (is_dir($dir)) {
  $filelist = scandir($dir);
  unset($filelist[0]);
  unset($filelist[1]);
  $filelist = array_reverse($filelist);

  if (sizeof($filelist) > 0) {
    foreach ($filelist as $key => $file) {
?>

  <div class="photo">
    <img src="uploads/<?=$file;?>" alt="" />
  </div>

<?php
    }
  } else {
    $no_image_found = true;
  }
}
?>

</div>

<style type="text/css">
  .gallery {
    display: flex;
    flex-wrap: wrap;
  }
  .gallery > .photo {
    background-color: #f1f1f1;
    width: 150px;
    margin: 10px;
    text-align: center;
    line-height: 75px;
    font-size: 30px;
  }
  .gallery > .photo > img {
    width: 100%;
    border: 1px solid #cfd8dc;
  }
</style>
