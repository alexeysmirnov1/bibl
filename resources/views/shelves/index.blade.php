<x-app-layout>

    <div class="bg-light font-sans text-gray-800 flex h-screen">

    <x-shelves-nav/>

    <main class="flex-1 overflow-y-auto p-8 mt-6">

        <div class="md:flex max-w-6xl mx-auto">
            <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 md:me-4 mb-4 md:mb-0">
                <li>
                    <a href="#" class="inline-flex items-center px-4 py-3 text-white bg-blue-700 rounded-lg active w-full" aria-current="page">
                        <svg class="w-4 h-4 me-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                        </svg>
                        Книги
                    </a>
                </li>
                <li>
                    <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full">
                        <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18"><path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/></svg>
                        Сборники
                    </a>
                </li>
                <li>
                    <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full">
                        <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z"/>
                        </svg>
                        Циклы
                    </a>
                </li>
                <li>
                    <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full">
                        <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7.824 5.937a1 1 0 0 0 .726-.312 2.042 2.042 0 0 1 2.835-.065 1 1 0 0 0 1.388-1.441 3.994 3.994 0 0 0-5.674.13 1 1 0 0 0 .725 1.688Z"/>
                            <path d="M17 7A7 7 0 1 0 3 7a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V7a5 5 0 1 1 10 0v7.083A2.92 2.92 0 0 1 12.083 17H12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a1.993 1.993 0 0 0 1.722-1h.361a4.92 4.92 0 0 0 4.824-4H17a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3Z"/>
                        </svg>
                        Вишлист
                    </a>
                </li>
            </ul>
            <div class="p-6 bg-gray-50 text-medium text-gray-500 rounded-lg w-full">
{{--                <h3 class="text-lg font-bold text-gray-900 mb-2">Profile Tab</h3>--}}
{{--                <p class="mb-2">This is some placeholder content the Profile tab's associated content, clicking another tab will toggle the visibility of this one for the next.</p>--}}
{{--                <p>The tab JavaScript swaps classes to control the content visibility and styling.</p>--}}
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_book" id="floating_book" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_book" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Введите название книги
                    </label>
                </div>

{{--                <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">--}}
{{--                    <option selected>Автор</option>--}}
{{--                    <option value="US">А.С. Пушкин</option>--}}
{{--                    <option value="CA">Canada</option>--}}
{{--                    <option value="FR">France</option>--}}
{{--                    <option value="DE">Germany</option>--}}
{{--                </select>--}}


                <button id="dropdownBgHoverButton" data-dropdown-toggle="dropdownBgHover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                    Авторы
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownBgHover" class="z-10 hidden w-48 bg-white rounded-lg shadow-sm">
                    <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownBgHoverButton">
                        <li>
                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                                <input id="checkbox-item-4" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                                <label for="checkbox-item-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Default checkbox</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                                <input checked id="checkbox-item-5" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                                <label for="checkbox-item-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Checked state</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                                <input id="checkbox-item-6" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                                <label for="checkbox-item-6" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Default checkbox</label>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>



        <div class="max-w-6xl mx-auto mt-6">
{{--            <!-- Заголовок и фильтры -->--}}
{{--            <div class="flex justify-between items-center mb-6">--}}

{{--                <div class="flex space-x-4">--}}
{{--                    <div class="relative">--}}
{{--                        <select class="appearance-none bg-white border border-gray-300 rounded-lg py-2 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">--}}
{{--                            <option>Автор</option>--}}
{{--                            <option>Александр Пушкин</option>--}}
{{--                            <option>Алексей Толстой</option>--}}
{{--                        </select>--}}
{{--                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">--}}
{{--                            <i class="fas fa-chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="relative">--}}
{{--                        <select class="appearance-none bg-white border border-gray-300 rounded-lg py-2 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">--}}
{{--                            <option>Статус</option>--}}
{{--                            <option>Читаю</option>--}}
{{--                            <option>Прочитано</option>--}}
{{--                            <option>В планах</option>--}}
{{--                        </select>--}}
{{--                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">--}}
{{--                            <i class="fas fa-chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="relative">--}}
{{--                        <select class="appearance-none bg-white border border-gray-300 rounded-lg py-2 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">--}}
{{--                            <option>Формат</option>--}}
{{--                            <option>Твердый переплет</option>--}}
{{--                            <option>Мягкая обложка</option>--}}
{{--                            <option>Электронная</option>--}}
{{--                        </select>--}}
{{--                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">--}}
{{--                            <i class="fas fa-chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="relative">--}}
{{--                        <select class="appearance-none bg-white border border-gray-300 rounded-lg py-2 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">--}}
{{--                            <option>Оценка</option>--}}
{{--                            <option>5 звезд</option>--}}
{{--                            <option>4 звезды</option>--}}
{{--                            <option>3 звезды</option>--}}
{{--                        </select>--}}
{{--                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">--}}
{{--                            <i class="fas fa-chevron-down"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <input type="text" name="solution" class="border-2 block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">--}}

{{--                    <button class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">--}}
{{--                        Показать (32)--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Сортировка и общее количество -->
{{--            <div class="flex justify-between items-center mb-6">--}}
{{--                <div class="flex items-center">--}}
{{--                    <span class="text-secondary mr-2">Сортировать по:</span>--}}
{{--                    <span class="font-medium">умолчанию</span>--}}
{{--                    <button class="ml-2 text-primary">--}}
{{--                        <i class="fas fa-sort"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--                <div class="text-secondary">--}}
{{--                    Всего <span class="font-medium text-dark">32 книги</span>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Список книг -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">

                @foreach($books as $book)
                <div class="bg-card rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start">
                        <h3 class="text-lg font-bold text-dark mb-2">{{ $book->name }}</h3>
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
                        <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">{{ $book->format->title() }}</span>
                    </div>
                </div>
                @endforeach

            </div>

{{--            <!-- Кнопка "Добавить" -->--}}
{{--            <div class="flex justify-center">--}}
{{--                <button class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors flex items-center">--}}
{{--                    <i class="fas fa-plus mr-2"></i>Добавить--}}
{{--                </button>--}}
{{--            </div>--}}
        </div>
    </main>



        <div data-dial-init class="fixed end-6 bottom-6 group">
            <div id="speed-dial-menu-default" class="flex flex-col items-center hidden mb-4 space-y-2">
                <a href="{{ route('shelves.books.create') }}" type="button" data-tooltip-target="tooltip-book" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 shadow-xs hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 focus:outline-none ">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M14.419 10.581a3.564 3.564 0 0 0-2.574 1.1l-4.756-2.49a3.54 3.54 0 0 0 .072-.71 3.55 3.55 0 0 0-.043-.428L11.67 6.1a3.56 3.56 0 1 0-.831-2.265c.006.143.02.286.043.428L6.33 6.218a3.573 3.573 0 1 0-.175 4.743l4.756 2.491a3.58 3.58 0 1 0 3.508-2.871Z"/>
                    </svg>
                    <span class="sr-only">Книга</span>
                </a>
                <div id="tooltip-book" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip">
                    Книга
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <a href="#" type="button" data-tooltip-target="tooltip-print" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 shadow-xs hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z"/>
                        <path d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z"/>
                    </svg>
                    <span class="sr-only">Сборник</span>
                </a>
                <div id="tooltip-print" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip">
                    Сборник
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <a href="#" type="button" data-tooltip-target="tooltip-download" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 shadow-xs hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                        <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Цикл</span>
                </a>
                <div id="tooltip-download" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip">
                    Цикл
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <a href="#" type="button" data-tooltip-target="tooltip-copy" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 shadow-xs hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M5 9V4.13a2.96 2.96 0 0 0-1.293.749L.879 7.707A2.96 2.96 0 0 0 .13 9H5Zm11.066-9H9.829a2.98 2.98 0 0 0-2.122.879L7 1.584A.987.987 0 0 0 6.766 2h4.3A3.972 3.972 0 0 1 15 6v10h1.066A1.97 1.97 0 0 0 18 14V2a1.97 1.97 0 0 0-1.934-2Z"/>
                        <path d="M11.066 4H7v5a2 2 0 0 1-2 2H0v7a1.969 1.969 0 0 0 1.933 2h9.133A1.97 1.97 0 0 0 13 18V6a1.97 1.97 0 0 0-1.934-2Z"/>
                    </svg>
                    <span class="sr-only">Вишлист</span>
                </a>
                <div id="tooltip-copy" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip">
                    Вишлист
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
            <button type="button" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default" aria-expanded="false" class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:outline-none">
                <svg class="w-5 h-5 transition-transform group-hover:rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
                <span class="sr-only">Добавить</span>
            </button>
        </div>


    </div>

</x-app-layout>
