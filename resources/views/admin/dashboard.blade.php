<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Admin Dashboard') }} - ({{Auth::guard('admin')->user()->email }})

            <!-- {{Auth::guard('admin')->user()->name }}                   if want name of user than put it above-->  
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-white-200">
                   Welcome You're logged in!
                </div>
                
            </div>
        </div>
    </div>
</x-admin-layout>
