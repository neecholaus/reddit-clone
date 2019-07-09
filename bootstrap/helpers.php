<?php

    function fetch($url, $method="GET") {
        $c = curl_init();

        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

        $response = json_decode(curl_exec($c));
        curl_close($c);

        return $response;
    }

    function parsePost($data) {
        return [
            'subreddit_prefixed' => $data->subreddit_name_prefixed,
            'subreddit' => $data->subreddit,
            'author' => $data->author,
            'title' => $data->title,
            'content' => $data->selftext,
            'thumbnail' => $data->thumbnail !== "self" ? $data->thumbnail : null,
            'score' => formatPostVotes($data->score),
            'id' => $data->id,
            'num_comments' => $data->num_comments
        ];
    }

    function formatPostVotes($int) {
        return $int > 1000 
            ? number_format($int / 1000, 1, '.', ',') . "K" 
            : $int;
    }