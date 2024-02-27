<!-- resources/views/url/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>URL List</title>
   

</head>
<body>
    <h1>URL List</h1>
    <a  href="{{ route('add-new-url') }}" class="btn btn-primary">ADD URL</a>
    @if(count($url) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Original URL</th>
                    <th>Short URL</th>
                    <th>Click Count</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($url as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="{{ $item->original_url }}" target="_blank">{{ $item->original_url }}</a></td>
                        <td><a href="{{ route('shorten.redirect', ['shortUrl' => $item->short_url]) }}" target="_blank">{{ route('shorten.redirect', ['shortUrl' => $item->short_url]) }}</a></td>
                        <td>{{ $item->click_count }}</td> 
                        <td>{{ $item->created_at }}</td>
                        <td><button class="btn btn-primary" onclick="copyToClipboard('{{ route('shorten.redirect', ['shortUrl' => $item->short_url]) }}')">
                                Copy
                            </button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No URLs found.</p>
    @endif
</body>
<script>
        function copyToClipboard(text) {
            const input = document.createElement('input');
            input.value = text;
            document.body.appendChild(input);
            input.select();
            document.execCommand('copy');
            document.body.removeChild(input);
            alert('Short URL copied to clipboard: ' + text);
        }
    </script>
</html>
