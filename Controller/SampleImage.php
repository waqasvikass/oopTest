<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *  Image class 
 *
 * @author waqas
 */
class SampleImage {

    public $image;

    public function __construct() {
        $image = NIL;
    }

    public function setImage($imagePath) {

        if (!file_exists($imagePath)) {
            throw new Exception('File Didnt Upload');
        } else {
            
        }

        $this->image = imagecreatefromjpeg($imagePath);
    }

    public function getImage() {
        return $this->image;
    }

    /* public function showImage()
      {
      // $im=loadJPEG('Car.jpg');

      imagejpeg($this->image,'t1.jpg');
      } */

    public function eraseImage() {
        imagedestroy($this->image);
    }

}

?>
