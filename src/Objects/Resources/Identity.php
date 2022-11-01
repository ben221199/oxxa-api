<?php
namespace Ben221199\Oxxa\API\Objects\Resources;

use Ben221199\Oxxa\API\Objects\Details;
use SimpleXMLElement;

/**
 * @property string handle
 * @property string alias
 * @property string company
 * @property string company_name
 * @property string company_type
 * @property string jobtitle
 * @property string firstname
 * @property string lastname
 * @property string street
 * @property string number
 * @property string suffix
 * @property string postalcode
 * @property string postalbirth
 * @property string city
 * @property string state
 * @property string tel
 * @property string fax
 * @property string email
 * @property string country
 * @property string datebirth
 * @property string placebirth
 * @property string countrybirth
 * @property string idnumber
 * @property string regnumber
 * @property string vatnumber
 * @property string tmnumber
 * @property string tmcountry
 * @property string idcarddate
 * @property string idcardissuer
 * @property string xxxmemberid
 * @property string xxxpassword
 * @property string ens_id
 * @property string ens_password
 * @property string profession
 * @property string travel_uin_id
 * @property string hk_industry_type
 * @property string last_updated
 * @property string name
 */
class Identity{

	/**
	 * @param Details $details
	 * @return Domain[]|Domain
	 */
	public static function fromDetails($details,$isSingle=false){
        $identities = $details->xpath('identity');
		if($isSingle){
            $identities = [$details];
		}
		$data = [];
		/**@var SimpleXMLElement $identity*/
		foreach($identities AS $identity){
			$d = new self;
            $d->handle				= ((string) @$identity->xpath('handle')[0]) ?? null;
            $d->alias				= ((string) @$identity->xpath('alias')[0]) ?? null;
            $d->company				= ((string) @$identity->xpath('company')[0]) ?? null;
            $d->company_name		= ((string) @$identity->xpath('company_name')[0]) ?? null;
            $d->company_type		= ((string) @$identity->xpath('company_type')[0]) ?? null;
            $d->jobtitle			= ((string) @$identity->xpath('jobtitle')[0]) ?? null;
            $d->firstname			= ((string) @$identity->xpath('firstname')[0]) ?? null;
            $d->lastname			= ((string) @$identity->xpath('lastname')[0]) ?? null;
            $d->street				= ((string) @$identity->xpath('street')[0]) ?? null;
            $d->number				= ((string) @$identity->xpath('number')[0]) ?? null;
            $d->suffix				= ((string) @$identity->xpath('suffix')[0]) ?? null;
            $d->postalcode			= ((string) @$identity->xpath('postalcode')[0]) ?? null;
            $d->postalbirth			= ((string) @$identity->xpath('postalbirth')[0]) ?? null;
            $d->city				= ((string) @$identity->xpath('city')[0]) ?? null;
            $d->state				= ((string) @$identity->xpath('state')[0]) ?? null;
            $d->tel					= ((string) @$identity->xpath('tel')[0]) ?? null;
            $d->fax					= ((string) @$identity->xpath('fax')[0]) ?? null;
            $d->email				= ((string) @$identity->xpath('email')[0]) ?? null;
            $d->country				= ((string) @$identity->xpath('country')[0]) ?? null;
            $d->datebirth			= ((string) @$identity->xpath('datebirth')[0]) ?? null;
            $d->placebirth			= ((string) @$identity->xpath('placebirth')[0]) ?? null;
            $d->countrybirth		= ((string) @$identity->xpath('countrybirth')[0]) ?? null;
            $d->idnumber			= ((string) @$identity->xpath('idnumber')[0]) ?? null;
            $d->regnumber			= ((string) @$identity->xpath('regnumber')[0]) ?? null;
            $d->vatnumber			= ((string) @$identity->xpath('vatnumber')[0]) ?? null;
            $d->tmnumber			= ((string) @$identity->xpath('tmnumber')[0]) ?? null;
            $d->tmcountry			= ((string) @$identity->xpath('tmcountry')[0]) ?? null;
            $d->idcarddate			= ((string) @$identity->xpath('idcarddate')[0]) ?? null;
            $d->idcardissuer		= ((string) @$identity->xpath('idcardissuer')[0]) ?? null;
            $d->xxxmemberid			= ((string) @$identity->xpath('xxxmemberid')[0]) ?? null;
            $d->xxxpassword			= ((string) @$identity->xpath('xxxpassword')[0]) ?? null;
            $d->ens_id				= ((string) @$identity->xpath('ens_id')[0]) ?? null;
            $d->ens_password		= ((string) @$identity->xpath('ens_password')[0]) ?? null;
            $d->profession			= ((string) @$identity->xpath('profession')[0]) ?? null;
            $d->travel_uin_id		= ((string) @$identity->xpath('travel_uin_id')[0]) ?? null;
            $d->hk_industry_type	= ((string) @$identity->xpath('hk_industry_type')[0]) ?? null;
            $d->last_updated		= ((string) @$identity->xpath('last_updated')[0]) ?? null;
            $d->name				= ((string) @$identity->xpath('name')[0]) ?? null;
			$data[] = $d;
		}
		if($isSingle){
			return $data[0];
		}
		return $data;
	}

}
