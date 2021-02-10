<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Select book') }}  (#{{ $book->id }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table>
                <tr>   
                    <th>ID</th>
                    <th>Authors</th>
                    <th>Titles</th>
                    <th>Genres</th>
                </tr>
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->genre }}</td>
                    <td><a href="{{ route('books.edit', $book->id) }}">Edit</a></td>
                    <td><a href="{{ route('books.destroy', $book->id) }}">Delete</a></td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>