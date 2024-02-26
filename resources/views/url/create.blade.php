<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
</head>
<body>
    <h1>URL Shortener</h1>

    @if(session('shortUrl'))
        <p>Shortened URL: <a href="{{ session('shortUrl') }}" target="_blank">{{ session('shortUrl') }}</a></p>
    @endif

    <form action="{{ route('shorten') }}" method="post">
        @csrf
        <label for="url">Enter URL:</label>
        <input type="text" name="url" required>
        <button type="submit">Shorten</button>
    </form>
</body>
</html>
