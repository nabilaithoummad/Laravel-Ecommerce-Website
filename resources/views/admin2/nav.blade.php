<nav id="nav" class="bg-primary">
    <div id="menu_btn" >
        <i class="bi bi-list" style="font-size: 26px;"></i>
    </div>
    <ul class="nav d-flex flex-column pt-4">
        <li id="dashboard" class="mb-2 sideli">
            <a href="{{route('redirect')}}">
                <i id="i1" class="bi bi-house-gear-fill"></i>
                <span id="sp1">Dashboard</span>
            </a>
        </li>
        <li id="categories" class="mb-2 sideli">
            <a href="{{route('category.index')}}">
                <i id="i2" class="bi bi-bookshelf"></i>
                <span id="sp2">categories</span>
            </a>
        </li>
        <li id="products" class="mb-2 sideli">
            <a href="{{route('product.index')}}">
                <i id="i3" class="bi bi-cart-dash"></i>
                <span id="sp3">products</span>
            </a>
        </li>
        <li id="clients" class="mb-2 sideli">
            <a href="#">
                <i id="i4" class="bi bi-people-fill"></i>
                <span id="sp4">clients</span>
            </a>
        </li>
        <li id="orders" class="mb-2 sideli">
            <a href="{{route('show_orders')}}" >
                <i id="i5" class="bi bi-truck"></i>
                <span id="sp5">orders</span>
            </a>
        </li>
    </ul>
</nav>
