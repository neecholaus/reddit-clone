<div class="post p-0">
    <div class="row m-0 p-0">
        <div class="col-1 post-stats">
            <p class="text-muted">
                &#x2B06;
            </p>
            <p class="text-muted">
                {{ $post['score'] }}
            </p>
            <p class="text-muted">
                &#x2B07;
            </p>
        </div>
        <div class="col-8 col-md-6 col-lg-7 col-xl-9 p-2">
            <p class="post-meta-data">
                {{ $post['subreddit'] }} | u/{{ $post['author'] }}
            </p>
            <h3 class="post-title">{{ $post['title'] }}</h3>
            <p class="post-content">{{ $post['content'] }}</p>
        </div>
        <div class="col-3 col-md-5 col-lg-4 col-xl-2 p-2">
            @if(!empty($post['thumbnail']))
                <img
                    class="img-fluid"
                    alt="{{ $post['thumbnail'] }}"
                    src="{{ $post['thumbnail'] }}" />
            @endif
        </div>
    </div>
</div>

<style>
    .post {
        background: white;
        border: solid 1px #e3e3e3;
        border-radius: 5px;
        margin: 10px 0;
        overflow: hidden;
        padding: 10px;
        transition: all ease 0.3s;
    }

    .post:hover {
        border: solid 1px #a3a3a3;
        transition: 0s;
    }

    .post-meta-data {
        color: #a3a3a3;
        font-size: 13px;
        margin: 0;
    }

    .post-title {
        color: black;
        font-size: 17px;
    }

    .post-content {
        color: #a3a3a3;
        font-size: 15px;
    }

    .post-stats {
        background: #fafafa;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        margin: 0;
        padding: 10px 0 0 0;
        text-align: center;
    }

    .post-stats p {
        margin: 0;
    }
</style>