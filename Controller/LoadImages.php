<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of load multiple image into array
 *
 * @author waqas
 */
class LoadImages {

    private $multipleImg;

    public function __construct() {
        $this->multipleImg = array();
    }

    public function uploadImage($img) {


        array_push($this->multipleImg, $img);
    }

    public function accessImage($index) {


        $aIm = $this->multipleImg[$index];

        return $aIm;
    }

    public function updatedImage($parm, $index) {
        $this->multipleImg[$index] = $parm;

        //keep in different array /db table.....for safety purpose
    }

}

?>
