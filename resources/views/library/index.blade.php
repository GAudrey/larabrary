<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('All books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <a href="{{ route('books.create')}}">Create a new entry</a>

                <table>
                <tr>   
                    <th>ID</th>
                    <th>Authors</th>
                    <th>Titles</th>
                    <th>Genres</th>
                </tr>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->genre }}</td>
                    <td><a href="{{ route('books.show', $book->id) }}">Display</a></td>
                    <td><a href="{{ route('books.edit', $book->id) }}">Edit</a></td>
                    <td><a href="{{ route('books.destroy', $book->id) }}">Delete</a></td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>