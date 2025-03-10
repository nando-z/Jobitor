@props(['job'])

<div class="card  bg-white/6 shadow-lg hover:shadow-xl rounded-2xl group transition-shadow duration-300 flex-1 min-w-[250px] max-w-[350px] sm:min-w-[300px] sm:max-w-[400px]">
    <div class="card-body">
        {{-- Employer Logo and Name  --}}
        <div class="flex items-center space-x-4">
            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" alt="{{ $job->employer->name }}" class="w-12 h-12 sm:w-16 sm:h-16 rounded-full">
            <div>
                <h3 class="text-lg sm:text-xl group-hover:text-indigo-600 duration-200 font-bold">{{ $job->employer->name }}</h3>
                <p class="text-sm sm:text-base  text-gray-400">{{ $job->title }}</p>
            </div>
        </div>

        {{-- Tags  --}}
        <div class="flex flex-wrap gap-2 mt-4">
            @foreach ($job->tags as $tag)
            <x-tags :tag="$tag" />
            @endforeach
        </div>

        {{-- Optional --}}
        <div class="mt-6">
            <a href="#" class="btn btn-primary rounded-3xl  duration-200 group-hover:bg-indigo-600 btn-sm sm:btn-md">View Job</a>
        </div>
    </div>
</div>
