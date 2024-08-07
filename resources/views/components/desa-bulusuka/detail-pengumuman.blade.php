<x-layouts.app>
    <x-slot:slot>
        <main class="flex h-full w-full flex-col items-center gap-8 py-10">
            <section class="flex h-full w-[80vh] flex-col gap-3">
                <section class="my-2">
                    <h1 class="mb-2 text-3xl font-medium">
                        {{ $notices->title ?? "Judul Pengumuman Kegiatan" }}
                    </h1>
                    <p class="text-sm text-slate-500 font-medium">
                        <i class="fa-regular fa-calendar-days"></i>
                        - {{ $notices->created_at ?? "00/00/00000" }} &emsp;
                        <i class="fa-solid fa-user"></i>
                        - {{ $notices->publisherName ?? "nama publisher" }}
                    </p>
                </section>
                <img
                    src="{{ asset($notices->imageUrl ?? "storage/image_notfound.jpeg") }}"
                    class="h-72 w-full"
                />
                <section class="mb-2 flex flex-col gap-2">
                    <h2 class="text-xl font-medium">
                        Lokasi Kegiatan :
                        {{ $notices->notice_location ?? "Lokasi" }}
                    </h2>
                    <h2 class="text-xl font-medium">
                        Tanggal Kegiatan :
                        {{ $notices->notice_date ?? "Tanggal" }}
                    </h2>
                </section>
                <div class="custom-content-desc-news mb-4">
                    {!!
                        $notices->content ??
                            '<p class="mb-4 text-slate-500">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Esse alias harum dolores molestias incidunt reprehenderit
                                            iste ab magnam laborum, eaque beatae excepturi labore,
                                            voluptas cumque sunt provident temporibus, veniam error?
                                            Corrupti, quae? Itaque, expedita eum sequi mollitia
                                            assumenda nostrum animi facilis dolorem porro, quam at
                                            necessitatibus fuga ratione! Nobis expedita ducimus iure
                                            delectus atque natus similique eaque necessitatibus
                                            accusamus explicabo, illo officiis alias possimus magni esse
                                            laborum maiores dolores soluta minus excepturi,
                                            reprehenderit laboriosam! Delectus dicta quae inventore
                                            animi temporibus.
                                        </p>'
                    !!}
                </div>

                <hr />
                <section class="py-8">
                    <h2 class="w-27 mb-2 h-8 px-4 py-2 text-2xl font-medium">
                        Agenda-Agenda Terakhir
                    </h2>

                    <section class="my-4">
                        <section class="flex flex-col gap-4 px-4 py-2">
                            <x-recent-notice-card></x-recent-notice-card>
                            <x-recent-notice-card></x-recent-notice-card>
                            <x-recent-notice-card></x-recent-notice-card>
                        </section>
                    </section>
                </section>
            </section>
        </main>
    </x-slot>
</x-layouts.app>
