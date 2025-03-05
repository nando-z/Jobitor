<footer class="mt-8  text-neutral-content p-6">
    <div class="container max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <!-- App Name -->
            <div class="text-2xl font-bold">
                {{env('APP_NAME')}}
            </div>

            <!-- Navigation Links -->
            <nav>
                <ul class="menu menu-horizontal gap-x-6">
                    <li><a class="hover:text-primary transition-colors">Career</a></li>
                    <li><a class="hover:text-primary transition-colors">Salaries</a></li>
                    <li><a class="hover:text-primary transition-colors">Companies</a></li>
                </ul>
            </nav>
        </div>

        <!-- Optional Copyright Text -->
        <div class="mt-6 text-center opacity-75 text-sm">
            © 2024 {{env('APP_NAME')}}. All rights reserved.
        </div>
    </div>
</footer>
