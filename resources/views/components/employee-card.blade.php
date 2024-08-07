<div class="h-64 w-56">
    <img
            src="{{ asset($imageUrl ?? "storage/image_notfound.jpeg") }}"
            class="h-48 w-full"
        />
    <div
        class="flex h-16 w-full flex-col items-center justify-center bg-cyan-300"
    >
        <p class="font-medium">{{ $name ?? "Nama Orang" }}</p>
        <p>{{ $jabatan ?? "Nama Jabatan" }}</p>
    </div>
</div>
