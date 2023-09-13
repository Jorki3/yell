<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex">
                    <div class="w-2/6">
                        <livewire:contacts.contact-list />
                    </div>
                    <div class="w-4/6">
                        <livewire:chat.chat />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
