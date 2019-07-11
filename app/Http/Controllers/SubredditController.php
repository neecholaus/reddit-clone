<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubredditController extends Controller
{
    /**
     * Gets recent posts to passed subreddit.
     *
     * @param  String  $sub
     * @return \Illuminate\Http\Response
     */
    public function index(String $sub)
    {
        $url = "https://reddit.com/r/{$sub}.json";

        $response = fetch($url);

        $children = $response->data->children;
        $parsedChildren = [];

        // Only send needed data
        foreach($children as $child) $parsedChildren[] = parsePost($child->data);

        return view('index', [
            'posts' => $parsedChildren,
            'after' => $response->data->after
        ]);
    }

    /**
     * Gets recent posts to passed subreddit.
     *
     * @param  String  $sub
     * @param  String  $postId
     * @return \Illuminate\Http\Response
     */
    public function inspect(String $sub, String $postId)
    {
        $url = "https://reddit.com/r/{$sub}/comments/{$postId}.json";

        $response = fetch($url);

        $data = $response[0]->data->children[0]->data;

        $post = parsePost($data);

        // Grab post comments
        $comments = [];
        foreach($response[1]->data->children as $comment) {
            if($comment->kind == "t1") {
                $comments[] = parseComment($comment->data);
            }
        }

        return view('index', [
            'post' => $post,
            'comments' => $comments
        ]);
    }
}
