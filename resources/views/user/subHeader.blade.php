<nav class="navbar navbar-expand-lg navbar-light bg-secondary p-0">
    <div class="container mx-auto">
        <div class="row">
            <div class="col mx-auto">
                <ul class="navbar-nav gap-5">
                    @foreach ($categories as $item)
                        <li class="nav-item"><a href="{{ route('category', $item->id) }}"
                                class="nav-link text-dark fw-bold"><i class="bi bi-phone"></i>
                                {{ $item->category_name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>