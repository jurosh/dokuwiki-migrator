<?php

namespace jurosh\migrate\dokuwiki;

interface WikiExecuteInterface  {
    
    /**
     * 
     * @param string $path
     * @param string $content
     * @return bool
     */
    public function insert($path,$content);
    
    /**
     * @param string[] $arrayOfUnexecuted An array of string objects.
     *  
     */
    public function processNotExecuted($arrayOfUnexecuted);
    
    /** 
     *      "C:\Program Files\wamp\www\dokuwiki"
     */
    public function getLocalPath(); 
    
    /**
     *       "http://localhost/dokuwiki/doku.php?id="
     */
    public function getServerPath();
    
}