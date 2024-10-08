@php
    $chunkedOfficials = $officialsList->chunk(4);
@endphp

<x-layouts.app>
    <x-slot:slot>
        <!-- Banner Image -->
        <div
            x-data="{
                currentIndex: 0,
                banners:
                    {{ json_encode($banners->pluck("imageUrl")->isEmpty() ? [asset("storage/image_notfound.jpeg")] : $banners->pluck("imageUrl")) }},
            }"
            x-init="
                setInterval(() => {
                    currentIndex = (currentIndex + 1) % banners.length
                }, 4000)
            "
            class="relative mb-8 h-full w-full"
        >
            <!-- Slider Items-->
            <div class="flex items-center justify-items-center overflow-hidden">
                @if ($banners->isEmpty())
                    <div
                        class="h-[680px] w-full bg-cover bg-center transition-opacity duration-500"
                        style="
                            background-image: url('{{ asset("storage/image_notfound.jpeg") }}');
                        "
                    ></div>
                @else
                    @foreach ($banners as $index => $banner)
                        <div
                            x-show="currentIndex === {{ $index }}"
                            class="h-[680px] w-full bg-cover bg-center transition-opacity duration-500"
                            style="
                                background-image: url({{ asset($banner->imageUrl) }});
                            "
                            x-transition:enter="opacity-0"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="opacity-100"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                        ></div>
                    @endforeach
                @endif

                @if (! $banners->isEmpty())
                    <button
                        @click="currentIndex = (currentIndex === 0 ? {{ count($banners) - 1 }} : currentIndex - 1)"
                        class="absolute left-0 top-1/2 z-10 -translate-y-1/2 transform rounded-full bg-white bg-opacity-50 p-2 shadow"
                    >
                        &lt;
                    </button>
                    <button
                        @click="currentIndex = (currentIndex === {{ count($banners) - 1 }} ? 0 : currentIndex + 1)"
                        class="absolute right-0 top-1/2 z-10 -translate-y-1/2 transform rounded-full bg-white bg-opacity-50 p-2 shadow"
                    >
                        &gt;
                    </button>
                @endif
            </div>

            <!-- Indicators -->
            @if (! $banners->isEmpty())
                <div class="flex justify-center space-x-2 p-4">
                    @foreach ($banners as $index => $banner)
                        <div
                            @click="currentIndex = {{ $index }}"
                            class="h-3 w-3 cursor-pointer rounded-full bg-gray-500"
                            :class="{ 'bg-opacity-100': currentIndex === {{ $index }}, 'bg-opacity-50': currentIndex !== {{ $index }} }"
                        ></div>
                    @endforeach
                </div>
            @endif
        </div>
        <main class="h-full w-full px-8">
            <!-- Struktur Organisasi -->
            <section class="flex flex-col gap-2 py-8">
                <h1 class="text-2xl font-semibold">Aparat Desa</h1>
                <hr />
                <section x-data="{ currentIndex: 0 }">
                    <div class="relative">
                        <!-- Slider Items -->
                        <div
                            class="flex items-center justify-items-center overflow-hidden"
                        >
                            @if ($chunkedOfficials->isEmpty())
                                <div
                                    class="w-full bg-cover bg-center transition-opacity duration-500"
                                    style="
                                        background-image: url('{{ asset("storage/image_notfound.jpeg") }}');
                                    "
                                ></div>
                            @else
                                @foreach ($chunkedOfficials as $index => $officials)
                                    <div
                                        x-show="currentIndex === {{ $index }}"
                                        class="flex w-full justify-center gap-16 transition-opacity duration-500"
                                        x-transition:enter="opacity-0"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="opacity-100"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                    >
                                        @foreach ($officials as $official)
                                            <x-employee-card>
                                                @if ($official->imageUrl)
                                                    <x-slot:imageUrl>
                                                        {{ $official->imageUrl }}
                                                    </x-slot>
                                                @endif

                                                <x-slot:name>
                                                    {{ $official->official_name }}
                                                </x-slot>
                                                <x-slot:jabatan>
                                                    {{ $official->positionName }}
                                                </x-slot>
                                            </x-employee-card>
                                        @endforeach
                                    </div>
                                @endforeach
                            @endif

                            <!-- Navigation Buttons -->
                            @if (! $chunkedOfficials->isEmpty())
                                <button
                                    @click="currentIndex = (currentIndex === 0 ? {{ count($chunkedOfficials) - 1 }} : currentIndex - 1)"
                                    class="absolute left-0 top-1/2 z-10 -translate-y-1/2 transform rounded-full bg-white bg-opacity-50 p-2 shadow"
                                >
                                    &lt;
                                </button>
                                <button
                                    @click="currentIndex = (currentIndex === {{ count($chunkedOfficials) - 1 }} ? 0 : currentIndex + 1)"
                                    class="absolute right-0 top-1/2 z-10 -translate-y-1/2 transform rounded-full bg-white bg-opacity-50 p-2 shadow"
                                >
                                    &gt;
                                </button>
                            @endif
                        </div>

                        <!-- Indicators -->
                        @if (! $chunkedOfficials->isEmpty())
                            <div class="flex justify-center space-x-2 p-4">
                                @foreach ($chunkedOfficials as $index => $officials)
                                    <div
                                        @click="currentIndex = {{ $index }}"
                                        class="h-3 w-3 cursor-pointer rounded-full bg-gray-500"
                                        :class="{ 'bg-opacity-100': currentIndex === {{ $index }}, 'bg-opacity-50': currentIndex !== {{ $index }} }"
                                    ></div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </section>
            </section>
            <!-- News and Notice -->
            <section
                class="flex flex-wrap justify-between gap-10 pb-16 pt-6 md:flex-nowrap"
            >
                <section class="flex h-full w-full flex-col gap-2">
                    <h1 class="text-2xl font-semibold">Berita Terkini</h1>
                    <hr />
                    @if ($newsList->isEmpty())
                        <div class="flex h-48 items-center justify-center">
                            <p class="text-center text-lg text-gray-500">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                Belum Ada Berita Terkini
                            </p>
                        </div>
                    @else
                        @foreach ($newsList as $news)
                            <a href="{{ route("news.show", $news->id) }}">
                                <x-recent-news>
                                    @if ($news->imageUrl)
                                        <x-slot:newsImageUrl>
                                            {{ $news->imageUrl }}
                                        </x-slot>
                                    @endif

                                    <x-slot:newsTitle>
                                        {{ $news->title }}
                                    </x-slot>
                                    <x-slot:newsContent>
                                        <div class="custom-content-desc-news">
                                            {!! $news->limitedContent !!}
                                        </div>
                                    </x-slot>
                                </x-recent-news>
                            </a>
                        @endforeach
                    @endif
                </section>
                <section class="flex h-full w-[60vh] flex-col gap-2">
                    <h1 class="text-2xl font-semibold">Pengumuman</h1>
                    <hr />
                    @if ($noticesList->isEmpty())
                        <div class="flex h-48 items-center justify-center">
                            <p class="text-center text-lg text-gray-500">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                Belum ada pengumuman
                            </p>
                        </div>
                    @else
                        @foreach ($noticesList as $notice)
                            <a href="{{ route("notices.show", $notice->id) }}">
                                <x-recent-notice-card>
                                    <x-slot:noticeTitle>
                                        {{ $notice->title }}
                                    </x-slot>
                                    <x-slot:noticeDate>
                                        {{ $notice->notice_date }}
                                    </x-slot>
                                    <x-slot:noticeLocation>
                                        {{ $notice->notice_location }}
                                    </x-slot>
                                </x-recent-notice-card>
                            </a>
                        @endforeach
                    @endif
                </section>
            </section>
        </main>
    </x-slot>
</x-layouts.app>
