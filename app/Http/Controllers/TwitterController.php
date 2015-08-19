<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;
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
    $search_word = $request->input('search_word');
    $max_word_count= $request->input('max_word_count');

   
header("Content-type:text/html;charset='utf-8'");
    $consumer_key="UOOArvgIa2ovp1JOIHFfxecRZ";
$consumer_secret="RiSpE6i4e5InX4dtD9u4N0jq7s7F24PfvkqPujSVTRMsv7HtwC";
$access_token="3300624450-7Os1GxssixpuoAkY0eZ6MlobgIr3VzG1WH6xYFW";
$access_token_secret="jeQHLjvYQP6eRv9a084KK8XkrzIcZ9wR5xl4G1qEbevHo";


$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$statuses = $connection->get("search/tweets", array("q" =>$search_word,"count"=>$max_word_count));


return view('twitter_listele',["statuses"=>$statuses]);
}




}
