<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 18:22
 */

class useAo {
    public function multiUpload()
    {
        $multiUploader = new MultiFileUploader();

        $uploaderOne = new UploaderCommand(8, 50, $multiUploader);
        $multiUploader->addUploader($uploaderOne);

        $uploaderTwo = new UploaderCommand(4, 20, $multiUploader);
        $multiUploader->addUploader($uploaderTwo);

        $multiUploader->run();
    }
}