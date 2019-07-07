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
    public function show(String $sub)
    {
        $url = "https://reddit.com/r/{$sub}.json";

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
                'author' => $child->data->author,
                'title' => $child->data->title,
                'content' => $child->data->selftext,
                'thumbnail' => $child->data->thumbnail !== "self" ? $child->data->thumbnail : null,
                'score' => formatPostVotes($child->data->score),
                'url' => $child->data->url,
                'num_comments' => $child->data->num_comments
            ];
        }

        return view('index', [
            'posts' => $parsedChildren,
            'after' => $response->data->after
        ]);
    }
}
