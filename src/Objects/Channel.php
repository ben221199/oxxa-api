<?php
namespace Ben221199\Oxxa\API\Objects;

use Exception;

use SimpleXMLElement;

class Channel{

    /**@var ?Order|null $order*/
    private $order;

    /**
     * @return ?Order|null
     */
    public function getOrder(): ?Order{
        return $this->order;
    }

    /**
     * @param string $xml
     * @return self
     * @throws Exception
     */
    public static function fromXML(string $xml): self{
        $simpleXML = new SimpleXMLElement($xml);

        $channel = new static;
        $orderXML = $simpleXML->xpath('order')[0] ?? null;
        $channel->order = $orderXML?Order::fromXML($orderXML->asXML()):null;
        return $channel;
    }

}
