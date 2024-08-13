<div
    class="h-27 flex flex-wrap w-full flex-col justify-items-center gap-1 rounded-xl border border-slate-500 px-4 pb-4 pt-4 mb-2"
>
    <p class="text-lg font-medium">{{ $noticeTitle ?? "Nama Pengumuman" }}</p>
    <p class="text-sm">
        <i class="fa-regular fa-calendar-days"></i>
        - {{ $noticeDate ?? "00/00/0000" }}
    </p>
    <p class="text-sm">
        <i class="fa-solid fa-location-dot"></i>
        - {{ $noticeLocation ?? "lokasi kegiatan" }}
    </p>
</div>
