<div class="flex gap-1 flex-col h-27 w-full justify-items-center rounded-xl bg-gray-300 px-4 py-2">
    <p class="text-lg font-medium">{{ $notice_title ?? "Nama Pengumuman" }}</p>
    <p class="text-sm">
        <i></i>
        - {{ $notice_date ?? "00/00/0000" }}
    </p>
    <p class="text-sm">
        <i></i>
        - {{ $notice_location ?? "lokasi kegiatan" }}
    </p>
</div>
