<!DOCTYPE html>
<html>
<head>
    <title>Redirecting...</title>
</head>
<body>
    <p>Original URL: <a href="{{ $url->original_url }}" target="_blank">{{ $url->original_url }}</a></p>
    <p>Shareable link: <a href="{{ route('shorten.redirect', ['shortUrl' => $url->short_url]) }}" target="_blank">{{ route('shorten.redirect', ['shortUrl' => $url->short_url]) }}</a></p>

    <script>
        // Redirect to the original URL after a few seconds
        setTimeout(function() {
            window.location.href = "{{ $url->original_url }}";
        }, 5000);
    </script>
</body>
</html>
