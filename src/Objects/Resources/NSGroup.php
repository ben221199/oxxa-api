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
	public static function fromDetails($details,$isSingle=true){
		$nsgroups = $details->xpath('NSGroup');
		if($isSingle){
            $nsgroups = [$details];
		}
		$data = [];
		/**@var SimpleXMLElement $nsgroup*/
		foreach($nsgroups AS $nsgroup){
			$d = new self;
			$d->handle					= ((string) @$nsgroup->xpath('handle')[0]) ?? null;
			$d->alias					= ((string) @$nsgroup->xpath('alias')[0]) ?? null;
			$d->nameservers				= (NSGroup_Nameservers::from($nsgroup)) ?? null;
			$data[] = $d;
		}
		if($isSingle){
			return $data[0];
		}
		return $data;
	}

}
