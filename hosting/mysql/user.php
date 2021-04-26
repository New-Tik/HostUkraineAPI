<?php

namespace HostUkraineAPI\hosting\mysql;

final class User{
    
    public function create(int $account_id, int $db_id, string $name, string $password, array $privileges) {
        
        
        
    }
    
    public function ls(int $account_id, int $db_id) {
        
        return [
            'hosting/mysql/dbinterface/load',
            [
                'account_id' => 0,
                
            ]
        ];
        
    }
    
}
