<x-www-app>
    <main class="flex-shrink-0">
        <x-www-header>
            <x-www-brand>JinyPHP</x-www-brand>
        </x-www-header>

        {{$slot}}
    </main>


    <!-- Footer-->
    <x-www-footer>
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; Your Website 2023</div>
            </div>
            <div class="col-auto">
                <a class="link-light small" href="#!">Privacy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Terms</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Contact</a>
            </div>
        </div>
    </x-www-footer>
</x-www-app>
