<x-layout>

    <div class="hero  mt-20">
       <div class="hero-content text-center">
          <div class="max-w-md mx-auto"> <!-- Centering the content -->
             <h1 class="text-5xl font-bold">Let's Find You A Great Job</h1>

             <div class="flex justify-center mt-7"> <!-- Centering the input -->
                <label class="input flex items-center w-full"> <!-- Added w-full here -->
                   <svg class="h-[1em] opacity-50 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
                         <circle cx="11" cy="11" r="8"></circle>
                         <path d="m21 21-4.3-4.3"></path>
                      </g>
                   </svg>
                   <input type="search" required placeholder="Search" class="input-bordered w-full"/> <!-- Added w-full here -->
                </label>
             </div>

          </div>
       </div>
    </div>

    {{-- Card --}}

    <div class="w-full  mt-20">
        <div class="p-4">
            <p class="font-bold">Top Jobs</p>
                <div class="flex sm:items-center justify-center mt-7 md:flex-row flex-col gap-2">
                 <x-dark-card/>
                 <x-dark-card/>
                 <x-dark-card/>
                <x-dark-card/>
                 <x-dark-card/>
                 <x-dark-card/>


            </div>
        </div>
     </div>


     {{-- Tags --}}

     <div class="w-full  mt-7">
        <div class="p-4">
            <p class="font-bold">Tags</p>
                <div class="flex items-center mt-3 flex-wrap sm:flex-row gap-2">
                    <x-tags>
                        Hello
                    </x-tags>
                    <x-tags>
                        Test
                    </x-tags>
                    <x-tags>
                        Backend
                    </x-tags>

                    <x-tags>
                        Hello
                    </x-tags>
                    <x-tags>
                        Test
                    </x-tags>
                    <x-tags>
                        Backend
                    </x-tags>
                </div>
        </div>
    </div>

    {{-- Find Jobs --}}

    <div class="w-full 00 mt-7">
        <div class="p-4">
            <p class="font-bold">Find Jobs</p>
            <div class="flex w-full items-center mt-4 flex-wrap sm:flex-row gap-5">
            <x-job-card/>
            <x-job-card/>
            <x-job-card/>
        </div>
    </div>

 </x-layout>
