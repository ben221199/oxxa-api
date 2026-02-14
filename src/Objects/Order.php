<?php
namespace Ben221199\Oxxa\API\Objects;

use Exception;

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

    public function getOrderId(): int{
        return $this->order_id;
    }

    public function getCommand(): string{
        return $this->command;
    }

    public function getStatusCode(): string{
        return $this->status_code;
    }

    public function getStatusDescription(): string{
        return $this->status_description;
    }

    public function getPrice(): float{
        return $this->price;
    }

    public function getDetails(): Details{
        return $this->details;
    }

    public function isOrderComplete(): bool{
        return $this->order_complete;
    }

    public function isDone(): bool{
        return $this->done;
    }

    /**
     * @throws Exception
     */
    public static function fromXML(string $xml): self{
        $simpleXML = new SimpleXMLElement($xml);

        $order = new static;
        $order->order_id = intval((string) $simpleXML->xpath('order_id')[0]);
        $order->command = (string) $simpleXML->xpath('command')[0];
        $order->status_code = (string) $simpleXML->xpath('status_code')[0];
        $order->status_description = (string) $simpleXML->xpath('status_description')[0];
        $order->price = floatval((string) $simpleXML->xpath('price')[0]);
        $detailsXML = $simpleXML->xpath('details')[0] ?? null;
        $order->details = $detailsXML?Details::fromXML($detailsXML->asXML()):null;
        $order->order_complete = boolval((string) $simpleXML->xpath('order_complete')[0]);
        $order->done = boolval((string) $simpleXML->xpath('done')[0]);
        return $order;
    }

}
