<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParserFactory
 *
 * @author mr
 */
class ParserFactory {

    public static function getParser($file) {

        switch (pathinfo($file, PATHINFO_EXTENSION)) {
            case "json":
                return new JsonParser($file);
            case "xml":
                return new XmlParser($file);
            case "yml":
                return new YamlParser($file);
            default:
                throw new Exception("File type unsupported");
        }
    }
}
