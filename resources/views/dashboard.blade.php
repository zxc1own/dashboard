<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
<div id="header">
    Shkolo
</div>

<div class="dashboard">

    @foreach ($items as $item)
        <div
            class="dashboard-item"
            style="background-color: {{ $item->color ?: 'unset' }}; {{ $item->color ? 'background-image: unset' : '' }}"
        >
            @if ($item->url)
                <a class="title" href="{{ $item->url }}">{{ $item->title }}</a>
                <a class="edit" href="{{ '/edit/'.$item->id }}">Edit</a>
                <a class="delete" href="{{ '/delete/'.$item->id }}">Delete</a>
            @else
                <a class="set" href="{{ '/edit/'.$item->id }}"></a>
            @endif
        </div>
    @endforeach

</div>

</body>
</html>
