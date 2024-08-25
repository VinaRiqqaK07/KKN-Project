<x-layouts.app>
    <x-slot:slot>
        <main class="flex h-full w-full flex-col items-center gap-16 py-10">
            @if ($noticesList->isEmpty())
                <div class="flex h-48 items-center justify-center">
                    <p class="text-center text-lg">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        Belum Ada Pengumuman
                    </p>
                </div>
            @else
                @foreach ($noticesList as $notice)
                    <a href="{{ route("notices.show", $notice->id) }}">
                        <x-notice-card>
                            @if ($notice->imageUrl)
                                <x-slot:noticeImageUrl>
                                    {{ $notice->imageUrl }}
                                </x-slot>
                            @endif

                            <x-slot:noticeTitle>
                                {{ $notice->title }}
                            </x-slot>
                            <x-slot:noticePublisher>
                                {{ $notice->publisherName }}
                            </x-slot>
                            <x-slot:noticeLocation>
                                {{ $notice->notice_location }}
                            </x-slot>
                            <x-slot:noticeDate>
                                {{ $notice->notice_date }}
                            </x-slot>
                            <x-slot:noticeContent>
                                <div class="custom-content-desc-news">
                                    {!! $notice->limitedContent !!}
                                </div>
                            </x-slot>
                        </x-notice-card>
                    </a>
                @endforeach
            @endif
        </main>
    </x-slot>
</x-layouts.app>
