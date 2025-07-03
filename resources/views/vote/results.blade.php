<html>
<head>
    <title>КодоБатл</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1>КодоБатл - {{ $task->battle_id }}</h1>
<p>Задача {{ $task->order }}</p>

<p>Результаты голосования</p>

<div class="grid px-6 py-12">
    @foreach($solutions as $solution)
        <div>{{ $solution->battler->name }} - {{ $solution->votes_count }} голосов</div>
    @endforeach
</div>

<a href="{{ route('battles.show', $task->battle_id) }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">назад к батлу</a>
</body>
</html>
