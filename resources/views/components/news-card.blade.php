@php
    use Illuminate\Support\Str;
@endphp

<div class="flex h-full flex-col gap-3 px-8 xl:w-[80vh] md:px-0">
    <img
        src="{{ asset($newsImageUrl ?? "storage/image_notfound.jpeg") }}"
        class="md:h-72 w-full border border-slate-300"
    />
    <section class="flex flex-col gap-2">
        <h1 class="text-2xl font-medium">
            {{ $newsTitle ?? "Judul Berita" }}
        </h1>
        <p class="text-sm font-medium">
            <i class="fa-regular fa-calendar-days"></i>
            - {{ $newsDate ?? "00/00/00000" }} &emsp;
            <i class="fa-solid fa-user"></i>
            - {{ $newsPublisher ?? "nama publisher" }}
        </p>
    </section>
    <p class="text-slate-500">
        {{
            $newsContent ??
                "
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse alias
                                    harum dolores molestias incidunt reprehenderit iste ab magnam laborum,
                                    eaque beatae excepturi labore, voluptas cumque sunt provident
                                    temporibus, veniam error? Corrupti, quae? Itaque, expedita eum sequi
                                    mollitia assumenda nostrum animi facilis dolorem porro, quam at
                                    necessitatibus fuga ratione! Nobis expedita ducimus iure delectus atque
                                    natus similique eaque necessitatibus accusamus explicabo, illo officiis
                                    alias possimus magni esse laborum maiores dolores soluta minus
                                    excepturi, reprehenderit laboriosam! Delectus dicta quae inventore animi
                                    temporibus."
        }}
    </p>
    <hr />
</div>
