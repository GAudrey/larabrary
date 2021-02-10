<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a new book entry') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('books.store') }}" method="post">
                    @csrf
                    @method('POST')
                    
                    <div>
                        <label for="author">Author</label>
                        <input type="text" name="author">
                    </div>

                    <div>
                        <label for="title">Title</label>
                        <input type="text" name="title">
                    </div>

                    <div>
                        <label for="genre">Genre</label>
                        <input type="text" name="genre">
                    </div>

                    <div>
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity">
                    </div>

                    <div>
                        <input type="submit" value="Create">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>