<x-app-layout>

    <div class="bg-light font-sans text-gray-800 flex h-screen">

    <aside class="w-auto bg-sidebar border-r border-gray-200 flex flex-col h-screen">
{{--        <div class="p-6">--}}
{{--            <h1 class="text-2xl font-bold text-primary">Literati</h1>--}}
{{--        </div>--}}

        <nav class="flex-1 px-4 py-6">
{{--            <h2 class="text-xs uppercase tracking-wider text-secondary font-semibold mb-2 px-3">База книг</h2>--}}
            <ul class="space-y-1">
{{--                <li class="px-3 py-2 rounded-lg bg-primary text-white font-medium">--}}
{{--                    <i class="fas fa-home mr-3"></i>Личный кабинет--}}
{{--                </li>--}}
                <li class="px-3 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                    <i class="fas fa-chart-line mr-3 text-secondary"></i>Дашборд
                </li>
                <li class="px-3 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                    <i class="fas fa-book mr-3 text-secondary"></i>Книги
                </li>
                <li class="px-3 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                    <i class="fas fa-heart mr-3 text-secondary"></i>Вишлист
                </li>
                <li class="px-3 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                    <i class="fas fa-sync-alt mr-3 text-secondary"></i>Циклы
                </li>
            </ul>

            <p class="text-xs tracking-wider text-secondary font-semibold mb-2 px-3 mt-8">Образная связь</p>
{{--            <ul class="space-y-1">--}}
{{--                <li class="px-3 py-2 rounded-lg hover:bg-gray-200 transition-colors">--}}
{{--                    <i class="fas fa-user mr-3 text-secondary"></i>Профиль--}}
{{--                </li>--}}
{{--                <li class="px-3 py-2 rounded-lg hover:bg-gray-200 transition-colors">--}}
{{--                    <i class="fas fa-bell mr-3 text-secondary"></i>Подписки--}}
{{--                </li>--}}
{{--                <li class="px-3 py-2 rounded-lg hover:bg-gray-200 transition-colors">--}}
{{--                    <i class="fas fa-user-friends mr-3 text-secondary"></i>Друзья--}}
{{--                </li>--}}
{{--                <li class="px-3 py-2 rounded-lg hover:bg-gray-200 transition-colors">--}}
{{--                    <i class="fas fa-comments mr-3 text-secondary"></i>Сообщения--}}
{{--                </li>--}}
{{--            </ul>--}}
        </nav>

{{--        <div class="p-4 border-t border-gray-200">--}}
{{--            <div class="flex items-center">--}}
{{--                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white font-bold">ИИ</div>--}}
{{--                <div class="ml-3">--}}
{{--                    <p class="font-medium">Иван Иванов</p>--}}
{{--                    <p class="text-xs text-secondary">Пользователь</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </aside>

    <main class="flex-1 overflow-y-auto p-8 mt-6">
        <div class="max-w-6xl mx-auto">
            <!-- Заголовок и фильтры -->
            <div class="flex justify-between items-center mb-6">

                <div class="flex space-x-4">
                    <div class="relative">
                        <select class="appearance-none bg-white border border-gray-300 rounded-lg py-2 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option>Автор</option>
                            <option>Александр Пушкин</option>
                            <option>Алексей Толстой</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="relative">
                        <select class="appearance-none bg-white border border-gray-300 rounded-lg py-2 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option>Статус</option>
                            <option>Читаю</option>
                            <option>Прочитано</option>
                            <option>В планах</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="relative">
                        <select class="appearance-none bg-white border border-gray-300 rounded-lg py-2 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option>Формат</option>
                            <option>Твердый переплет</option>
                            <option>Мягкая обложка</option>
                            <option>Электронная</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="relative">
                        <select class="appearance-none bg-white border border-gray-300 rounded-lg py-2 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option>Оценка</option>
                            <option>5 звезд</option>
                            <option>4 звезды</option>
                            <option>3 звезды</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <input type="text" name="solution" class="border-2 block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">

                    <button class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Показать (32)
                    </button>
                </div>
            </div>

            <!-- Сортировка и общее количество -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center">
                    <span class="text-secondary mr-2">Сортировать по:</span>
                    <span class="font-medium">умолчанию</span>
                    <button class="ml-2 text-primary">
                        <i class="fas fa-sort"></i>
                    </button>
                </div>

                <div class="text-secondary">
                    Всего <span class="font-medium text-dark">32 книги</span>
                </div>
            </div>

            <!-- Список книг -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Книга 1 -->
                <div class="bg-card rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start">
                        <h3 class="text-lg font-bold text-dark mb-2">Письмо к женщине</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Читаю</span>
                    </div>
                    <p class="text-secondary text-sm mb-4">Александр Пушкин, Алексей Толстой, ...</p>
                    <div class="flex justify-between items-center">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">Твердый переплет</span>
                    </div>
                </div>

                <!-- Книга 2 -->
                <div class="bg-card rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start">
                        <h3 class="text-lg font-bold text-dark mb-2">Преступление и наказание</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Читаю</span>
                    </div>
                    <p class="text-secondary text-sm mb-4">Федор Достоевский</p>
                    <div class="flex justify-between items-center">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">Электронная</span>
                    </div>
                </div>

                <!-- Книга 3 -->
                <div class="bg-card rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start">
                        <h3 class="text-lg font-bold text-dark mb-2">Мастер и Маргарита</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Читаю</span>
                    </div>
                    <p class="text-secondary text-sm mb-4">Михаил Булгаков</p>
                    <div class="flex justify-between items-center">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">Твердый переплет</span>
                    </div>
                </div>

                <!-- Книга 4 -->
                <div class="bg-card rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start">
                        <h3 class="text-lg font-bold text-dark mb-2">Война и мир</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">В твёрдом</span>
                    </div>
                    <p class="text-secondary text-sm mb-4">Лев Толстой</p>
                    <div class="flex justify-between items-center">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">Твердый переплет</span>
                    </div>
                </div>

                <!-- Книга 5 -->
                <div class="bg-card rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start">
                        <h3 class="text-lg font-bold text-dark mb-2">Анна Каренина</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">В твёрдом</span>
                    </div>
                    <p class="text-secondary text-sm mb-4">Лев Толстой</p>
                    <div class="flex justify-between items-center">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">Твердый переплет</span>
                    </div>
                </div>

                <!-- Книга 6 -->
                <div class="bg-card rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start">
                        <h3 class="text-lg font-bold text-dark mb-2">Евгений Онегин</h3>
                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full">В планах</span>
                    </div>
                    <p class="text-secondary text-sm mb-4">Александр Пушкин</p>
                    <div class="flex justify-between items-center">
                        <div class="text-yellow-400">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">Мягкая обложка</span>
                    </div>
                </div>
            </div>

            <!-- Кнопка "Добавить" -->
            <div class="flex justify-center">
                <button class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors flex items-center">
                    <i class="fas fa-plus mr-2"></i>Добавить
                </button>
            </div>
        </div>
    </main>

    </div>

</x-app-layout>
