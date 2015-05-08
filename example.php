<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Example
 *
 * @author Richard
 */
class Example implements jurosh\migrate\dokuwiki\WikiExecuteInterface{

    public function getLocalPath() {
        return "C:\\Program Files\\wamp\\www\\dokuwiki";
    }


    public function getServerPath() {
        return "http://localhost/dokuwiki/doku.php?id=";
    }

    public function insert($path, $content) {
        
    }

    public function processNotExecuted($arrayOfUnexecuted) {
        
    }

}
