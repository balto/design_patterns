<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 18:02
 */

class UploaderCommand {
    private $size;
    private $chunk;
    private $uploaded;
    private $multiUploader;

    public function __construct($speed, $size, MultiFileUploader $multiUploader)
    {
        $this->size = $size;
        $this->chunk = $size / $speed;
        $this->multiUploader = $multiUploader;
    }

    public function execute()
    {
        $this->uploaded += $this->chunk;

        print "\n" . $this->uploaded . '/' . $this->size;

        if ($this->uploaded < $this->size)
        {
            $this->multiUploader->addUploader($this);
        }
    }
}