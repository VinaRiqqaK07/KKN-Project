<div class="flex gap-6">
    <img
        src="{{ asset("storage/image_notfound.jpeg") }}"
        alt="Image Not Available"
        class="h-40 w-64"
    />
    <section class="flex flex-col gap-1">
        <p class="text-xl font-medium">
            {{ $news_title ?? "Judul Berita" }}
        </p>
        <p class="text-sm text-slate-500">
            {{
                $desc_news ??
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Accusamus assumenda excepturi harum maiores ipsa,
                                        provident iure doloribus molestiae. Doloribus fuga,
                                        architecto dolorum at exercitationem fugiat illum,
                                        dignissimos, animi laboriosam porro quam voluptatem
                                        deleniti? Ut debitis voluptas est beatae saepe suscipit
                                        voluptatum inventore soluta repellendus, perspiciatis,
                                        alias dolor iste cum pariatur, veniam vel ipsa
                                        recusandae eaque nulla. Numquam nobis id eaque!"
            }}
        </p>
    </section>
</div>