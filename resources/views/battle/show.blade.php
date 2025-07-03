<html>
<head>
    <title>КодоБатл</title>
    <style>
        a {
            color: #0c0c0d;
        }
        .tournament {
            display: grid;
            grid-gap: 50px;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            text-align: center;
        }
        .task {
            display: grid;
            grid-gap: 10px;
            align-content: center;
            justify-content: center;
        }
        .task__title {
            display: grid;
            border: 1px solid rgb(87, 87, 87);
            background: #96abb1;
            line-height: 50px;
            height: 50px;
        }
        .task__title--active {
            background: #5dd8af;
        }
        .task__vote {
            display: grid;
            border: 1px solid rgb(87, 87, 87);
            background: #8ac5da;
            line-height: 50px;
            height: 50px;
        }
        .task__battlers {
            display: grid;
            gap: 10px;
        }
        .task__battlers--item {
            display: grid;
            border: 1px solid rgb(87, 87, 87);
            background: #e1e1e1;
            padding: 4px 12px;
        }
        .task__battlers--solved {
            color: #059c4c;
        }
        .tournament__win {
            align-self: center;
            width: 300px;
        }
    </style>

    {{--    Tailwind ui--}}
{{--    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">--}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1>КодоБатл - {{ $battle->id }} {{ Auth::user()?->isAdmin() ? '(Вы админ)' : '' }}</h1>
<p>Привет {{ $user }}</p>
@if(now() >= $battle->started_at)
<h3>Список задач</h3>

<div class="tournament">
    <div class="task">
        <div class="task__title">Участники батла</div>
        <div class="task__battlers">
            @foreach($battlers as $battler)
                <div class="task__battlers--item">{{ $battler['name'] }}</div>
            @endforeach
        </div>
    </div>
    @foreach($tasks as $key => $task)
        <div class="task">
            @if($task['task']['open'] && !$task['task']['pass'] || $battle->closed)
                <div class="task__title task__title--active">
                    <a href="{{ $task['task']['link'] }}">{{ $task['task']['title'] }}</a>
                </div>
            @else
                @if($task['task']['pass'])
                    <div class="task__title task__title--active">{{ $task['task']['title'] }}</div>
                @else
                    <div class="task__title">{{ $task['task']['title'] }}</div>
                @endif
            @endif
            <div class="task__battlers">
                @foreach($task['battlers'] as $battler)
                    @empty($battler['link'])
                        <div class="task__battlers--item {{ $battler['the_best'] ? 'task__battlers--solved' : '' }}">{{ $battler['name'] }}</div>
                    @else
                        <a href="{{ $battler['link'] }}" class="task__battlers--item {{ $battler['the_best'] ? 'task__battlers--solved' : '' }}">{{ $battler['name'] }}</a>
                    @endempty
                @endforeach
            </div>
            @if($task['task']['vote_opened'])
                <div class="task__vote">
                    @if(!$task['task']['vote_closed'])
                        <a href="{{ $task['task']['vote_link'] }}">Голосовать за лучшее решение</a>
                    @else
                        <a href="{{ $task['task']['vote_result_link'] }}">Результат голосования</a>
                    @endif
                </div>
            @endif
        </div>
    @endforeach
    @if($win)
        <div class="task">
            <img class="tournament__win" src="/img/cup.avif">
            {{ $win }}
        </div>
    @endif
</div>
<br>
<br>
<br>
<br>
<br>
{{--<div class="tournament">--}}
{{--    <div class="task">--}}
{{--        <div class="task__title">Task 1</div>--}}
{{--        <div class="task__battlers">--}}
{{--            <div class="task__battlers--item task__battlers--solved">Ваня</div>--}}
{{--            <div class="task__battlers--item">Илья</div>--}}
{{--            <div class="task__battlers--item">Яша</div>--}}
{{--            <div class="task__battlers--item task__battlers--solved">Миша</div>--}}
{{--            <div class="task__battlers--item task__battlers--solved">Лёша</div>--}}
{{--            <div class="task__battlers--item">Регина</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="task">--}}
{{--        <div class="task__title">Task 2</div>--}}
{{--        <div class="task__battlers">--}}
{{--            <div class="task__battlers--item task__battlers--solved">Ваня</div>--}}
{{--            <div class="task__battlers--item">Миша</div>--}}
{{--            <div class="task__battlers--item task__battlers--solved">Лёша</div>--}}
{{--            <div class="task__battlers--item">Регина</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="task">--}}
{{--        <div class="task__title">Task 3</div>--}}
{{--        <div class="task__battlers">--}}
{{--            <div class="task__battlers--item task__battlers--solved">Ваня<img class="tournament__win" src="/img/cup.avif"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--    <iframe src="https://leetcode.com/problems/summary-ranges/solutions/6795981/flag-by-kapitan-karablya-nran/" title="description" height="500" width="900"></iframe>--}}
</body>
</html>
@else
    <p>До начала осталось {{ $battle->started_at->diff(now())->format('%D дней %H:%I')}}</p>
@endif
