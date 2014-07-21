<?php

/**
 *  blur effects for demo purpose
 *
 * @author waqas
 */
class blurPlugin extends imagePlugin {

    private $imgPlugin;

    public function __construct(imagePlugin $imgPlugin) {
        $this->imgPlugin = $imgPlugin;
    }

    public function blur() {
        imagefilter($this->imgPlugin->img, IMG_FILTER_GAUSSIAN_BLUR);
        imagejpeg($this->imgPlugin->img, 'blur.jpg'); //this for test purpose
        echo "image is blur";
    }

}

?>
