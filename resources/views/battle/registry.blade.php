<html>
<head>
    <title>КодоБатл</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>
<h1 class="text-3xl">Регистрация на КодоБатл - {{ $id }}</h1>
<img class="logo" src="/img/img.png" width="300px">
@if(!empty($errors)) <p>{{ $errors }}</p> @endif

<div class="grid px-6 py-12">
<form action="{{ route('battles.store', $id) }}" method="post">
    @csrf
    <label>Как тебя зовут, воин? *</label>
    <br>
    <input type="text" name="user_name" class="border-2 block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
    <br>
    <label>И почту, пожалуйста *</label>
    <br>
    <input type="text" name="user_email" class="border-2 block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
    <br>
    <button class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Принять участие</button>
</form>
</div>

</body>
</html>
