<div class="w-full p-6 bg-white/6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
    <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
        {{-- Image --}}
        <div class="flex-none">
            <div class="avatar">
                <div class="w-32 h-32 rounded-lg overflow-hidden"> <!-- Larger image container -->
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                         class="object-cover w-full h-full"
                         alt="Microsoft logo" />
                </div>
            </div>
        </div>

        {{-- Main Content --}}
        <div class="flex-1 space-y-3">
            <div class="space-y-1">
                <p class="text-sm font-medium text-gray-400">Microsoft</p>
                <h2 class="text-2xl font-bold text-white">Full Stack Developer</h2>
                <div class="flex items-center gap-2 text-sm">
                    <span class="text-gray-400">Full Time</span>
                    <span class="text-gray-500">•</span>
                    <span class="text-primary-400 font-medium">From $30.00</span>
                </div>
            </div>

            {{-- Tags --}}
            <div class="flex flex-wrap gap-2">
                <x-tags class="bg-gray-800 text-gray-300">Remote</x-tags>
                <x-tags class="bg-gray-800 text-gray-300">Senior Level</x-tags>
                <x-tags class="bg-blue-900/30 text-blue-400">New</x-tags>
            </div>
        </div>

        {{-- Time and Actions --}}
        <div class="w-full md:w-auto flex items-center justify-between gap-4">
            <span class="text-sm text-gray-400 whitespace-nowrap">Posted 22h ago</span>
            <button class="btn btn-primary px-6 py-2 rounded-lg font-semibold">
                Apply Now
            </button>
        </div>
    </div>
</div>
