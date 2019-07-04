<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reddit Clone</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Global Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <!-- Page Specific Styles -->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class="full-height">
            <div id="header">
                <div class="row m-0">
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <h3 class="my-0">Reddit Clone</h3>
                        <form action="/subreddit" method="POST">
                            @csrf
                            <div id="search-bar" class="mt-2">
                                <div class="input-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="subreddit"
                                        placeholder="Search for a subreddit..." />
                                    <span class="input-group-append">
                                        <button 
                                            type="submit"
                                            class="btn btn-primary">
                                            Search
                                        </button>
                                    <span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="row m-0">
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                       
                        @if(isset($posts))
                            @each('partials.posts.item', $posts, 'post')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
