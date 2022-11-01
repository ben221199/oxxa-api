<?php
namespace Ben221199\Oxxa\API\Objects\Resources;

use Ben221199\Oxxa\API\Objects\Details;
use SimpleXMLElement;

/**
 * @property string handle
 * @property string alias
 * @property NSGroup_Nameservers nameservers
 */
class NSGroup{

	/**
	 * @param Details $details
	 * @return NSGroup[]|NSGroup
	 */
	public static function fromDetails($details,$isSingle=false){
		$nsgroups = $details->xpath('nsgroup');
		if($isSingle){
            $nsgroups = [$details];
		}
		$data = [];
		/**@var SimpleXMLElement $nsgroup*/
		foreach($nsgroups AS $nsgroup){
            $nameservers = $nsgroup;
            if(!$isSingle){
                $nameservers = $nsgroup->xpath('nameservers')[0];
            }
			$d = new self;
			$d->handle					= ((string) @$nsgroup->xpath('handle')[0]) ?? null;
			$d->alias					= ((string) @$nsgroup->xpath('alias')[0]) ?? null;
			$d->nameservers				= (NSGroup_Nameservers::from($nameservers)) ?? null;
			$data[] = $d;
		}
		if($isSingle){
			return $data[0];
		}
		return $data;
	}

}
