<?php
namespace Ben221199\Oxxa\API\Objects\Resources;

use Ben221199\Oxxa\API\Objects\Details;
use SimpleXMLElement;

/**
 * @property string domainname
 * @property string nsgroup
 * @property string identity-registrant
 * @property string identity-admin
 * @property string identity-billing
 * @property string identity-tech
 * @property string identity-reseller
 * @property string start_date
 * @property string expire_date
 * @property string quarantaine_end
 * @property string notice_date
 * @property string autorenew
 * @property string away_date
 * @property string last_renew_date
 * @property string lock
 * @property string usetrustee
 * @property string dnssec
 */
class Domain{

	/**
	 * @param Details $details
	 * @return Domain[]|Domain
	 */
	public static function fromDetails($details,$isSingle=false){
		$domains = $details->xpath('domain');
		if($isSingle){
			$domains = [$details];
		}
		$data = [];
		/**@var SimpleXMLElement $domain*/
		foreach($domains AS $domain){
			$d = new self;
			$d->domainname				= ((string) @$domain->xpath('domainname')[0]) ?? null;
			$d->nsgroup					= ((string) @$domain->xpath('nsgroup')[0]) ?? null;
			$d->{'identity-registrant'}	= ((string) @$domain->xpath('identity-registrant')[0]) ?? null;
			$d->{'identity-admin'}		= ((string) @$domain->xpath('identity-admin')[0]) ?? null;
			$d->{'identity-billing'}	= ((string) @$domain->xpath('identity-billing')[0]) ?? null;
			$d->{'identity-tech'}		= ((string) @$domain->xpath('identity-tech')[0]) ?? null;
			$d->{'identity-reseller'}	= ((string) @$domain->xpath('identity-reseller')[0]) ?? null;
			$d->start_date				= ((string) @$domain->xpath('start_date')[0]) ?? null;
			$d->expire_date				= ((string) @$domain->xpath('expire_date')[0]) ?? null;
			$d->quarantaine_end			= ((string) @$domain->xpath('quarantaine_end')[0]) ?? null;
			$d->notice_date				= ((string) @$domain->xpath('notice_date')[0]) ?? null;
			$d->autorenew				= ((string) @$domain->xpath('autorenew')[0]) ?? null;
			$d->away_date				= ((string) @$domain->xpath('away_date')[0]) ?? null;
			$d->last_renew_date			= ((string) @$domain->xpath('last_renew_date')[0]) ?? null;
			$d->lock					= ((string) @$domain->xpath('lock')[0]) ?? null;
			$d->usetrustee				= ((string) @$domain->xpath('usetrustee')[0]) ?? null;
			$d->dnssec					= ((string) @$domain->xpath('dnssec')[0]) ?? null;
			$data[] = $d;
		}
		if($isSingle){
			return $data[0];
		}
		return $data;
	}

}
