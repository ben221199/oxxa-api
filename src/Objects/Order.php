<?php
namespace Ben221199\Oxxa\API\Objects;

use SimpleXMLElement;

class Order{

    /**@var int $order_id*/
    private $order_id;

    /**@var string $command*/
    private $command;

    /**@var string $status_code*/
    private $status_code;

    /**@var string $status_description*/
    private $status_description;

    /**@var float $price*/
    private $price;

    /**@var Details $details*/
    private $details;

    /**@var bool $order_complete*/
    private $order_complete;

    /**@var bool $done*/
    private $done;

    public function getOrderId(){
        return $this->order_id;
    }

    public function getCommand(){
        return $this->command;
    }

    public function getStatusCode(){
        return $this->status_code;
    }

    public function getStatusDescription(){
        return $this->status_description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getDetails(){
        return $this->details;
    }

    public function isOrderComplete(){
        return $this->order_complete;
    }

    public function isDone(){
        return $this->done;
    }

    public static function fromXML(string $xml){
        $simpleXML = new SimpleXMLElement($xml);

        $order = new static;
        $order->order_id = intval((string) $simpleXML->xpath('order_id')[0]);
        $order->command = (string) $simpleXML->xpath('command')[0];
        $order->status_code = (string) $simpleXML->xpath('status_code')[0];
        $order->status_description = (string) $simpleXML->xpath('status_description')[0];
        $order->price = floatval((string) $simpleXML->xpath('price')[0]);
        $order->details = Details::fromXML($simpleXML->xpath('details')[0]->asXML());
        $order->order_complete = boolval((string) $simpleXML->xpath('order_complete')[0]);
        $order->done = boolval((string) $simpleXML->xpath('done')[0]);
        return $order;
    }

}