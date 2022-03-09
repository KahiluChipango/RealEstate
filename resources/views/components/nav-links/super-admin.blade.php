
<div class="row">
    <div class="col-12">
        <div class="float-start hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

           <x-nav-link :href="route('valmaster.super-admin.index')"
                       :active="request()->routeIs('valmaster.super-admin.index')">
                            {{ __('Home') }}
           </x-nav-link>

           <x-nav-link :href="route('valmaster.front-desk.index')"
                       :active="request()->routeIs('valmaster.front-desk.index')">
                            {{ __('Front Desk') }}
           </x-nav-link>
            <x-nav-link :href="route('valmaster.accounts.index')"
                        :active="request()->routeIs('valmaster.accounts.index')">
                            {{ __('Accounts') }}
           </x-nav-link>
            <x-nav-link :href="route('valmaster.agency.index')"
                        :active="request()->routeIs('valmaster.agency.index')">
                            {{ __('Agency') }}
           </x-nav-link>
            <x-nav-link :href="route('valmaster.valuation.index')"
                        :active="request()->routeIs('valmaster.valuation.index')">
                           {{ __('Valuations') }}
            </x-nav-link>
            <x-nav-link :href="route('valmaster.admin.index')"
                        :active="request()->routeIs('valmaster.admin.index')">
                           {{ __('Admin') }}
             </x-nav-link>

        </div>

        <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
           href="{{ route('valmaster.super-admin.create') }}"
           role="button">
            Add New User
        </a>

    </div>
</div>
