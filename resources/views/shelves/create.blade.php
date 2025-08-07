<x-app-layout>

    <div class="bg-light font-sans text-gray-800 flex h-screen">

        <x-shelves-nav/>

        <x-shelves-main>

            <form method="POST" action="{{ route('shelves.books.store') }}">
                @csrf

{{--                <div class="flex items-center justify-center w-full">--}}
{{--                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">--}}
{{--                        <div class="flex flex-col items-center justify-center pt-5 pb-6">--}}
{{--                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">--}}
{{--                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>--}}
{{--                            </svg>--}}
{{--                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>--}}
{{--                            <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>--}}
{{--                        </div>--}}
{{--                        <input id="dropzone-file" type="file" class="hidden" />--}}
{{--                    </label>--}}
{{--                </div>--}}
                <label for="publisher" class="block mb-2 text-sm font-medium text-gray-900">Select an option</label>
                <select id="publisher" name="publisher" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="null" selected>Выберите издателя</option>
                    @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                    @endforeach
                </select>

                <label for="genre" class="block mb-2 text-sm font-medium text-gray-900">Select an option</label>
                <select id="genre" name="genre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="null" selected>Выберите жанр</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Название книги</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-6">
                    <label for="pages" class="block mb-2 text-sm font-medium text-gray-900">Количество страниц</label>
                    <input type="text" name="pages" id="pages" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

{{--                <div class="mb-6">--}}
{{--                    <label for="format" class="block mb-2 text-sm font-medium text-gray-900">Формат</label>--}}
{{--                    <input type="text" id="format" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />--}}
{{--                </div>--}}

                <label for="format" class="block mb-2 text-sm font-medium text-gray-900">Select an option</label>
                <select id="format" name="format" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="null" selected>Выберите формат</option>
                    @foreach($formats as $id => $format)
                        <option value="{{ $id }}">{{ $format }}</option>
                    @endforeach
                </select>

{{--                <div class="mt-6 flex items-center justify-end gap-x-6">--}}
{{--                    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>--}}
{{--                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>--}}
{{--                </div>--}}
                <x-primary-button class="ms-3">
                    Добавить
                </x-primary-button>
            </form>

        </x-shelves-main>

    </div>

</x-app-layout>
