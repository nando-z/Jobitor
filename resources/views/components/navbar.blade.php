<nav class="navbar border-gray-400/10 border-b-1 p-4">
    <div class="flex-0">
        <a class="btn btn-ghost text-2xl rounded-4xl">
            {{ env("APP_NAME") }}
        </a>
    </div>

    <div class="flex-1 ml-5 flex justify-center items-center gap-4">
        <div class="hidden sm:flex gap-3">
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
        <div class="hidden sm:flex gap-3">
            <button class="btn btn-primary rounded-4xl">Create</button>
        </div>
    </div>
</nav>
