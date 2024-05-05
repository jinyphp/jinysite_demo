{{-- 모바일 버튼 --}}
<button class="navbar-toggler" type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <x-www-menu></x-www-menu>
    <form class="d-flex gap-2">
        <button class="btn btn-outline-secondary" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Wish
            <span class="badge bg-secondary text-white ms-1 rounded-pill">0</span>
        </button>

        <button class="btn btn-outline-secondary" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge bg-secondary text-white ms-1 rounded-pill">0</span>
        </button>

        <button class="btn btn-info">
            Regist
        </button>

        <button class="btn btn-primary">
            Login
        </button>
    </form>
</div>
