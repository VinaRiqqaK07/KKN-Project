<x-layouts.app>
    <x-slot:slot>
        <main class="flex h-full w-full flex-col items-center gap-8 py-10">
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
                        <!--<x-slot:newsContent>
                            <div class="custom-content-desc-news">
                                {!! $news->content !!}
                            </div>
                        </x-slot>-->
                    </x-news-card>
                </a>
            @endforeach
            
        </main>
    </x-slot>
</x-layouts.app>
