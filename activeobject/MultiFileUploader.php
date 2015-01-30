<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 17:54
 */

class MultiFileUploader {
    private $uploaders = array();

    public function addUploader(UploaderCommand $uploader)
    {
        $this->uploaders[] = $uploader;
    }

    public function run()
    {
        while (!empty($this->uploaders))
        {
            $uploader = array_shift($this->uploaders);
            $uploader->execute();
        }
    }
}