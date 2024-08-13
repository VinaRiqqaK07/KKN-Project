<x-layouts.app>
    <x-slot:slot>
        <main class="mb-2 h-full w-full px-12 pb-16 pt-8">
            <h1 class="mb-4 text-3xl font-medium">Aparat Desa</h1>
            <hr />
            <section
                class="mt-4 flex flex-wrap justify-start overflow-y-auto px-1 py-1 gap-8"
            >
                @foreach ($officialsList as $officials)
                    <x-employee-card>
                        @if ($officials->imageUrl)
                            <x-slot:imageUrl>
                                {{ $officials->imageUrl }}
                            </x-slot>
                        @endif

                        <x-slot:name>
                            {{ $officials->official_name }}
                        </x-slot>
                        <x-slot:jabatan>
                            {{ $officials->positionName }}
                        </x-slot>
                    </x-employee-card>
                @endforeach

                <x-employee-card></x-employee-card>
                <x-employee-card></x-employee-card>
                <x-employee-card></x-employee-card>
                <x-employee-card></x-employee-card>
                <x-employee-card></x-employee-card>
            </section>
        </main>
    </x-slot>
</x-layouts.app>
