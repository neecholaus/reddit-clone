<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubredditController extends Controller
{
    /**
     * Gets recent posts to passed subreddit.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $subreddit = $request->post()['subreddit'] ?: 'all';

        $url = "https://reddit.com/r/{$subreddit}.json";

        $c = curl_init();

        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

        $response = json_decode(curl_exec($c));
        curl_close($c);

        $children = $response->data->children;
        $parsedChildren = [];

        // Only send needed data
        foreach($children as $child) {
            $parsedChildren[] = [
                'subreddit' => $child->data->subreddit_name_prefixed,
                'author' => $child->data->author_fullname,
                'title' => $child->data->title,
                'content' => $child->data->selftext,
                'thumbnail' => $child->data->thumbnail
            ];
        }

        return view('index', [
            'posts' => $parsedChildren,
            'after' => $response->data->after
        ]);
    }
}
