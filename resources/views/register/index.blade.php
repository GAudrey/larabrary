@if(Auth::user()->isAdministrator())
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Register') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <a href="{{ route('users.create')}}">Create a new member</a>

                <table>
                <tr>   
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Management</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">Display</a>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                        <form class="inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="text-red-600 bg-transparent hover:text-red-900 mb-2 mr-2" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
@endif