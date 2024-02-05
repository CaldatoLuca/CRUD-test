<header class="d-flex justify-content-between align-items-center bg-dark text-white p-4">
    <h1>DC Comics</h1>
    <nav class="d-flex align-items-center">
        <ul class="d-flex gap-3 list-group-horizontal mb-0">
            <li class="list-group-item"><a href="{{ route('comics.index') }}"
                    class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Comics
                    list</a></li>
            <li class="list-group-item"><a href="{{ route('comics.create') }}"
                    class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Create a
                    new comic</a></li>
        </ul>
    </nav>
</header>
