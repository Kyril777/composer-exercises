<?php
// Include composer autoload
require 'vendor/autoload.php';

// Import the Intervention Image Manager /**
 use Intervention\Image\ImageManagerStatic as Picture;

 // and you ar rady to go ...
 $image = Picture::make('img/dino.jpg')->resize(300, 200)->save('img/dino-2.jpg');

echo '<img src="img/dino-2.jpg" alt=""/>';
