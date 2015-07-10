<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author mr
 */
interface ParserInterface {

    /**
     * Read file content
     */
    public function readFile($file);

    /**
     * Parse file content
     */
    public function parseFile();
}
