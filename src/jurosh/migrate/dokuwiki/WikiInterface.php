<?php

namespace jurosh\migrate\dokuwiki;


interface WikiInterface  {
    /**
     * 
     * @param \jurosh\migrate\dokuwiki\WikiExecuteInterface $asd
     */
    public function transform(WikiExecuteInterface $asd);
}
