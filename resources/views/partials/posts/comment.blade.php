<div class="comment">
    <p class="comment-meta-data">u/{{ $comment['author'] }}</p>
    <p class="comment-body">{{ $comment['body'] }}</p>
    <p class="comment-score">{{ $comment['score'] }} UPVOTES</p>
</div>

<style>
    .comment {
        background: white;
        border: solid 1px #e3e3e3;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
    }

    .comment-meta-data {
        color: #979797;
        font-size: 10px;
        margin: 0;
    }

    .comment-body {
        color: black;
        font-size: 13px;
        margin: 0 0 15px 0;
    }

    .comment-score {
        color: #a3a3a3;
        font-size: 12px;
        font-weight: bold;
        margin: 0;
    }
</style>