<x-layouts.app>
    <x-slot:slot>
        <main class="flex flex-col gap-6 px-12 pb-16 pt-8">
            <h1 class="text-3xl font-medium">Struktur Organisasi</h1>
            @if ($struktur_organisasi->isEmpty())
                <img src="{{ asset("storage/image_notfound.jpeg") }}" />
            @else
                @foreach ($struktur_organisasi as $struktur)
                    <img
                        src="{{ asset($struktur->imageUrl ?? "storage/image_notfound.jpeg") }}"
                    />
                @endforeach
            @endif
        </main>
    </x-slot>
</x-layouts.app>
