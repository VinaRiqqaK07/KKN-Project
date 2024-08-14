<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="google-site-verification" content="Pga_zUXBsT-asiuUAseQ_x2mxxerMBtSIThnI7uzFOs" />
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
            class="sticky left-0 top-0 z-50 flex w-full flex-wrap items-center justify-between bg-[#609af7] px-12 py-4"
            x-data="{ open: false }"
        >
            <section class="flex items-center gap-6">
                <img
                    src="{{ asset("storage/Jeneponto.png") }}"
                    class="h-20 w-20 rounded-full"
                />
                <section class="w-full">
                    <p class="text-xl font-medium">Desa Bulusuka</p>
                    <p>Kabupaten Jeneponto</p>
                </section>
            </section>

            <!-- Burger button for mobile view -->
            <button
                class="focus:shadow-outline rounded-lg focus:outline-none md:hidden"
                @click="open = !open"
            >
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>

            <!-- Main navigation -->
            <section
                :class="{'flex': open, 'hidden': !open}"
                class="hidden flex-col py-2 md:flex md:flex-row md:items-center"
            >
                <a href="/home" class="px-4">Home</a>
                <section
                    class="flex flex-col md:flex md:flex-row md:items-center"
                    x-data="{ open: null }"
                    @click.away="open = null"
                >
                    <!-- Profil Desa -->
                    <div class="ml-4 inline-block">
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
        <footer class="flex flex-col bottom-0 left-0 w-full mt-4">
            <section
                class="flex min-h-60 w-full flex-wrap gap-16 bg-[#609af7] px-12 pb-12 pt-8"
            >
                <img
                    src="{{ asset("storage/Jeneponto.png") }}"
                    class="h-36 w-36 rounded-full"
                />
                <section>
                    <p class="text-2xl font-bold">Kontak Kami</p>
                    <section class="my-2">
                        <p>Jl. Poros Tappalalo - Bulo Bulo, Desa Bulusuka, Kec. Bontoramba, Kab. Jeneponto</p>
                        <p>Kode POS : 92351</p>
                    </section>
                    <!--
                    <section class="my-2">
                        <p class="">
                            <i class="fa-solid fa-phone"></i>
                            - +628123456790
                        </p>
                        <p class="">
                            <i class="fa-solid fa-envelope"></i>
                            - email@gmail.com
                        </p>
                    </section>-->
                    <!--
                    <section>
                        <i></i>
                    </section>-->
                </section>
            </section>
            <section
                class="flex h-10 w-full flex-col items-center justify-center bg-[#4368a2]"
            >
                <p class="text-sm font-medium text-white">
                    Copyrights - All Rights Reserved
                </p>
            </section>
        </footer>
    </body>
</html>
