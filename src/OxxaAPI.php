<?php
namespace Ben221199\Oxxa\API;

use InvalidArgumentException;

class OxxaAPI{

	private $baseURL;
	private $user;
	private $password;
	private $useMD5;
	private $isTesting;

	/**
	 * OxxaAPI constructor.
	 * @param $baseURL
	 * @param $user
	 * @param $password
	 * @param $useMD5
	 * @param $isTesting
	 */
	public function __construct($baseURL,$user,$password,$useMD5=true,$isTesting=false){
		$this->baseURL = $baseURL;
		$this->user = $user;
		$this->password = $password;
		$this->useMD5 = $useMD5;
		$this->isTesting = $isTesting;
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function AUTORENEW(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('autorenew',$arguments)){
			throw new InvalidArgumentException('Missing AUTORENEW argument.');
		}
		return $this->fetchCommandWithCredentials('autorenew',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function CART_ADD(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('producttype',$arguments)){
			throw new InvalidArgumentException('Missing PRODUCTTYPE argument.');
		}
		if(!array_key_exists('enduserip',$arguments)){
			throw new InvalidArgumentException('Missing ENDUSERIP argument.');
		}
		return $this->fetchCommandWithCredentials('cart_add',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function CART_DEL(array $arguments=[]){
		if(!array_key_exists('enduserip',$arguments)){
			throw new InvalidArgumentException('Missing ENDUSERIP argument.');
		}
		if(!array_key_exists('itemid',$arguments)){
			throw new InvalidArgumentException('Missing ITEMID argument.');
		}
		if(!array_key_exists('emptycart',$arguments)){
			throw new InvalidArgumentException('Missing EMPTYCART argument.');
		}
		return $this->fetchCommandWithCredentials('cart_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function CART_GET(array $arguments=[]){
		if(!array_key_exists('cart_id',$arguments)){
			throw new InvalidArgumentException('Missing CART_ID argument.');
		}
		return $this->fetchCommandWithCredentials('cart_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function CART_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('cart_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function CART_PURCHASE(array $arguments=[]){
		if(!array_key_exists('cart_id',$arguments)){
			throw new InvalidArgumentException('Missing CART_ID argument.');
		}
		return $this->fetchCommandWithCredentials('cart_purchase',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function CART_UPD(array $arguments=[]){
		if(!array_key_exists('enduserip',$arguments)){
			throw new InvalidArgumentException('Missing ENDUSERIP argument.');
		}
		if(!array_key_exists('itemid',$arguments)){
			throw new InvalidArgumentException('Missing ITEMID argument.');
		}
		return $this->fetchCommandWithCredentials('cart_upd',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSRECORD_ADD(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('value',$arguments)){
			throw new InvalidArgumentException('Missing VALUE argument.');
		}
		if(!array_key_exists('type',$arguments)){
			throw new InvalidArgumentException('Missing TYPE argument.');
		}
		if(!array_key_exists('data',$arguments)){
			throw new InvalidArgumentException('Missing DATA argument.');
		}
		return $this->fetchCommandWithCredentials('dnsrecord_add',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSRECORD_DEL(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('value',$arguments)){
			throw new InvalidArgumentException('Missing VALUE argument.');
		}
		if(!array_key_exists('type',$arguments)){
			throw new InvalidArgumentException('Missing TYPE argument.');
		}
		if(!array_key_exists('data',$arguments)){
			throw new InvalidArgumentException('Missing DATA argument.');
		}
		if(!array_key_exists('ttl',$arguments)){
			throw new InvalidArgumentException('Missing TTL argument.');
		}
		return $this->fetchCommandWithCredentials('dnsrecord_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSRECORD_LIST(array $arguments=[]){
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		return $this->fetchCommandWithCredentials('dnsrecord_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSSEC_ADD(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('flag',$arguments)){
			throw new InvalidArgumentException('Missing FLAG argument.');
		}
		if(!array_key_exists('protocol',$arguments)){
			throw new InvalidArgumentException('Missing PROTOCOL argument.');
		}
		if(!array_key_exists('alg',$arguments)){
			throw new InvalidArgumentException('Missing ALG argument.');
		}
		if(!array_key_exists('pubkey',$arguments)){
			throw new InvalidArgumentException('Missing PUBKEY argument.');
		}
		return $this->fetchCommandWithCredentials('dnssec_add',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSSEC_DEL(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('flag',$arguments)){
			throw new InvalidArgumentException('Missing FLAG argument.');
		}
		if(!array_key_exists('protocol',$arguments)){
			throw new InvalidArgumentException('Missing PROTOCOL argument.');
		}
		if(!array_key_exists('alg',$arguments)){
			throw new InvalidArgumentException('Missing ALG argument.');
		}
		if(!array_key_exists('pubkey',$arguments)){
			throw new InvalidArgumentException('Missing PUBKEY argument.');
		}
		return $this->fetchCommandWithCredentials('dnssec_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSSEC_INFO(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('dnssec_info',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_ADD(array $arguments=[]){
		if(!array_key_exists('alias',$arguments)){
			throw new InvalidArgumentException('Missing ALIAS argument.');
		}
		return $this->fetchCommandWithCredentials('dnstemplate_add',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_DEL(array $arguments=[]){
		if(!array_key_exists('handle',$arguments)){
			throw new InvalidArgumentException('Missing HANDLE argument.');
		}
		return $this->fetchCommandWithCredentials('dnstemplate_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_GET(array $arguments=[]){
		if(!array_key_exists('handle',$arguments)){
			throw new InvalidArgumentException('Missing HANDLE argument.');
		}
		return $this->fetchCommandWithCredentials('dnstemplate_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('dnstemplate_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_RECORD_ADD(array $arguments=[]){
		if(!array_key_exists('handle',$arguments)){
			throw new InvalidArgumentException('Missing HANDLE argument.');
		}
		if(!array_key_exists('value',$arguments)){
			throw new InvalidArgumentException('Missing VALUE argument.');
		}
		if(!array_key_exists('type',$arguments)){
			throw new InvalidArgumentException('Missing TYPE argument.');
		}
		if(!array_key_exists('data',$arguments)){
			throw new InvalidArgumentException('Missing DATA argument.');
		}
		if(!array_key_exists('ttl',$arguments)){
			throw new InvalidArgumentException('Missing TTL argument.');
		}
		return $this->fetchCommandWithCredentials('dnstemplate_record_add',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_RECORD_DEL(array $arguments=[]){
		if(!array_key_exists('recordid',$arguments)){
			throw new InvalidArgumentException('Missing RECORDID argument.');
		}
		return $this->fetchCommandWithCredentials('dnstemplate_record_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_CHECK(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('domain_check',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_DEL(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('domain_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_EPP(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('domain_epp',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_INF(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('domain_inf',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('domain_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_NS_UPD(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('domain_ns_upd',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_PUSH(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('username',$arguments)){
			throw new InvalidArgumentException('Missing USERNAME argument.');
		}
		return $this->fetchCommandWithCredentials('domain_push',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_RESTORE(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('domain_restore',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_UPD(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('domain_upd',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function FUNDS_GET(array $arguments=[]){
		return $this->fetchCommandWithCredentials('funds_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function FUNDS_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('funds_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function FOARESEND(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('foaresend',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function GLUE_ADD(array $arguments=[]){
		if(!array_key_exists('ns_fqdn',$arguments)){
			throw new InvalidArgumentException('Missing NS_FQDN argument.');
		}
		if(!array_key_exists('ns_ip',$arguments)){
			throw new InvalidArgumentException('Missing NS_IP argument.');
		}
		return $this->fetchCommandWithCredentials('glue_add',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function GLUE_DEL(array $arguments=[]){
		if(!array_key_exists('ns_fqdn',$arguments)){
			throw new InvalidArgumentException('Missing NS_FQDN argument.');
		}
		if(!array_key_exists('ns_ip',$arguments)){
			throw new InvalidArgumentException('Missing NS_IP argument.');
		}
		return $this->fetchCommandWithCredentials('glue_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function GLUE_GET(array $arguments=[]){
		if(!array_key_exists('ns_fqdn',$arguments)){
			throw new InvalidArgumentException('Missing NS_FQDN argument.');
		}
		return $this->fetchCommandWithCredentials('glue_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function GLUE_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('glue_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function GLUE_UPD(array $arguments=[]){
		if(!array_key_exists('ns_fqdn',$arguments)){
			throw new InvalidArgumentException('Missing NS_FQDN argument.');
		}
		if(!array_key_exists('ns_ip',$arguments)){
			throw new InvalidArgumentException('Missing NS_IP argument.');
		}
		return $this->fetchCommandWithCredentials('glue_upd',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function IDENTITY_ADD(array $arguments=[]){
		//Required arguments depend on TLD
		return $this->fetchCommandWithCredentials('identity_add',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function IDENTITY_DEL(array $arguments=[]){
		if(!array_key_exists('identity',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY argument.');
		}
		return $this->fetchCommandWithCredentials('identity_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function IDENTITY_GET(array $arguments=[]){
		if(!array_key_exists('identity',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY argument.');
		}
		return $this->fetchCommandWithCredentials('identity_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function IDENTITY_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('identity_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function IDENTITY_UPD(array $arguments=[]){
		if(!array_key_exists('identity',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY argument.');
		}
		return $this->fetchCommandWithCredentials('identity_upd',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function LOCK(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('lock',$arguments)){
			throw new InvalidArgumentException('Missing LOCK argument.');
		}
		return $this->fetchCommandWithCredentials('lock',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function NSGROUP_ADD(array $arguments=[]){
		if(!array_key_exists('alias',$arguments)){
			throw new InvalidArgumentException('Missing ALIAS argument.');
		}
		if(!array_key_exists('ns1_fqdn',$arguments)){
			throw new InvalidArgumentException('Missing NS1_FQDN argument.');
		}
		if(!array_key_exists('ns2_fqdn',$arguments)){
			throw new InvalidArgumentException('Missing NS2_FQDN argument.');
		}
		return $this->fetchCommandWithCredentials('nsgroup_add',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function NSGROUP_DEL(array $arguments=[]){
		if(!array_key_exists('nsgroup',$arguments)){
			throw new InvalidArgumentException('Missing NSGROUP argument.');
		}
		return $this->fetchCommandWithCredentials('nsgroup_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function NSGROUP_GET(array $arguments=[]){
		if(!array_key_exists('nsgroup',$arguments)){
			throw new InvalidArgumentException('Missing NSGROUP argument.');
		}
		return $this->fetchCommandWithCredentials('nsgroup_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function NSGROUP_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('nsgroup_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function NSGROUP_UPD(array $arguments=[]){
		if(!array_key_exists('nsgroup',$arguments)){
			throw new InvalidArgumentException('Missing NSGROUP argument.');
		}
		return $this->fetchCommandWithCredentials('nsgroup_upd',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function ORDER_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('order_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function PRICECHECK(array $arguments=[]){
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('pricecheck',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function QUEUE_GET(array $arguments=[]){
		if(!array_key_exists('queue_id',$arguments)){
			throw new InvalidArgumentException('Missing QUEUE_ID argument.');
		}
		return $this->fetchCommandWithCredentials('queue_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function QUEUE_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('queue_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function QUEUE_UPD(array $arguments=[]){
		if(!array_key_exists('queue_id',$arguments)){
			throw new InvalidArgumentException('Missing QUEUE_ID argument.');
		}
		return $this->fetchCommandWithCredentials('queue_upd',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function QUEUE_DEL(array $arguments=[]){
		if(!array_key_exists('queue_id',$arguments)){
			throw new InvalidArgumentException('Missing QUEUE_ID argument.');
		}
		return $this->fetchCommandWithCredentials('queue_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function REGISTER(array $arguments=[]){
		if(!array_key_exists('identity-admin',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY-ADMIN argument.');
		}
		if(!array_key_exists('identity-registrant',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY-REGISTRANT argument.');
		}
		if(!array_key_exists('nsgroup',$arguments)){
			throw new InvalidArgumentException('Missing NSGROUP argument.');
		}
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('period',$arguments)){
			throw new InvalidArgumentException('Missing PERIOD argument.');
		}
		if(!array_key_exists('autorenew',$arguments)){
			throw new InvalidArgumentException('Missing AUTORENEW argument.');
		}
		return $this->fetchCommandWithCredentials('register',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function REGISTER_STATUS(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('register_status',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function RENEW(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('period',$arguments)){
			throw new InvalidArgumentException('Missing PERIOD argument.');
		}
		return $this->fetchCommandWithCredentials('renew',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function RESELLERADD(array $arguments=[]){
		if(!array_key_exists('alias',$arguments)){
			throw new InvalidArgumentException('Missing ALIAS argument.');
		}
		if(!array_key_exists('company',$arguments)){
			throw new InvalidArgumentException('Missing COMPANY argument.');
		}
		if(!array_key_exists('firstname',$arguments)){
			throw new InvalidArgumentException('Missing FIRSTNAME argument.');
		}
		if(!array_key_exists('lastname',$arguments)){
			throw new InvalidArgumentException('Missing LASTNAME argument.');
		}
		if(!array_key_exists('street',$arguments)){
			throw new InvalidArgumentException('Missing STREET argument.');
		}
		if(!array_key_exists('number',$arguments)){
			throw new InvalidArgumentException('Missing NUMBER argument.');
		}
		if(!array_key_exists('postal',$arguments)){
			throw new InvalidArgumentException('Missing POSTAL argument.');
		}
		if(!array_key_exists('city',$arguments)){
			throw new InvalidArgumentException('Missing CITY argument.');
		}
		if(!array_key_exists('tel',$arguments)){
			throw new InvalidArgumentException('Missing TEL argument.');
		}
		if(!array_key_exists('email',$arguments)){
			throw new InvalidArgumentException('Missing EMAIL argument.');
		}
		if(!array_key_exists('country',$arguments)){
			throw new InvalidArgumentException('Missing COUNTRY argument.');
		}
		return $this->fetchCommandWithCredentials('reselleradd',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function RESELLERDEL(array $arguments=[]){
		if(!array_key_exists('identity',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY argument.');
		}
		return $this->fetchCommandWithCredentials('resellerdel',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function RESELLERGET(array $arguments=[]){
		if(!array_key_exists('identity',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY argument.');
		}
		return $this->fetchCommandWithCredentials('resellerget',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function RESELLERLIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('resellerlist',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 * @see RESELLERADD
	 */
	public function RESELLERUPD(array $arguments=[]){
		if(!array_key_exists('identity',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY argument.');
		}
		return $this->fetchCommandWithCredentials('resellerupd',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SERVER_CREATE(array $arguments=[]){
		if(!array_key_exists('type',$arguments)){
			throw new InvalidArgumentException('Missing TYPE argument.');
		}
		if(!array_key_exists('name',$arguments)){
			throw new InvalidArgumentException('Missing NAME argument.');
		}
		if(!array_key_exists('host',$arguments)){
			throw new InvalidArgumentException('Missing HOST argument.');
		}
		if(!array_key_exists('username',$arguments)){
			throw new InvalidArgumentException('Missing USERNAME argument.');
		}
		if(!array_key_exists('password',$arguments)){
			throw new InvalidArgumentException('Missing PASSWORD argument.');
		}
		return $this->fetchCommandWithCredentials('server_create',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SERVER_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('server_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SERVER_GET(array $arguments=[]){
		if(!array_key_exists('server_id',$arguments)){
			throw new InvalidArgumentException('Missing SERVER_ID argument.');
		}
		return $this->fetchCommandWithCredentials('server_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SERVER_DELETE(array $arguments=[]){
		if(!array_key_exists('server_id',$arguments)){
			throw new InvalidArgumentException('Missing SERVER_ID argument.');
		}
		return $this->fetchCommandWithCredentials('server_delete',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SERVER_UPDATE(array $arguments=[]){
		if(!array_key_exists('name',$arguments)){
			throw new InvalidArgumentException('Missing NAME argument.');
		}
		if(!array_key_exists('host',$arguments)){
			throw new InvalidArgumentException('Missing HOST argument.');
		}
		if(!array_key_exists('username',$arguments)){
			throw new InvalidArgumentException('Missing USERNAME argument.');
		}
		if(!array_key_exists('password',$arguments)){
			throw new InvalidArgumentException('Missing PASSWORD argument.');
		}
		return $this->fetchCommandWithCredentials('server_update',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('ssl_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_AUTORENEW(array $arguments=[]){
		if(!array_key_exists('sslid',$arguments)){
			throw new InvalidArgumentException('Missing SSLID argument.');
		}
		if(!array_key_exists('autorenew',$arguments)){
			throw new InvalidArgumentException('Missing AUTORENEW argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_autorenew',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_PRODUCT_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('ssl_product_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_APPROVERLIST(array $arguments=[]){
		if(!array_key_exists('ssl',$arguments)){
			throw new InvalidArgumentException('Missing SSL argument.');
		}
		if(!array_key_exists('period',$arguments)){
			throw new InvalidArgumentException('Missing PERIOD argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_approverlist',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_STATUS(array $arguments=[]){
		if(!array_key_exists('sslid',$arguments)){
			throw new InvalidArgumentException('Missing SSLID argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_status',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_EXTENDED_STATUS(array $arguments=[]){
		if(!array_key_exists('sslid',$arguments)){
			throw new InvalidArgumentException('Missing SSLID argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_extended_status',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_CANCEL(array $arguments=[]){
		if(!array_key_exists('sslid',$arguments)){
			throw new InvalidArgumentException('Missing SSLID argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_cancel',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_NEW(array $arguments=[]){
		if(!array_key_exists('identity-organisation',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY-ORGANISATION argument.');
		}
		if(!array_key_exists('identity-admin',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY-ADMIN argument.');
		}
		if(!array_key_exists('identity-tech',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY-TECH argument.');
		}
		if(!array_key_exists('ssl',$arguments)){
			throw new InvalidArgumentException('Missing SSL argument.');
		}
		if(!array_key_exists('period',$arguments)){
			throw new InvalidArgumentException('Missing PERIOD argument.');
		}
		if(!array_key_exists('csr',$arguments)){
			throw new InvalidArgumentException('Missing CSR argument.');
		}
		if(!array_key_exists('autorenew',$arguments)){
			throw new InvalidArgumentException('Missing AUTORENEW argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_new',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_REISSUE(array $arguments=[]){
		if(!array_key_exists('sslid',$arguments)){
			throw new InvalidArgumentException('Missing SSLID argument.');
		}
		if(!array_key_exists('csr',$arguments)){
			throw new InvalidArgumentException('Missing CSR argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_reissue',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_CHANGE_APPROVER(array $arguments=[]){
		if(!array_key_exists('sslid',$arguments)){
			throw new InvalidArgumentException('Missing SSLID argument.');
		}
		if(!array_key_exists('approver',$arguments)){
			throw new InvalidArgumentException('Missing APPROVER argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_change_approver',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_DOWNLOAD(array $arguments=[]){
		if(!array_key_exists('sslid',$arguments)){
			throw new InvalidArgumentException('Missing SSLID argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_download',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_RESEND_APPROVER(array $arguments=[]){
		if(!array_key_exists('sslid',$arguments)){
			throw new InvalidArgumentException('Missing SSLID argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_resend_approver',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function SSL_REVOKE(array $arguments=[]){
		if(!array_key_exists('sslid',$arguments)){
			throw new InvalidArgumentException('Missing SSLID argument.');
		}
		return $this->fetchCommandWithCredentials('ssl_revoke',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function TASK_GET(array $arguments=[]){
		if(!array_key_exists('task_id',$arguments)){
			throw new InvalidArgumentException('Missing TASK_ID argument.');
		}
		return $this->fetchCommandWithCredentials('task_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function TASK_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('task_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function TRANSFER(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		if(!array_key_exists('identity-admin',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY-ADMIN argument.');
		}
		if(!array_key_exists('identity-registrant',$arguments)){
			throw new InvalidArgumentException('Missing IDENTITY-REGISTRANT argument.');
		}
		if(!array_key_exists('nsgroup',$arguments)){
			throw new InvalidArgumentException('Missing NSGROUP argument.');
		}
		if(!array_key_exists('period',$arguments)){
			throw new InvalidArgumentException('Missing PERIOD argument.');
		}
		return $this->fetchCommandWithCredentials('transfer',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function TRANSFER_STATUS(array $arguments=[]){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('transfer_status',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function USER_FUNDS(array $arguments=[]){
		return $this->fetchCommandWithCredentials('user_funds',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function USER_RESET(array $arguments=[]){
		if(!array_key_exists('username',$arguments)){
			throw new InvalidArgumentException('Missing USERNAME argument.');
		}
		return $this->fetchCommandWithCredentials('user_reset',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function USER_TLD_LIST(array $arguments=[]){
		return $this->fetchCommandWithCredentials('user_tld_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function OWNERCPENDING(array $arguments=[]){
		return $this->fetchCommandWithCredentials('ownercpending',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function OWNERCRESEND(array $arguments=[]){
		if(!array_key_exists('id',$arguments)){
			throw new InvalidArgumentException('Missing ID argument.');
		}
		return $this->fetchCommandWithCredentials('ownercresend',$arguments);
	}

	protected function fetchCommandWithCredentials(string $command,array $arguments){
		$basicArguments = [
			'apiuser'		=> $this->user,
			'apipassword'	=> $this->useMD5?('MD5'.md5($this->password)):$this->password,
			'command'		=> $command,
		];
		if($this->isTesting){
			$basicArguments = array_merge($basicArguments,[
				'test'			=> self::convertBoolean($this->isTesting),
			]);
		}

		return $this->fetchCommand(array_merge($basicArguments,$arguments));
	}

	protected function fetchCommand(array $arguments=[]){
		return $this->fetch('GET','/command.php?'.http_build_query($arguments),[]);
	}

	protected function fetch(string $method,string $endpoint,array $headers,$body=null){
		$ch = curl_init($this->baseURL.$endpoint);
		curl_setopt($ch,CURLOPT_CUSTOMREQUEST,$method);
		array_walk($headers,static function(string &$value,string $key){
			$value = $key.': '.$value;
		});
		curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
		if($body){
			curl_setopt($ch,CURLOPT_POSTFIELDS,$body);
		}
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

		$resp = curl_exec($ch);
		curl_close($ch);

		return $resp;
	}

	/**
	 * Converts boolean to 'Y' (Yes) or 'N' (No)
	 * @param $bool
	 * @return string
	 */
	public static function convertBoolean($bool){
		return $bool?'Y':'N';
	}

}