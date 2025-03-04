<nav class="navbar  border-gray-400/10 border-b-1">
  <div class="flex-0">

    <a class="btn btn-ghost text-2xl rounded-4xl">
      {{ env("APP_NAME") }}
    </a>
  </div>

  <div class="flex-1 ml-5 justify-center items-center gap-2">
    <div class="sm:flex   hidden gap-3 ">
    {{ $slot }}
  </div>

</div>

<div class="flex-0">
    <div class="sm:hidden dropdown dropdown-end space-x-3">
        <div tabindex="0" role="button" class="btn  btn-soft btn-secondary m-1">Click</div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
          <li><a>{{ $slot }}</a></li>

        </ul>
      </div>
    <div class="sm:flex  btn-dash rounded-4xl btn hidden gap-3 ">
    Create
  </div>

</nav>






