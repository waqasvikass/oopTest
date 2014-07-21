<?php

/**
 * Image plugin which give easy to add and remove class for different plugin.
 * This plugin concept is design by applying the concept of decorator pattern. 
 *
 * @author waqas
 */
class imagePlugin {

    protected $imgsaver;
    public $img;

    // object to constructor
    public function __construct(SampleImage $imgsaver) {
        $this->imgsaver = $imgsaver;

        $this->resetImage();
    }

    // obtain image from ‘SampleImage’ object
    // thus the original property remains the same
    public function resetImage() {
        $this->img = $this->imgsaver->getImage();
    }

}

?>
