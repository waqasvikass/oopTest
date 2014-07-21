<?php

/**
 * Description of Resize plugin as an example of how to extend and applying the effects to image.
 * this can even be organize in group plugin and then individual plugin.
 * @author waqas
 */
class resizePlugin extends imagePlugin {

    private $imgPlugin;

    public function __construct(imagePlugin $imgPlugin) {
        $this->imgPlugin = $imgPlugin;
    }

    // cResize the image 
    public function resizeImage($precentage) {

        // The file
        $imagename = $this->imgPlugin->img;
        $percent = $precentage;

// Content type
        // header('Content-Type: image/jpeg');
// Get new dimensions

        $width = imagesx($this->imgPlugin->img);
        $height = imagesy($this->imgPlugin->img);
        $new_width = $width * $percent;
        $new_height = $height * $percent;

// Resample
        $image_p = imagecreatetruecolor($new_width, $new_height);
        //$image = imagecreatefromjpeg($imagename);
        imagecopyresampled($image_p, $this->imgPlugin->img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
        imagejpeg($image_p, 'resize.jpeg');
        echo "applied the resize effects";
        //imagedestroy($image_p);
    }

    public function applyEffect() {
        
    }

}

?>
