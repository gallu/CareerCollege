<?php  // SplFileInfo.php

$fi = new SplFileInfo( __FILE__ );
//
echo 'getBasename : '  , $fi->getBasename() , "<br>\n";
echo 'getRealPath : '  , $fi->getRealPath() , "<br>\n";
echo 'getExtension : ' , $fi->getExtension() , "<br>\n";
echo 'getFilename : '  , $fi->getFilename() , "<br>\n";
echo 'getPath : '      , $fi->getPath() , "<br>\n";
echo 'getATime : '     , $fi->getATime() , "<br>\n";
echo 'getInode : '     , $fi->getInode() , "<br>\n";
echo 'getOwner : '     , $fi->getOwner() , "<br>\n";
echo 'getSize : '      , $fi->getSize() , "<br>\n";
