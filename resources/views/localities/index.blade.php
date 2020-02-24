<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Населенные пункты</title>
</head>
<body>
    <form action="{{ route('localities') }}">
        <div class="col-md-4">
            <label for="query">
                Введите название населенного пункта, региона или района (на русском или транслитом):
                <input
                    id="search"
                    class="form-control"
                    type="search"
                    placeholder="Населенный пункт, регион или район на русском или транслитом"
                    name="inputSearch"
                    value="{{ $inputSearch }}"
                >
            </label>

            <button type="submit" class="btn bg-info">Поиск</button>

            @foreach($localities as $locality)
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        {{ ++$loop->index }}) {{ $locality['name'] }} ({{ $locality['region']['name'] }})
                        <ul>
                            @foreach($locality['districts'] as $district)
                                <li>{{ $district['name'] }}</li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            @endforeach
        </div>
    </form>
</body>

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $('#search').focus();
</script>

</html>
