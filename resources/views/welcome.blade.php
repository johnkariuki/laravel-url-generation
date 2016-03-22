<!DOCTYPE html>
<html>
    <head>
        <title>Generating Laravel Urls</title>
    </head>
    <body>
        <h4>Generate a secure url to a route</h4>
        <a href="{{ secure_url('/foo') }}">Secure Url</a>

        <h4>Generate a url to a route with  parameters</h4>
        <a href="{{ url('/url', ['id'=> 'full']) }}">Url with parameters</a>

        <h4>Generate a url to a named route</h4>
        <a href="{{ route('named_route') }}">Named route</a>

        <h4>Generate A url to an asset</h4>
        <a href="{{ asset('img/logo.png') }}">Asset Url</a>

        <h4>Generate A url to an asset</h4>
        <a href="{{ asset('css/style.css') }}">Secure asset Url</a>
    </body>
</html>
