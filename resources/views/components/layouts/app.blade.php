<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Desa Bulusuka</title>
        <script src="//unpkg.com/alpinejs" defer></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        @vite("resources/css/app.css")
    </head>
    <body class="h-full w-full">
        <header
            class="flex h-24 w-full items-center justify-between bg-red-500 px-12"
        >
            <section class="flex items-center gap-6">
                <div class="h-16 w-16 rounded-full bg-blue-500"></div>
                <section>
                    <p class="text-xl font-medium">Desa Bulusuka</p>
                    <p>Kabupaten Jeneponto</p>
                </section>
            </section>
            <section class="flex gap-8">
                <a href="/home"><p>Home</p></a>

                <section
                    class="relative"
                    x-data="{
                        open: null,
                    }"
                    @click.away="open = null"
                >
                    <!-- Profil Desa -->
                    <div class="inline-block">
                        <p
                            @click="open = (open === 'profil' ? null : 'profil')"
                            class="flex cursor-pointer items-center"
                        >
                            Profil Desa
                            <i class="fa-solid fa-caret-down ml-1"></i>
                        </p>
                        <div
                            x-show="open === 'profil'"
                            x-cloak
                            class="absolute mt-2 w-48 rounded-md bg-white py-2 shadow-md"
                        >
                            <a
                                href="/visi-misi"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                            >
                                Visi & Misi
                            </a>
                            <a
                                href="/sejarah"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                            >
                                Sejarah
                            </a>
                        </div>
                    </div>

                    <!-- Pemerintahan -->
                    <div class="ml-4 inline-block">
                        <p
                            @click="open = (open === 'pemerintahan' ? null : 'pemerintahan')"
                            class="flex cursor-pointer items-center"
                        >
                            Pemerintahan
                            <i class="fa-solid fa-caret-down ml-1"></i>
                        </p>
                        <div
                            x-show="open === 'pemerintahan'"
                            x-cloak
                            class="absolute mt-2 w-48 rounded-md bg-white py-2 shadow-md"
                        >
                            <a
                                href="/struktur"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                            >
                                Struktur Organisasi
                            </a>
                            <a
                                href="/aparat"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                            >
                                Aparat Desa
                            </a>
                        </div>
                    </div>

                    <!-- Informasi Publik -->
                    <div class="ml-4 inline-block">
                        <p
                            @click="open = (open === 'informasi' ? null : 'informasi')"
                            class="flex cursor-pointer items-center"
                        >
                            Informasi Publik
                            <i class="fa-solid fa-caret-down ml-1"></i>
                        </p>
                        <div
                            x-show="open === 'informasi'"
                            x-cloak
                            class="absolute mt-2 w-48 rounded-md bg-white py-2 shadow-md"
                        >
                            <a
                                href="/berita"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                            >
                                Berita
                            </a>
                            <a
                                href="/pengumuman"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                            >
                                Pengumuman
                            </a>
                        </div>
                    </div>
                </section>
            </section>
        </header>
        {{ $slot }}
        <footer>
            <section
                class="flex h-60 w-full gap-16 bg-gray-200 px-12 pb-12 pt-8"
            >
                <div class="h-36 w-36 rounded-full bg-blue-500"></div>
                <section>
                    <p class="text-2xl font-bold">Kontak Kami</p>
                    <section class="my-2">
                        <p>Jalan nama jalan</p>
                        <p>Kode pos</p>
                    </section>
                    <section class="my-2">
                        <p>
                            <i></i>
                            Nomor telepon
                        </p>
                        <p>
                            <i></i>
                            email
                        </p>
                    </section>
                    <section>
                        <i></i>
                    </section>
                </section>
            </section>
            <section class="h-10 w-full bg-gray-500"></section>
        </footer>
    </body>
</html>
