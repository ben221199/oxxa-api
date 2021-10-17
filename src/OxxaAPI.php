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
        if(array_key_exists('sld',$arguments)){
            throw new InvalidArgumentException('Missing SLD argument.');
        }
        if(array_key_exists('tld',$arguments)){
            throw new InvalidArgumentException('Missing TLD argument.');
        }
        if(array_key_exists('autorenew',$arguments)){
            throw new InvalidArgumentException('Missing AUTORENEW argument.');
        }
        return $this->fetchCommandWithCredentials('autorenew',$arguments);
    }

    /**
     * @param array $arguments
     * @return mixed
     */
    public function CART_ADD(array $arguments){
        if(array_key_exists('sld',$arguments)){
            throw new InvalidArgumentException('Missing SLD argument.');
        }
        if(array_key_exists('tld',$arguments)){
            throw new InvalidArgumentException('Missing TLD argument.');
        }
        if(array_key_exists('producttype',$arguments)){
            throw new InvalidArgumentException('Missing PRODUCTTYPE argument.');
        }
        if(array_key_exists('enduserip',$arguments)){
            throw new InvalidArgumentException('Missing ENDUSERIP argument.');
        }
        return $this->fetchCommandWithCredentials('cart_add',$arguments);
    }

    function fetchCommandWithCredentials(string $command,array $arguments){
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

    function fetchCommand(array $arguments){
        return $this->fetch('GET','/command.php?'.http_build_query($arguments),[]);
    }

    function fetch(string $method,string $endpoint,array $headers,$body=null){
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