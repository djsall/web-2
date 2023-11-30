<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-12">
                        {{ __("You're logged in!") }}
                    </p>
                    <h2 class="text-xl">The distribution of users in the database:</h2>
                    <div class="mt-12">
                        {!! $chartjs->render()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
