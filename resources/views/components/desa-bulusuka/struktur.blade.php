<x-layouts.app>
    <x-slot:slot>
        <main class="px-12 pt-8 pb-16 flex flex-col gap-6">
            <h1 class="text-3xl font-medium">Struktur Organisasi</h1>
            @foreach($struktur_organisasi as $struktur)
            <img src="{{ asset($struktur->imageUrl ?? "storage/image_notfound.jpeg") }}">
            @endforeach
            
        </main>
    </x-slot>
</x-layouts.app>
