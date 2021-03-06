<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}">
                    <x-application-logo/>
                </a>
            </div>
            <div class="col-6 d-grid gap-2 d-md-flex m-lg-auto justify-content-md-center">
                <!-- Navigation Links -->
                <x-create.create-table/>
            </div>

            <!-- Settings Dropdown -->
            <div class="col-3 d-grid gap-2 d-md-flex m-lg-auto justify-content-md-end">
                @if($avatar !=='No avatar')
                    <div title="{{ Auth::user()->name }}">
                        <img src="{{asset($avatar)}}" alt="Avatar" width="40px"
                             style="border-radius: 50%; box-shadow: 0 0 10px rgba(0,0,0,0.5);"/>
                    </div>
                @endif
                <div class="dropdown">
                    <button class="btn btn-info fw-bold dropdown-toggle" type="button" id="navbarDropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false"
                            style="box-shadow: 0 0 10px rgba(0,0,0,0.5);">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @if(!collect(App\Models\DataUser::all()->where('user_id', '==', auth()->id()))->isEmpty())
                            <li>
                                <a type="button" class="dropdown-item" data-bs-toggle="modal"
                                   data-bs-target="#viewModal">View User</a>
                            </li>
                        @endif
                        <li>
                            <a type="button" class="dropdown-item" data-bs-toggle="modal"
                               data-bs-target="#editUserModal">Edit User</a>
                        </li>
                        <li>
                            <a type="button" class="dropdown-item" data-bs-toggle="modal"
                               data-bs-target="#deleteUserModal">Delete User</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @if(!collect(App\Models\DataUser::all()->where('user_id', '==', auth()->id()))->isEmpty())
                            <li><a type="button" class="dropdown-item" data-bs-toggle="modal"
                                   data-bs-target="#editModal">Edit Data User</a>
                            </li>
                        @else
                            <li><a type="button" class="dropdown-item" data-bs-toggle="modal"
                                   data-bs-target="#createModal">Create Data User</a>
                            </li>
                        @endif
                        <li><a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete
                                Data User</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
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
    <hr style="color: orange; height: 4px; margin:0; opacity: 1;"/>
</nav>

<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: papayawhip;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">View Data User -
                    <span style="text-decoration: underline">{{Auth::user()->name}}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-6">
                        <strong>Login: </strong>
                        <span style="color: blueviolet; font-weight: bold;">{{Auth::user()->name}}</span>
                    </div>
                    <div class="col-6">
                        <strong>Email: </strong>
                        <span style="color: blueviolet; font-weight: bold;">{{Auth::user()->email}}</span>
                    </div>
                </div>
                <x-user-data-view/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: powderblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Edit User -
                    <span style="text-decoration: underline">{{Auth::user()->name}}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('password.postExpired') }}">
                    @csrf
                    <div class="mb-3">
                        <x-label for="email" :value="__('Email')"/>
                        <x-input id="email" readonly="readonly" type="email" name="email"
                                 :value="old('email', Auth::user()->email)" required autofocus/>
                    </div>
                    <div class="mb-3">
                        <x-label for="name" :value="__('Login')"/>
                        <x-input id="name" type="name" name="name" value="{{ Auth::user()->name}}" required/>
                        <small type="text" class="form-text text-muted">Enter the new Login</small>
                    </div>
                    <div class="mb-3">
                        <x-label for="current_password" :value="__('Current Password')"/>
                        <x-input id="current_password" type="password" name="current_password" required/>
                        <small type="text" class="form-text text-muted">Enter the Current Password</small>
                    </div>
                    <div class="mb-3">
                        <x-label for="password" :value="__('Password')"/>
                        <x-input id="password" type="password" name="password" required/>
                        <small type="text" class="form-text text-muted">Enter the new Password</small>
                    </div>
                    <div class="mb-3">
                        <x-label for="password_confirmation" :value="__('Confirm Password')"/>
                        <x-input id="password_confirmation" type="password"
                                 name="password_confirmation" required/>
                        <small type="text" class="form-text text-muted">Confirm the new Password</small>
                    </div>
                    <div class="mb-0 modal-footer">
                        <div class="d-flex justify-content-end">
                            <button type="button" style="margin-right: 5px;" class="btn btn-secondary fw-bold"
                                    data-bs-dismiss="modal">Close
                            </button>
                            <x-button>{{ __('Save') }}</x-button>
                        </div>
                    </div>
                </form>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: powderblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Edit Data User -
                    <span style="text-decoration: underline">{{Auth::user()->name}}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('data-users.update', auth()->id())}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <x-user-view/>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary fw-bold">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: powderblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Create Data User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('data-users.store', auth()->id())}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-user-view/>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary fw-bold">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: lightsteelblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Delete User -
                    <span style="text-decoration: underline">{{Auth::user()->name}}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('data-users.destroy', auth()->id())}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" name="met" value="user">
                    <div class="form-group mb-2">
                        <label for="title" class="form-label fw-bold">
                            Do you really want to delete your account:
                            <span
                                style="text-decoration: underline; color: red;">{{Auth::user()->name}}</span>?</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger fw-bold">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: lightsteelblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Delete Data User -
                    <span style="text-decoration: underline">{{Auth::user()->name}}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('data-users.destroy', auth()->id())}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" name="met" value="data-user">
                    <div class="form-group mb-2">
                        <label for="title" class="form-label fw-bold">
                            Do you really want to delete data your account:
                            <span
                                style="text-decoration: underline; color: red;">{{Auth::user()->name}}</span>?</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger fw-bold">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
