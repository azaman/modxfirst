<?php
if(!$modx->addPackage('blog','/var/www/modxfirst/core/components/blog/model/','akhtar_')) {
return 'There was a problem adding your package!  Check the logs for more info!';
}

$my_items = $modx->getCollection('Blogs');

$output = '';

if ($my_items) {
foreach ($my_items as $item) {
$output .= $item->get('blog') . '<br/>';
}
}
else {
return 'No items found.';
}
$output = $modx->getChunk("blog", array("blogcontent" => $output));
return $output;