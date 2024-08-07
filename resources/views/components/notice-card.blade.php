<div class="flex h-full w-[80vh] flex-col gap-3">
    <img
        src="{{ asset($noticeImageUrl ?? "storage/image_notfound.jpeg") }}"
        class="w-fill h-72"
    />
    <section class="mb-4 flex flex-col gap-2">
        <h1 class="text-2xl font-medium">
            {{ $noticeTitle ?? "Judul Kegiatan" }}
        </h1>
        <section class="flex justify-between">
            <p class="text-sm font-medium">
                <i class="fa-solid fa-user"></i>
                - {{ $noticePublisher ?? "nama publisher" }}
            </p>
            <p class="text-sm font-medium">
                <i></i>
                - {{ $noticeLocation ?? "lokasi kegiatan" }} &emsp;
                <i class="fa-regular fa-calendar-days"></i>
                - {{ $noticeDate ?? "tanggal kegiatan" }}
            </p>
        </section>
    </section>
    <!--<p class="text-slate-500">
        {{
            $noticeContent ??
                "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, odio
                    suscipit quaerat, sed maxime ullam repellendus blanditiis quo dolorum
                    molestiae accusantium, consequuntur repudiandae tenetur! Dignissimos,
                    nihil aspernatur enim itaque corrupti vero dolorum temporibus mollitia,
                    nam vitae nulla harum debitis ullam? Id at quis, optio accusantium
                    similique distinctio natus adipisci numquam facere reprehenderit cum ab
                    minus eos dolor recusandae, voluptatem porro modi vero non harum itaque
                    odio ratione! Consequuntur, adipisci voluptatem molestias rem corporis
                    totam sit? Eveniet iste dolorum similique nobis."
        }}
    </p>-->
    <hr />
</div>
