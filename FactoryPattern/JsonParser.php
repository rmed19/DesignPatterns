<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JsonParser
 *
 * @author mr
 */
class JsonParser implements ParserInterface {

    public $content;

    public function __construct($file) {
        $this->readFile($file);
    }

    public function readFile($file) {
        if (file_exists($file)) {
            $this->content = file_get_contents($file);
        }
    }

    public function parseFile() {
        return json_decode($this->content);
    }
}
