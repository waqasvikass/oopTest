<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // header("Location: /OopTest/MyClass.php");
        /**
         * *
         * @author waqas
         *
         */
        session_start();

// setup some definitions

        define("APP_PATH", dirname(__FILE__) . "/");

        define("PCAFW", true);

        /**
         *  autoload function
         * used to include the appropriate -controller- files when they are needed
         * 
         */
        function __autoload($class_name) {
            require_once('Controller/' . $class_name . '.php' );
        }

        //create multiple images and update to loadImages array

        $a = new LoadImages();
        $Img = new SampleImage();
        $a->uploadImage($Img);
        $Img2 = new SampleImage();
        $a->uploadImage($Img2);
        $Img3 = new SampleImage();
        $a->uploadImage($Img3);

        //access the image and apply proper effects and filter

        $sampleImg = new SampleImage();
        $sampleImg = $a->accessImage(0);

        //image path to be upload

        $sampleImg->setImage('pic.jpg');
        //different plugins
        $imageplg = new imagePlugin($sampleImg);
        $resize = new resizePlugin($imageplg);

        $blur = new blurPlugin($imageplg);
        $resize->resizeImage(.75);
        $blur->blur();
        //update the result

        var_dump($a);
        ?>
    </body>
</html>
