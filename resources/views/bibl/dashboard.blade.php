<h1>Dashboard</h1>

<a href="{{ route('bibl.books.index') }}">My books</a>

<h1>Дашборд</h1>

<p>Всего книг: {{ $stats['total'] }}</p>
<p>Прочитано книг: {{ $stats['read'] }}</p>
<p>Не прочитано книг: {{ $stats['not_read'] }}</p>
