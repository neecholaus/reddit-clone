<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reddit Clone</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Global Styles -->
        <link href={{ asset('css/app.css') }} rel="stylesheet" />
        <!-- Page Specific Styles -->
        <link href={{ asset('css/index.css') }} rel="stylesheet" />
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div id="header">
                <h3 class="my-0">Reddit Clone</h3>
            </div>
            <div id="search-bar" class="p-2">
                <div class="input-group">
                    <input
                        type="text"
                        class="form-control"
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
        </div>
    </body>
</html>
