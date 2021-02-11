<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Select book') }}  (#{{ $book->id }} {{ $book->title }})
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
                    <td>
                        <a href="{{ route('books.show', $book->id) }}">Display</a>
                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                        <form class="inline-block" action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="text-red-600 bg-transparent hover:text-red-900 mb-2 mr-2" value="Delete">
                        </form>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>