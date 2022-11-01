<?php
namespace Ben221199\Oxxa\API\Objects\Resources;

use SimpleXMLElement;

/**
 * @property string ns1_fqdn
 * @property string ns2_fqdn
 * @property string ns3_fqdn
 * @property string ns4_fqdn
 * @property string ns5_fqdn
 * @property string ns6_fqdn
 */
class NSGroup_Nameservers{

    /**
     * @param SimpleXMLElement $element
     * @return NSGroup_Nameservers
     */
    public static function from($element){
        $nameservers = new self;
        $nameservers->ns1_fqdn	= ((string) @$element->xpath('ns1_fqdn')[0]) ?? null;
        $nameservers->ns2_fqdn	= ((string) @$element->xpath('ns2_fqdn')[0]) ?? null;
        $nameservers->ns3_fqdn	= ((string) @$element->xpath('ns3_fqdn')[0]) ?? null;
        $nameservers->ns4_fqdn	= ((string) @$element->xpath('ns4_fqdn')[0]) ?? null;
        $nameservers->ns5_fqdn	= ((string) @$element->xpath('ns5_fqdn')[0]) ?? null;
        $nameservers->ns6_fqdn	= ((string) @$element->xpath('ns6_fqdn')[0]) ?? null;
        return $nameservers;
    }

}