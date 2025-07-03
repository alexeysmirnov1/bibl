<html>
<head>
    <title>КодоБатл</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1>КодоБатл - {{ $task->battle_id }}</h1>
<p>Задача {{ $task->order }}</p>

@if($task->vote_closed)
    <p>Результаты голосования</p>

@else
    <div class="grid px-6 py-12">
        <p>Голосование за лучшее решение:</p>

        <form action="{{ route('tasks.vote.update', $task) }}" method="post">
            @csrf
            @foreach($task->solutions as $solution)
            <input type="radio" id="{{ $solution->battler->id }}" name="the_best" value="{{ $solution->battler->name }}">
            <label for="{{ $solution->battler->id }}">{{ $solution->battler->name }}</label><br>
            <br>
            @endforeach
            <button class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Отправить</button>
        </form>
    </div>
@endif
</body>
</html>
