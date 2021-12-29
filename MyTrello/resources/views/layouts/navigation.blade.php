<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col">
                <!-- Logo -->
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo />
                    </a>
            </div>
            <div class="col-6 d-grid gap-2 d-md-flex m-lg-auto justify-content-md-center">
                <!-- Navigation Links -->
                <x-create-table/>
            </div>

            <!-- Settings Dropdown -->
            <div class="col-3 d-grid gap-2 d-md-flex m-lg-auto justify-content-md-end">
                <div class="dropdown">
                    <button class="btn btn-info fw-bold dropdown-toggle" type="button" id="menuLink"
                       data-bs-toggle="dropdown" aria-expanded="false"
                            style="box-shadow: 0 0 10px rgba(0,0,0,0.5);">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="menuLink">
                        <li><a class="dropdown-item" href="#">View</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr style="color: orange; height: 4px; margin-top: 0; opacity: 1;"/>
</nav>
