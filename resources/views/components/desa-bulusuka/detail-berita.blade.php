<x-layouts.app>
    <x-slot:slot>
        <main class="flex h-full w-full flex-col items-center gap-8 py-10">
            <div class="flex h-full w-[80vh] flex-col gap-3">
                <img
                    src="{{ asset($news->imageUrl ?? "storage/image_notfound.jpeg") }}"
                    alt="Gambar untuk berita {{ $news->title ?? "Judul Berita" }}"
                    class="h-72 w-full"
                />
                <section>
                    <h1 class="text-3xl font-medium">
                        {{ $news->title ?? "Judul Berita" }}
                    </h1>
                    <p class="text-sm font-medium">
                        <i class="fa-regular fa-calendar-days"></i>
                        - {{ $news->created_at ?? "00/00/00000" }} &emsp;
                        <i class="fa-solid fa-user"></i>
                        - {{ $news->publisherName ?? "nama publisher" }}
                    </p>
                </section>
                <div class="custom-content-desc-news">
                    {!!
                        $news->content ??
                            '<p class="mb-4">
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
                                        </p>
                                        <p class="mb-4">
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
                                        </p>
                                        <p class="mb-4">
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
                                        </p>
                                        <p class="mb-4">
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
            </div>
        </main>
    </x-slot>
</x-layouts.app>
