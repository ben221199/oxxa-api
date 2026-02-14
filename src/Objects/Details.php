<?php
namespace Ben221199\Oxxa\API\Objects;

use Exception;

use SimpleXMLElement;

class Details{

    /**@var SimpleXMLElement $_simpleXML*/
    private $_simpleXML;

    public function getValue(): string{
        return (string) $this->_simpleXML;
    }

    public function getElementsByName($name){
        return $this->xpath($name);
    }

    public function xpath($name){
        return $this->_simpleXML->xpath($name);
    }

    /**
     * @throws Exception
     */
    public static function fromXML(string $xml): self{
        $simpleXML = new SimpleXMLElement($xml);

        $details = new static;
        $details->_simpleXML = $simpleXML;
        return $details;
    }

}
