<!-- resources/views/url/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>URL List</title>
</head>
<body>
    <h1>URL List</h1>

    @if(count($url) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Original URL</th>
                    <th>Short URL</th>
                    
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($url as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="{{ $item->original_url }}" target="_blank">{{ $item->original_url }}</a></td>
                        <td><a href="{{ route('shorten.redirect', ['shortUrl' => $item->short_url]) }}" target="_blank">{{ route('shorten.redirect', ['shortUrl' => $item->short_url]) }}</a></td>
                        
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No URLs found.</p>
    @endif
</body>
</html>
