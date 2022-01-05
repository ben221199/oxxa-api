<?php
namespace Ben221199\Oxxa\API\Objects;

use SimpleXMLElement;

class Details{

    /**@var SimpleXMLElement $_simpleXML*/
    private $_simpleXML;

    public function getValue(){
        return (string) $this->_simpleXML;
    }

    public function getElementsByName($name){
        return $this->_simpleXML->xpath($name);
    }

    public static function fromXML(string $xml){
        $simpleXML = new SimpleXMLElement($xml);

        $details = new static;
        $details->_simpleXML = $simpleXML;
        return $details;
    }

}