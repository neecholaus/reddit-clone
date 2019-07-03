<div class="post">
    <div class="row">
        <div class="col-md-6 col-lg-8 col-xl-10">
            <p class="post-meta-data">{{ $post['subreddit'] }}</p>
            <h3 class="post-title">{{ $post['title'] }}</h3>
            <p class="post-content">{{ $post['content'] }}</p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-2">
            @if(!empty($post['thumbnail']))
                <img
                    class="img-fluid"
                    src="{{ $post['thumbnail'] }}" />
            @endif
        </div>
    </div>
</div>

<style>
    .post {
        background: white;
        border-radius: 5px;
        box-shadow: 1px 1px 6px rgba(0,0,0,0.3);
        margin: 10px 0;
        padding: 10px;
        transition: all ease 0.3s;
    }

    .post:hover {
        box-shadow: 1px 1px 6px rgba(0,0,0,0.5);
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
</style>