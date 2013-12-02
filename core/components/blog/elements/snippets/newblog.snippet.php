<?php

if(!$modx->addPackage('blog','/var/www/revomodx/modxfirst/core/components/blog/model/','akhtar_')) {
    return 'There was a problem adding your package!  Check the logs for more info!';
}

if (isset($_POST)) {

} else {
    $output = $modx->getChunk("createBlog");
}
return $output;