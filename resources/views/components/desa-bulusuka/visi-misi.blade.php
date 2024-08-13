<x-layouts.app>
    <x-slot:slot>
        <main class="h-full w-full px-20 py-10">
            <h1 class="text-3xl font-medium">Visi Misi Desa</h1>
            <section class="custom-content-news mt-4 flex flex-col gap-4">
                @foreach ($visi_misi as $vm)
                    {!!
                        $vm->content ??
                            '<h2 class="text-xl">Visi Desa</h2>
                                                            <p>
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                                Debitis rerum delectus quam ad fugit voluptatibus, nemo
                                                                dolores eveniet, dignissimos eos reprehenderit perspiciatis
                                                                adipisci, eligendi facere inventore sequi commodi soluta
                                                                doloremque velit libero provident impedit aliquam! Optio
                                                                laborum eveniet ad? Quis animi dolore, fugit rem voluptatem
                                                                tempora, nemo est nostrum eligendi accusamus modi!
                                                                Consequatur illo nesciunt tenetur impedit quisquam ut sint
                                                                laborum, exercitationem illum necessitatibus repellendus
                                                                ducimus aliquid nemo voluptatum id alias ea ad voluptates
                                                                excepturi? Nobis perspiciatis molestias temporibus. Vitae
                                                                alias voluptatem minima harum fuga doloremque delectus
                                                                praesentium fugiat consequuntur cumque perspiciatis odio
                                                                dignissimos sit, esse nostrum sapiente? Possimus, ex.
                                                                Facilis consectetur nisi corrupti natus in, nesciunt aliquam
                                                                ab, magni, quod at earum molestias commodi! Suscipit iusto
                                                                velit vitae quidem quaerat quod, excepturi sint aspernatur
                                                                culpa sequi eos iure nostrum, laborum obcaecati quasi magnam
                                                                ipsum in explicabo minus pariatur repellat! Quam, nisi omnis
                                                                laboriosam sapiente praesentium iure suscipit maiores,
                                                                voluptas reprehenderit fugit, illo officiis officia. A velit
                                                                consequuntur dolorem. Soluta illum, architecto recusandae id
                                                                expedita maxime eligendi corrupti quam! Laboriosam nostrum
                                                                hic sit harum at repellendus doloremque modi eveniet
                                                                provident eos. Delectus deleniti autem obcaecati facere cum
                                                                ex, voluptates provident cupiditate animi quis, dicta, totam
                                                                placeat dolorum unde ad tempora!
                                                            </p>
                                                            <h2 class="text-xl pt-5">Misi Desa</h2>
                                                            <p>
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                                Debitis rerum delectus quam ad fugit voluptatibus, nemo
                                                                dolores eveniet, dignissimos eos reprehenderit perspiciatis
                                                                adipisci, eligendi facere inventore sequi commodi soluta
                                                                doloremque velit libero provident impedit aliquam! Optio
                                                                laborum eveniet ad? Quis animi dolore, fugit rem voluptatem
                                                                tempora, nemo est nostrum eligendi accusamus modi!
                                                                Consequatur illo nesciunt tenetur impedit quisquam ut sint
                                                                laborum, exercitationem illum necessitatibus repellendus
                                                                ducimus aliquid nemo voluptatum id alias ea ad voluptates
                                                                excepturi? Nobis perspiciatis molestias temporibus. Vitae
                                                                alias voluptatem minima harum fuga doloremque delectus
                                                                praesentium fugiat consequuntur cumque perspiciatis odio
                                                                dignissimos sit, esse nostrum sapiente? Possimus, ex.
                                                                Facilis consectetur nisi corrupti natus in, nesciunt aliquam
                                                                ab, magni, quod at earum molestias commodi! Suscipit iusto
                                                                velit vitae quidem quaerat quod, excepturi sint aspernatur
                                                                culpa sequi eos iure nostrum, laborum obcaecati quasi magnam
                                                                ipsum in explicabo minus pariatur repellat! Quam, nisi omnis
                                                                laboriosam sapiente praesentium iure suscipit maiores,
                                                                voluptas reprehenderit fugit, illo officiis officia. A velit
                                                                consequuntur dolorem. Soluta illum, architecto recusandae id
                                                                expedita maxime eligendi corrupti quam! Laboriosam nostrum
                                                                hic sit harum at repellendus doloremque modi eveniet
                                                                provident eos. Delectus deleniti autem obcaecati facere cum
                                                                ex, voluptates provident cupiditate animi quis, dicta, totam
                                                                placeat dolorum unde ad tempora!
                                                            </p>'
                    !!}
                @endforeach
            </section>
        </main>
    </x-slot>
</x-layouts.app>
