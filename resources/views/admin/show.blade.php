<!-- resources/views/home.blade.php -->

<!-- resources/views/upload.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>

    <h2>Image Upload Form</h2>


@if ($images)
    @foreach ($images as $image)
        <img src= img "{{ $image->getUrl('image') }} "alt="Uploaded Image">
    @endforeach
@else
    <p>No images found.</p>
@endif
</body>
</html>

