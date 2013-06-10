<?php
if(!$modx->addPackage('blog','/var/www/modxfirst/core/components/blog/model/','akhtar_')) {
    return 'There was a problem adding your package!  Check the logs for more info!';
}

$query = $modx->newQuery('Blogs');
$query->sortby("id",'desc');
$query->limit(10);
$blogs = $modx->getCollection('Blogs',$query);

$output = '';
foreach ($blogs as $blog) {
    $teaser = mb_substr(html_entity_decode($blog->get('blog')), 0, 15, 'utf-8');
    $output .= $teaser;
    $output .= "<br/>";
}

return $output;

return "Thanks for visiting this page";