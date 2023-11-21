<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            {{ __("Bienvenido de nuevo, " . Auth::user()->name . "!") }}
                        </p>
                        
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Tu perfil</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">
                            <strong>Email:</strong> {{ Auth::user()->email }}
                        </p>
                        <!-- Add more user-related information here -->
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">
                        {{ __("Has iniciado sesión correctamente. Aquí tienes una instantánea de tu actividad:") }}
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="bg-blue-200 p-4 rounded-md shadow-md">
                            <p class="text-lg font-semibold text-blue-800">Recent Orders</p>
                            <p class="text-sm text-blue-600">You have 3 new orders. Check them out!</p>
                        </div>
                        <div class="bg-green-200 p-4 rounded-md shadow-md">
                            <p class="text-lg font-semibold text-green-800">Tasks</p>
                            <p class="text-sm text-green-600">Complete the tasks for the day to stay on track.</p>
                        </div>
                        <div class="bg-yellow-200 p-4 rounded-md shadow-md">
                            <p class="text-lg font-semibold text-yellow-800">Upcoming Events</p>
                            <p class="text-sm text-yellow-600">Don't forget about the upcoming events and deadlines.</p>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Latest Notifications</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600 dark:text-gray-300">
                            <li>New product added to your wishlist.</li>
                            <li>You have a meeting scheduled for tomorrow.</li>
                            <li>Your subscription renewal is due in 7 days.</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
