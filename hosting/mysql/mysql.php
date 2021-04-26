<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HostUkraineAPI\hosting\mysql;

/**
 * Description of mysql
 *
 * @author stas
 */
class mysql {
       
    
    static function ls(int $account_id) {
        
        return [
            'hosting/mysql/dbinterface/load',
            [
                'account_id' => $account_id,                
            ]
        ];
        
    }
    
}
