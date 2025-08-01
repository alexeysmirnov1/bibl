<h1>My books</h1>

<h1>Добавить книгу</h1>

<form action="{{ route('shelves.books.store') }}" method="post">
    <label>Название</label>
    <input type="text" id="name">
    <br>
    <label>Автор</label>
    <input type="text" id="author">
    <br>
    <label>Издание</label>
    <input type="text" id="publisher">
    <br>
    <label>Жанр</label>
    <input type="text" id="genre">
    <br>
    <label>Страницы</label>
    <input type="text" id="pages">
    <br>
    <label>Статус</label>
    <input type="text" id="status">
    <br>
    <label>Формат</label>
    <input type="text" id="format">
    <br>
</form>
