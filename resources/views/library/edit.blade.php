<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a book') }} (#{{ $book->id }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('books.update', $book->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label for="author">Author</label>
                        <input type="text" name="author" value="{{ $book->author }}">
                    </div>

                    <div>
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $book->title }}">
                    </div>

                    <div>
                        <label for="genre">Genre</label>
                        <input type="text" name="genre" value="{{ $book->genre }}">
                    </div>

                    <div>
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" value="{{ $book->quantity }}">
                    </div>

                    <div>
                        <input type="submit" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>