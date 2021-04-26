<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './hosting/mysql/mysql.php';
namespace HostUkraineAPI;

use HostUkraineAPI\hosting\mysql;

class HostUkraineAPI {
    
    private int $account_id = 0;


    public function __construct() {
        
    }
    
    
    static function mysql(): \HostUkraineAPI\hosting\mysql{
        
    }  
    private function apiCall(string $action, array $post = []): array {
		$action = self::fixActionPath($action);
		
		// Отправляем запрос на сервер хостинг провайдера
		$ch = curl_init("https://adm.tools/action/{$action}/");
		curl_setopt_array($ch, [
			CURLOPT_POST => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER => ["Authorization: Bearer {$this->auth_token}"],
			CURLOPT_POSTFIELDS => http_build_query($post),
			CURLOPT_VERBOSE => true
		]);
		$json = curl_exec($ch);
		$response = @json_decode($json, true);

		$this->result = isset($response['result']) && $response['result'];

		return $response;
	}
    
}
