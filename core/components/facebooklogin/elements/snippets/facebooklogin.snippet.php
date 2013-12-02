<?php
if(!$modx->addPackage('facebook', MODX_CORE_PATH. 'components/facebook/model/','fb_')) {
    return 'There was a problem adding your package!  Check the logs for more info!';
}

require MODX_CORE_PATH. '/components/facebook-php-sdk/'.'src/facebook.php';

$facebook = new Facebook(array(
    'appId'  => '555286787855661',
    'secret' => 'a660622df1acf09bb48d9f57bac7fe3a',
));

// Get User ID
$user = $facebook->getUser();

if ($user) {
    try {
        $data = $modx->getObject('Fbusers', array('user_id'=> $user));

        if (is_null($data)) {
            // Proceed knowing you have a logged in user who's authenticated.
            $user_profile = $facebook->api('/me');

            $fbUser = $modx->newObject('Fbusers');
            $fbUser->set('user_id',$user_profile['id']);
            $fbUser->set('user_name', $user_profile['username']);
            $fbUser->set('link', $user_profile['link']);
            $fbUser->set('gender', $user_profile['gender']);

            if($fbUser->save() == false)
            {
                $output = "cant save";
                return $output;
            }
            print_r($user_profile);
        } else {
            $user_friends = $facebook->api('/me/friends');
            $output = "";

            $counter = 0;

            foreach ($user_friends['data'] as $friend) {
                $friend_profile = $facebook->api('/'. $friend['id']);
                $output .= $modx->getChunk("fbfriends", array(
                    "link" => $friend_profile['link'],
                    "imagelink" => "https://graph.facebook.com/". $friend['id'] ."/picture",
                ));
                $counter++;

                if ($counter > 100) {
                    break;
                }
            }

            return $output;
        }
    } catch (FacebookApiException $e) {
        error_log($e);
        $user = null;
    }
} else {
    //$modx->regClientScript(MODX_ASSETS_URL.'js/scripts.js');
    $loginUrl = $facebook->getLoginUrl();
    $output = $modx->getChunk("fblogin", array('loginurl' => $loginUrl));

    return $output;
}
