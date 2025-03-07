@props(['title'=>''])
<div class="w-full mt-20">
    <div class="p-4">
        <p class="font-bold text-2xl mb-7">{{ $title }}</p>
        <div class="flex flex-wrap justify-start gap-6">
            {{ $slot }}
        </div>
    </div>
</div>
