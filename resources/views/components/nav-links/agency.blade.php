<div class="row">
    <div class="col-12">
        <div class="float-start hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

            <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                {{ __('Home') }}
            </x-nav-link>

        </div>
        <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
           href="{{ route('valmaster.agency.create') }}"
           role="button">
            ADD NEW RECORD
        </a>
    </div>
</div>

