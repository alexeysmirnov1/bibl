<html>
<head>
    <title>КодоБатл</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1>КодоБатл - {{ $task->battle_id }}</h1>
<p>Задача {{ $task->order }}</p>

<p><a href="{{ $task->link }}" target="_blank" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ссылка на задачу в leetcode</a></p>
<div class="grid px-6 py-12">
<form action="{{ route('tasks.update', $task) }}" method="post">
    @csrf
    <label>Отправьте нам своё решение (ссылку на ваш solution)</label>
    <br>
    <input type="text" name="solution" class="border-2 block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
    <br>
    <button class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Отправить</button>
</form>
</div>

</body>
</html>
