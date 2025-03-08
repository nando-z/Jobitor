@props(['slot'=>''])
<nav class="navbar flex justify-between border-gray-400/10 border-b-1 p-4">
    <div class="flex-0">
        <a class="btn btn-ghost text-2xl rounded-4xl">
            {{ env("APP_NAME") }}
        </a>
    </div>

    <div class=" ml-5 flex justify-center items-center gap-4">
        <div class="hidden sm:flex space-x-7 font-bold">
            {{ $slot }}
        </div>
    </div>


    <div class="flex-0">
        <div class="dropdown dropdown-end sm:hidden">
            <button tabindex="0" class="btn btn-soft btn-secondary m-1">Menu</button>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-10 w-52 p-2 shadow-lg">
                <li><a>{{ $slot }}</a></li>
            </ul>
        </div>

    </div>
</nav>
