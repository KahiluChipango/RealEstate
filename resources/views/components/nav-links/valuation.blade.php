
<div class="row">
    <div class="col-12">
        <div class="float-start hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

           <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                             {{ __('Home') }}
           </x-nav-link>
        </div>

        <div class="float-end hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

            <x-nav-link href="https://drive.google.com/drive/folders/1Go7sPa_1UdxhT7ixBSRYPEp7oilT9VaI" target="_blank">
                {{ __('COMMERCIAL PORTAL ') }}
            </x-nav-link>

        </div>
    </div>
</div>
