<x-layouts.app>
    <x-slot:slot>
        <main class="flex h-full w-full flex-col items-center gap-16 py-10">
            @if ($newsList->isEmpty())
                <div class="flex h-48 items-center justify-center">
                    <p class="text-center text-lg">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        Belum Ada Berita
                    </p>
                </div>
            @else
                @foreach ($newsList as $news)
                    <a href="{{ route("news.show", $news->id) }}">
                        <x-news-card>
                            @if ($news->imageUrl)
                                <x-slot:newsImageUrl>
                                    {{ $news->imageUrl }}
                                </x-slot>
                            @endif

                            <x-slot:newsDate>
                                {{ $news->created_at }}
                            </x-slot>
                            <x-slot:newsTitle>
                                {{ $news->title }}
                            </x-slot>
                            <x-slot:newsPublisher>
                                {{ $news->publisherName }}
                            </x-slot>
                            <x-slot:newsContent>
                                <div class="custom-content-desc-news">
                                    {!! $news->limitedContent !!}
                                </div>
                            </x-slot>
                        </x-news-card>
                    </a>
                @endforeach
            @endif
        </main>
    </x-slot>
</x-layouts.app>
