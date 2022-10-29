<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 260px;height:680px">
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{route('admin.dashboard')}}" class="nav-link text-white">
                <i class="bi bi-speedometer2 me-2 fs-5"></i>Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('categories.index')}}" class="nav-link text-white">
                <i class="bi bi-card-list me-2 fs-5"></i>Manage Category
            </a>
        </li>
        <li>
            <a href="{{route('products.index')}}" class="nav-link text-white">
                <i class="bi bi-grid me-2 fs-5"></i>Manage Products
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-table me-2 fs-5"></i>Orders
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-person-circle me-2 fs-5"></i>Customers
            </a>
        </li>
    </ul>
    <hr>
    <div>
        <form action={{ route('admin.logout') }} method="POST">
            @csrf
            <input type="submit" class="btn  btn-secondary w-100" value="Logout">
        </form>
    </div>
</div>
