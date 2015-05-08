<?php

namespace jurosh\migrate\dokuwiki {


interface WikiInterface  {
    public static function Transform($localPath,$serverPath);
    public static function wasTransformed();
}
}