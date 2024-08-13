<div class="md:h-64 md:w-56">
    <img
        src="{{ asset($imageUrl ?? "storage/no-pic-men.jpg") }}"
        class="md:w-full bg-gray-500 md:h-48"
    />
    <div
        class="flex w-full flex-col items-center justify-center bg-cyan-300 h-fit py-2 md:h-16 md:py-0"
    >
        <p class="text-xs font-medium md:text-base">
            {{ $name ?? "Nama Orang" }}
        </p>
        <p class="text-xs md:text-base">{{ $jabatan ?? "Nama Jabatan" }}</p>
    </div>
</div>
