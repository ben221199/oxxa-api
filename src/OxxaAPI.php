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
	public function AUTORENEW(array $arguments){
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
	public function CART_ADD(array $arguments){
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
	public function CART_DEL(array $arguments){
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
	public function CART_GET(array $arguments){
		if(!array_key_exists('cart_id',$arguments)){
			throw new InvalidArgumentException('Missing CART_ID argument.');
		}
		return $this->fetchCommandWithCredentials('cart_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function CART_LIST(array $arguments){
		return $this->fetchCommandWithCredentials('cart_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function CART_PURCHASE(array $arguments){
		if(!array_key_exists('cart_id',$arguments)){
			throw new InvalidArgumentException('Missing CART_ID argument.');
		}
		return $this->fetchCommandWithCredentials('cart_purchase',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function CART_UPD(array $arguments){
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
	public function DNSRECORD_ADD(array $arguments){
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
	public function DNSRECORD_DEL(array $arguments){
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
	public function DNSRECORD_LIST(array $arguments){
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
	public function DNSSEC_ADD(array $arguments){
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
	public function DNSSEC_DEL(array $arguments){
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
	public function DNSSEC_INFO(array $arguments){
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
	public function DNSTEMPLATE_ADD(array $arguments){
		if(!array_key_exists('alias',$arguments)){
			throw new InvalidArgumentException('Missing ALIAS argument.');
		}
		return $this->fetchCommandWithCredentials('dnstemplate_add',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_DEL(array $arguments){
		if(!array_key_exists('handle',$arguments)){
			throw new InvalidArgumentException('Missing HANDLE argument.');
		}
		return $this->fetchCommandWithCredentials('dnstemplate_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_GET(array $arguments){
		if(!array_key_exists('handle',$arguments)){
			throw new InvalidArgumentException('Missing HANDLE argument.');
		}
		return $this->fetchCommandWithCredentials('dnstemplate_get',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_LIST(array $arguments){
		return $this->fetchCommandWithCredentials('dnstemplate_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DNSTEMPLATE_RECORD_ADD(array $arguments){
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
	public function DNSTEMPLATE_RECORD_DEL(array $arguments){
		if(!array_key_exists('recordid',$arguments)){
			throw new InvalidArgumentException('Missing RECORDID argument.');
		}
		return $this->fetchCommandWithCredentials('dnstemplate_record_del',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_CHECK(array $arguments){
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
	public function DOMAIN_DEL(array $arguments){
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
	public function DOMAIN_EPP(array $arguments){
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
	public function DOMAIN_INF(array $arguments){
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
	public function DOMAIN_LIST(array $arguments){
		return $this->fetchCommandWithCredentials('domain_list',$arguments);
	}

	/**
	 * @param array $arguments
	 * @return mixed
	 */
	public function DOMAIN_NS_UPD(array $arguments){
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
	public function DOMAIN_PUSH(array $arguments){
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
	public function DOMAIN_RESTORE(array $arguments){
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
	public function DOMAIN_UPD(array $arguments){
		if(!array_key_exists('sld',$arguments)){
			throw new InvalidArgumentException('Missing SLD argument.');
		}
		if(!array_key_exists('tld',$arguments)){
			throw new InvalidArgumentException('Missing TLD argument.');
		}
		return $this->fetchCommandWithCredentials('domain_upd',$arguments);
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

	protected function fetchCommand(array $arguments){
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