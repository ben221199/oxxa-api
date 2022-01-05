<?php
namespace Ben221199\Oxxa\API\Objects;

use SimpleXMLElement;

class Channel{

    /**@var Order $order*/
    private $order;

    public function getOrder(){
        return $this->order;
    }

    public static function fromXML(string $xml){
        $simpleXML = new SimpleXMLElement($xml);

        $channel = new static;
        $channel->order = Order::fromXML($simpleXML->xpath('order')[0]->asXML());
        return $channel;
    }

}