<x-layout>
    <x-slot:title>
        Daftar Kategori
    </x-slot:title>

    <div class="py-8 max-w-screen-md mx-auto">
        <h1 class="mb-4 text-3xl font-bold text-gray-900">Daftar Kategori</h1>

        <div class="bg-white shadow rounded-lg p-6">
            <ul class="divide-y divide-gray-200">
                @foreach ($categories as $category)
                    <li class="py-4 flex items-center justify-between">
                        <a href="#" class="text-xl font-medium text-blue-600 hover:underline">
                            {{ $category->name }}
                        </a>
                        
                        <span class="text-sm text-gray-500">
                            Dibuat: {{ $category->created_at->format('d M Y') }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
        
       
    </div>
</x-layout>