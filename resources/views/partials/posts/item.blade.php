<div class="post p-0">
    <div class="row m-0 p-0">
        <div class="col-1 post-stats">
            <p class="text-muted">
                {{ $post['score'] }}
            </p>
            <p class="text-muted d-none d-sm-block" style="font-size:9px;">UPVOTES</p>
        </div>
        <div class="col-11">
            <div class="row">
                <div class="col-8 col-md-7 col-xl-10 p-2">
                        <p class="post-meta-data">
                            {{ $post['subreddit'] }} | u/{{ $post['author'] }}
                        </p>
                        <h3 class="post-title">{{ $post['title'] }}</h3>
                        <p class="post-content">{{ $post['content'] }}</p>
                    </a>
                </div>
                <div class="col-3 col-md-5 col-xl-2 p-2 text-center">
                    @if(!empty($post['thumbnail']))
                        <img
                            class="img-fluid"
                            alt="{{ $post['thumbnail'] }}"
                            src="{{ $post['thumbnail'] }}" />
                    @endif
                </div>
                <div class="col-12 p-2">
                    <a 
                        target="_self"
                        href="{{ $post['url'] }}">
                        <button
                            type="button"
                            class="btn btn-item-link btn-sm">
                            {{ $post['num_comments'] }} Comments
                        </button>
                    </a>
                </div>
            </div>
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