<h1>My books</h1>

<a href="{{ route('bibl.books.create') }}">Добавить книгу</a>

<table border="1">
    <tr>
        <td>Название</td>
        <td>Автор</td>
        <td>Издание</td>
        <td>Жанр</td>
        <td>Страницы</td>
        <td>Статус</td>
        <td>Формат</td>
        <td>Оценка</td>
    </tr>

    @foreach($books as $book)
        <tr>
            <td>{{ $book->book->name }}</td>
            <td></td>
            <td>{{ $book->book->publisher->name }}</td>
            <td>{{ $book->book->genre->name }}</td>
            <td>{{ $book->book->pages }}</td>
            <td>{{ $book->status->title() }}</td>
            <td>{{ $book->format->title() }}</td>
            <td>{{ $book->rate }}</td>
        </tr>
    @endforeach
</table>
