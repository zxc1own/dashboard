<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Edit</title>
</head>
<body>
    <div id="header">
        Shkolo
    </div>
    <div class="edit-form">
        <form method="post" action="{{ url('process') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <div>
                <label>Title</label>
                <input type="text" name="title" value="{{ $title }}">
            </div>

            <div>
                <label>Link</label>
                <input type="text" name="url" value="{{ $url }}">
            </div>

            <div>
                <label>Color</label>
                <select name="color">
                    <option value="yellow" style="color: yellow" {{ $color === 'yellow' ? 'selected' : '' }}>Yellow</option>
                    <option value="blue" style="color: blue" {{ $color === 'blue' ? 'selected' : '' }}>Blue</option>
                    <option value="red" style="color: red" {{ $color === 'red' ? 'selected' : '' }}>Red</option>
                    <option value="green" style="color: green" {{ $color === 'green' ? 'selected' : '' }}>Green</option>
                    <option value="orange" style="color: orange" {{ $color === 'orange' ? 'selected' : '' }}>Orange</option>
                    <option value="brown" style="color: brown" {{ $color === 'brown' ? 'selected' : '' }}>Brown</option>
                    <option value="aquamarine" style="color: aquamarine" {{ $color === 'aquamarine' ? 'selected' : '' }}>Aquamarine</option>
                    <option value="grey" style="color: grey" {{ $color === 'grey' ? 'selected' : '' }}>Grey</option>
                    <option value="pink" style="color: pink" {{ $color === 'pink' ? 'selected' : '' }}>Pink</option>


                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
