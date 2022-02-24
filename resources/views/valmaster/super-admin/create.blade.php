<x-app-layout>
    <x-slot name="header">

        <x-nav-links.super-admin></x-nav-links.super-admin>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


<h1 class="text-2xl pb-3 font-semibold"> Create New User</h1>

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('valmaster.super-admin.store') }}">
                                @csrf

                                <!-- Name -->
                                    <div>
                                        <x-label for="name" :value="__('Name')" />

                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <x-label for="email" :value="__('Email')" />

                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Password')" />

                                        <x-input id="password" class="block mt-1 w-full"
                                                 type="password"
                                                 name="password"
                                                 required autocomplete="new-password" />
                                    </div>

                                   {{-- <div class="mt-4">
                                        @foreach($roles as $role)
                                            <div class="form-check">
                                                <label class="form-check-label" for="{{$role->name}}">
                                                    {{ $role->name }}
                                                </label>


                                                <x-input class="form-check-input" name="roles[]"
                                                         type="radio"
                                                         value="{{$role->id}}"
                                                         id="{{$role->name}}"
                                                         @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset
                                                 />

                                            </div>

                                        @endforeach
                                    </div>--}}

                                    <div class="mt-4">
                                        @foreach($roles as $role)
                                            <div class="form-check">
                                                <input class="form-check-input" name="roles[]"
                                                       type="radio" value="{{$role->id}}" id="{{$role->name}}"
                                                       @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
                                                <label class="form-check-label" for="{{$role->name}}">
                                                    {{ $role->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>



                                    <div class="flex items-center justify-end mt-4">

                                        <x-button class="ml-4">
                                            {{ __('ADD') }}
                                        </x-button>
                                    </div>
                                </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
