<x-app-layout>
    <x-slot name="header">

        <x-nav-links.super-admin></x-nav-links.super-admin>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-table.table>
                        <x-slot name="header">
                            <x-table.header>#Id</x-table.header>
                            <x-table.header>Name</x-table.header>
                            <x-table.header>Email</x-table.header>
                            <x-table.header>Actions</x-table.header>

                        </x-slot>


                        @foreach($users as $user)
                            <tr>

                                <x-table.column>{{$user->id}}</x-table.column>
                                <x-table.column>{{$user->name}}</x-table.column>
                                <x-table.column>{{$user->email}}</x-table.column>
                                <x-table.column>
                                        {{--Edit Button--}}
                                        <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                           href="{{ route('valmaster.super-admin.edit', $user->id) }}"
                                           role="button">
                                            Edit
                                        </a>

                                        {{--Delete Button--}}
                                        <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500/75 hover:bg-red-500/100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                onclick="event.preventDefault();
                                                    document.getElementById('delete-user-form-{{$user->id}}').submit()">
                                            DELETE
                                        </button>

                                    <form id="delete-user-form-{{ $user->id }}" action="{{ route('valmaster.super-admin.destroy', $user->id) }}" method="POST" style="display: none">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </x-table.column>
                            </tr>
                        @endforeach

                        <x-slot name="footer">
                            <tr>
                                <x-table.header>#</x-table.header>
                                <x-table.header>Job #</x-table.header>
                                <x-table.header>Client Name</x-table.header>
                                <x-table.header>Contact Number</x-table.header>

                            </tr>
                        </x-slot>
                    </x-table.table>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
