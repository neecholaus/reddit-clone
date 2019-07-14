<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reddit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Global Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
        <!-- Page Specific Styles -->
        <link href="{{ mix('css/index.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class="full-height">
            <div id="header">
                <div class="row m-0">
                    <div class="col-md-1 col-lg-2 col-xl-3">
                        <a 
                            href="/" 
                            target="_self"
                            style="width:100%;max-width:37px !important;display:block;"
                            class="d-none d-md-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="_1O4jTk-dZ-VIxsCuYB6OR8">
                                <g>
                                    <circle fill="#FF4500" cx="10" cy="10" r="10"></circle>
                                    <path fill="#FFF" d="M16.67,10A1.46,1.46,0,0,0,14.2,9a7.12,7.12,0,0,0-3.85-1.23L11,4.65,13.14,5.1a1,1,0,1,0,.13-0.61L10.82,4a0.31,0.31,0,0,0-.37.24L9.71,7.71a7.14,7.14,0,0,0-3.9,1.23A1.46,1.46,0,1,0,4.2,11.33a2.87,2.87,0,0,0,0,.44c0,2.24,2.61,4.06,5.83,4.06s5.83-1.82,5.83-4.06a2.87,2.87,0,0,0,0-.44A1.46,1.46,0,0,0,16.67,10Zm-10,1a1,1,0,1,1,1,1A1,1,0,0,1,6.67,11Zm5.81,2.75a3.84,3.84,0,0,1-2.47.77,3.84,3.84,0,0,1-2.47-.77,0.27,0.27,0,0,1,.38-0.38A3.27,3.27,0,0,0,10,14a3.28,3.28,0,0,0,2.09-.61A0.27,0.27,0,1,1,12.48,13.79Zm-0.18-1.71a1,1,0,1,1,1-1A1,1,0,0,1,12.29,12.08Z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <div
                            id="search-bar"
                            class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                name="subreddit"
                                placeholder="Search Reddit"
                                autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-md-1 col-lg-2 col-xl-3">
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="row m-0">
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                        @if(isset($posts))
                            @each('partials.posts.item', $posts, 'post')
                        @endif

                        @if(isset($post))
                            @includeWhen(isset($post), 'partials.posts.item', ['post' => $post])
                        @endif

                        @if(isset($comments) && count($comments) > 0)
                            @each('partials.posts.comment', $comments, 'comment')
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
