<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;
use Config;
class TwitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
return view('twitter_giris');



    }

public function search( Request $request)
{




  

//post ile gönderilen datalarımız..
$data=$request->all();

//twitter ayarlarımız acces_token,access_token_Secret vs...
   $twitter_config=Config::get('twitter'); 

$connection = new TwitterOAuth($twitter_config['consumer_key'],$twitter_config['consumer_secret'],$twitter_config['access_token'],$twitter_config['access_token_secret']);

$statuses = $connection->get("search/tweets", array("q" =>$data['search_word'],"count"=>$data['max_word_count']));


return view('twitter_listele',["statuses"=>$statuses]);

}




}
