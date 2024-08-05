<x-layouts.app>
    <x-slot:slot>
        <!-- Banner Image -->
        <img
            src="{{ asset("storage/image_notfound.jpeg") }}"
            alt="Banner Image"
            class="h-[380px] w-full"
        />
        <main class="h-full w-full px-12">
            <!-- Struktur Organisasi -->
            <section class="flex flex-col gap-2 py-8">
                <h1 class="text-2xl font-semibold">Aparat Desa</h1>
                <hr />
                <section class="flex items-center justify-between gap-16 py-8">
                    <x-employee-card></x-employee-card>
                    <x-employee-card></x-employee-card>
                    <x-employee-card></x-employee-card>
                    <x-employee-card></x-employee-card>
                    <x-employee-card></x-employee-card>
                </section>
            </section>
            <!-- News and Notice -->
            <section class="flex justify-between gap-10 pb-16 pt-6">
                <section class="flex h-full w-full flex-col gap-2">
                    <h1 class="text-2xl font-semibold">Berita Terkini</h1>
                    <hr />
                    <x-recent-news></x-recent-news>
                    <x-recent-news></x-recent-news>
                </section>
                <section class="flex h-full w-[60vh] flex-col gap-2">
                    <h1 class="text-2xl font-semibold">Pengumuman</h1>
                    <hr />
                    <x-recent-notice-card></x-recent-notice-card>
                    <x-recent-notice-card></x-recent-notice-card>
                    <x-recent-notice-card></x-recent-notice-card>
                </section>
            </section>
        </main>
    </x-slot>
</x-layouts.app>
