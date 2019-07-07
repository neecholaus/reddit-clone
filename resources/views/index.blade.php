<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reddit</title>

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
                        <input
                            id="search-bar"
                            type="text"
                            class="form-control"
                            name="subreddit"
                            placeholder="Search Reddit" />
                        <form 
                            action="/r" 
                            id="search"
                            method="GET">
                            @csrf
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
        <script>
            document.querySelector('#search-bar').addEventListener('keypress', (e) => {
                if(e.keyCode == 13) {
                    const {value} = e.target;
                    window.location = '/r/' + e.target.value;
                }
            });
        </script>
    </body>
</html>
