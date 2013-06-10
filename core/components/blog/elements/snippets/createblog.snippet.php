<?php

if(!$modx->addPackage('blog', MODX_CORE_PATH. 'components/blog/model/','akhtar_')) {
    return 'There was a problem adding your package!  Check the logs for more info!';
}

if ($_POST) {
    $blog = $modx->newObject('Blogs');
    $blog->set('author',$_POST['author']);
    $blog->set('blog',htmlentities($_POST['blog']));

    $str = htmlentities($_POST['blog'],null, 'utf-8');

    if ($blog->save() == false) {
        echo 'Oh no, the blog failed to save!';
    }

    //$redirect = $modx->makeUrl(9);
    //$modx->sendRedirect($redirect);
    $output = mb_detect_encoding($str);
    return $output;

} else {

    $output = $modx->getChunk("addblog");
}
return $output;