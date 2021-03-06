<?php

namespace App\Http\Controllers;

use App\MyFacebookApi;
use Illuminate\Http\Request;

class FacebookController extends Controller
{

    /**
     * Get Facebook reactions per post.
     * Example url: /fbGetFeedDateRange?user={username}
     *              &since={unicodedate}&until={unicodedate}
     *              &fbApiKey={fbApiKey}&fbApiSecret={fbApiSecret}
     * @return Response
     */
    public function getFeedDateRange(Request $request)
    {
        $user = $request->input('user', 'not_logged_in');
        if ($user == 'not_logged_in'){
            return 'not logged in';
        } else if ($user == 'null') {
            return 'facebook username not set';
        } else {
            $since = $request->input('since');
            $until = $request->input('until');
            $fbApiKey = $request->input('fbApiKey', 'not_logged_in');
            $fbApiSecret = $request->input('fbApiSecret', 'not_logged_in');
            $fb = new MyFacebookApi($fbApiKey, $fbApiSecret);
            return $fb->getFeedDataInDateRange($user, $since, $until);
        }
  
    }

    /**
     * Get number of likes on Facebook Page.
     * Example url: /fbPageLikeCount?user={username}
     *              &fbApiKey={fbApiKey}&fbApiSecret={fbApiSecret}
     * @return Response
     */
    public function getPageLikeCount(Request $request)
    {
        $user = $request->input('user', 'not_logged_in');
        if ($user == 'not_logged_in'){
            return 'not logged in';
        } else if ($user == 'null') {
            return 'facebook username not set';
        } else {
            $fbApiKey = $request->input('fbApiKey', 'not_logged_in');
            $fbApiSecret = $request->input('fbApiSecret', 'not_logged_in');
            $fb = new MyFacebookApi($fbApiKey, $fbApiSecret);
            return $fb->getPageLikeCount($user, $fbApiKey, $fbApiSecret);
        }
    }
}