@php
    $default = \App\Language::where('is_default', 1)->first();
    $admin = Auth::guard('admin')->user();
    if (!empty($admin->role)) {
        $permissions = $admin->role->permissions;
        $permissions = json_decode($permissions, true);
    }

@endphp

<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    {{-- @if (!empty(Auth::guard('admin')->user()->image))
                        <img src="{{ asset('assets/admin/images/propics/' . Auth::guard('admin')->user()->image) }}"
                            alt="..." class="avatar-img rounded">
                    @else --}}
                    <img src="{{ asset('assets/admin/images/blank_user.jpg') }}" alt="..." class="avatar-img rounded">
                    {{-- @endif --}}
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::guard('admin')->user()->first_name }}
                            @if (empty(Auth::guard('admin')->user()->role))
                                <span class="user-level">Owner</span>
                            @else
                                <span class="user-level">{{ Auth::guard('admin')->user()->role->name }}</span>
                            @endif
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.editProfile') }}">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.changePass') }}">
                                    <span class="link-collapse">Change Password</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.logout') }}">
                                    <span class="link-collapse">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary mt-0">
                <div class="row mb-2">
                    <div class="col-12">
                        <form action="">
                            <div class="form-group py-0">
                                <input name="term" type="text" class="form-control sidebar-search" value=""
                                    placeholder="Search Menu Here...">
                            </div>
                        </form>
                    </div>
                </div>

                @if (empty($admin->role) || (!empty($permissions) && in_array('Dashboard', $permissions)))
                    {{-- Dashboard --}}
                    <li class="nav-item @if (request()->path() == 'admin/dashboard') active @endif">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="la flaticon-paint-palette"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                @endif


                @if (empty($admin->role) || (!empty($permissions) && in_array('Shop Management', $permissions)))
                    {{-- Product --}}
                    <li
                        class="nav-item
@if (request()->path() == 'admin/category') active
@elseif(request()->path() == 'admin/product') active
@elseif(request()->routeIs('admin.product.type')) active
@elseif(request()->is('admin/product/*/edit')) active
@elseif(request()->is('admin/category/*/edit')) active
@elseif(request()->path() == 'admin/product/all/orders') active
@elseif(request()->path() == 'admin/product/pending/orders') active
@elseif(request()->path() == 'admin/product/processing/orders') active
@elseif(request()->path() == 'admin/product/completed/orders') active
@elseif(request()->path() == 'admin/product/rejected/orders') active
@elseif(request()->routeIs('admin.product.create')) active
@elseif(request()->routeIs('admin.product.details')) active
@elseif(request()->path() == 'admin/coupon') active
@elseif(request()->routeIs('admin.coupon.edit')) active
@elseif(request()->path() == 'admin/shipping') active
@elseif(request()->routeIs('admin.shipping.edit')) active
@elseif(request()->routeIs('admin.product.tags')) active
@elseif(request()->path() == 'admin/product/orders/report') active @endif">
                        <a data-toggle="collapse" href="#category">
                            <i class="fas fa-store-alt"></i>
                            <p>Product Management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse
@if (request()->path() == 'admin/category') show
@elseif(request()->is('admin/category/*/edit')) show
@elseif(request()->routeIs('admin.product.type')) show
@elseif(request()->path() == 'admin/product') show
@elseif(request()->is('admin/product/*/edit')) show
@elseif(request()->path() == 'admin/product/all/orders') show
@elseif(request()->path() == 'admin/product/pending/orders') show
@elseif(request()->path() == 'admin/product/processing/orders') show
@elseif(request()->path() == 'admin/product/completed/orders') show
@elseif(request()->path() == 'admin/product/rejected/orders') show
@elseif(request()->routeIs('admin.product.create')) show
@elseif(request()->routeIs('admin.product.details')) show
@elseif(request()->path() == 'admin/coupon') show
@elseif(request()->routeIs('admin.coupon.edit')) show
@elseif(request()->path() == 'admin/shipping') show
@elseif(request()->routeIs('admin.shipping.edit')) show
@elseif(request()->routeIs('admin.product.tags')) show
@elseif(request()->path() == 'admin/product/orders/report') show @endif"
                            id="category">
                            <ul class="nav nav-collapse">

                                <li
                                        class="
    @if (request()->path() == 'admin/shipping') active
    @elseif(request()->routeIs('admin.shipping.edit')) active @endif">
                                        <a href="{{ route('admin.shipping.index') }}">
                                            <span class="sub-item">Shipping Charges</span>
                                        </a>
                                    </li>
                                <li
                                    class="
@if (request()->path() == 'admin/coupon') active
@elseif(request()->routeIs('admin.coupon.edit')) active @endif">
                                    <a href="{{ route('admin.coupon.index') }}">
                                        <span class="sub-item">Coupons</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a data-toggle="collapse" href="#productManagement"
                                        aria-expanded="{{ request()->path() == 'admin/category' || request()->is('admin/category/*/edit') || request()->routeIs('admin.product.type') || request()->routeIs('admin.product.create') || request()->routeIs('admin.product.index') || request()->routeIs('admin.product.edit') ? 'true' : 'false' }}">
                                        <span class="sub-item">Manage Products</span>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse
@if (request()->path() == 'admin/category') show
@elseif(request()->is('admin/category/*/edit')) show
@elseif(request()->routeIs('admin.product.type')) show
@elseif(request()->routeIs('admin.product.create')) show
@elseif(request()->routeIs('admin.product.index')) show
@elseif(request()->routeIs('admin.product.edit')) show @endif"
                                        id="productManagement" style="">
                                        <ul class="nav nav-collapse subnav">
                                            <li
                                                class="
    @if (request()->path() == 'admin/category') active
    @elseif(request()->is('admin/category/*/edit')) active @endif">
                                                <a href="{{ route('admin.category.index') }}">
                                                    <span class="sub-item">Category</span>
                                                </a>
                                            </li>
                                            <li
                                                class="
@if (request()->routeIs('admin.product.type')) active
@elseif(request()->routeIs('admin.product.create')) active @endif">
                                                <a href="{{ route('admin.product.create') }}">
                                                    <span class="sub-item">Add Product</span>
                                                </a>
                                            </li>
                                            <li
                                                class="
@if (request()->path() == 'admin/product') active
@elseif(request()->is('admin/product/*/edit')) active @endif">
                                                <a href="{{ route('admin.product.index') }}">
                                                    <span class="sub-item">Products</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                {{-- @if ($bex->catalog_mode == 0) --}}
                                <li class="submenu">
                                    <a data-toggle="collapse" href="#manageOrders"
                                        aria-expanded="{{ request()->routeIs('admin.all.product.orders') || request()->routeIs('admin.pending.product.orders') || request()->routeIs('admin.processing.product.orders') || request()->routeIs('admin.completed.product.orders') || request()->routeIs('admin.rejected.product.orders') || request()->routeIs('admin.product.details') || request()->path() == 'admin/product/orders/report' ? 'true' : 'false' }}">
                                        <span class="sub-item">Manage Orders</span>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse
@if (request()->routeIs('admin.all.product.orders')) show
@elseif(request()->routeIs('admin.pending.product.orders')) show
@elseif(request()->routeIs('admin.processing.product.orders')) show
@elseif(request()->routeIs('admin.completed.product.orders')) show
@elseif(request()->routeIs('admin.rejected.product.orders')) show
@elseif(request()->routeIs('admin.product.details')) show
@elseif(request()->path() == 'admin/product/orders/report') show @endif"
                                        id="manageOrders" style="">
                                        <ul class="nav nav-collapse subnav">
                                            <li class="@if (request()->path() == 'admin/product/all/orders') active @endif">
                                                <a href="{{ route('admin.all.product.orders') }}">
                                                    <span class="sub-item">All Orders</span>
                                                </a>
                                            </li>
                                            <li class="@if (request()->path() == 'admin/product/pending/orders') active @endif">
                                                <a href="{{ route('admin.pending.product.orders') }}">
                                                    <span class="sub-item">Pending Orders</span>
                                                </a>
                                            </li>
                                            <li class="@if (request()->path() == 'admin/product/processing/orders') active @endif">
                                                <a href="{{ route('admin.processing.product.orders') }}">
                                                    <span class="sub-item">Processing Orders</span>
                                                </a>
                                            </li>
                                            <li class="@if (request()->path() == 'admin/product/completed/orders') active @endif">
                                                <a href="{{ route('admin.completed.product.orders') }}">
                                                    <span class="sub-item">Completed Orders</span>
                                                </a>
                                            </li>
                                            <li class="@if (request()->path() == 'admin/product/rejected/orders') active @endif">
                                                <a href="{{ route('admin.rejected.product.orders') }}">
                                                    <span class="sub-item">Rejected Orders</span>
                                                </a>
                                            </li>
                                            <li class="@if (request()->path() == 'admin/product/orders/report') active @endif">
                                                <a href="{{ route('admin.orders.report') }}">
                                                    <span class="sub-item">Report</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                {{-- @endif --}}
                            </ul>
                        </div>
                    </li>
                @endif



                {{-- Events Manage --}}
                {{-- @if (empty($admin->role) || (!empty($permissions) && in_array('Events Management', $permissions)))
                    <li
                        class="nav-item
@if (request()->path() == 'admin/event/categories') active
@elseif(request()->path() == 'admin/events') active
@elseif(request()->path() == 'admin/events/payment-log') active
@elseif(request()->is('admin/event/*/edit')) active
@elseif(request()->path() == 'admin/events/report') active @endif">
                        <a data-toggle="collapse" href="#event_manage">
                            <i class="fas fa-calendar-alt"></i>
                            <p>Ticket Management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse
@if (request()->path() == 'admin/event/categories') show
@elseif(request()->path() == 'admin/events') show
@elseif(request()->path() == 'admin/events/payment-log') show
@elseif(request()->is('admin/event/*/edit')) show
@elseif(request()->path() == 'admin/events/report') show @endif"
                            id="event_manage">
                            <ul class="nav nav-collapse">
                                <li class="@if (request()->path() == 'admin/event/categories') active @endif">
                                    <a href="{{ route('admin.event.category.index') }}">
                                        <span class="sub-item">Category</span>
                                    </a>
                                </li>
                                <li
                                    class="
    @if (request()->path() == 'admin/events') active
    @elseif(request()->is('admin/event/*/edit')) active @endif">
                                    <a href="{{ route('admin.event.index') }}">
                                        <span class="sub-item">Event</span>
                                    </a>
                                </li>
                                <li class="@if (request()->path() == 'admin/events/payment-log') active @endif">
                                    <a href="{{ route('admin.event.payment.log') }}">
                                        <span class="sub-item">Bookings</span>
                                    </a>
                                </li>
                                <li class="@if (request()->path() == 'admin/events/report') active @endif">
                                    <a href="{{ route('admin.event.report') }}">
                                        <span class="sub-item">Report</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif --}}

                {{-- Users Management --}}
                @if (empty($admin->role) || (!empty($permissions) && in_array('Users Management', $permissions)))
                    <li
                        class="nav-item
@if (request()->routeIs('admin.register.user')) active
@elseif(request()->routeIs('register.user.view')) active
@elseif(request()->routeIs('register.user.changePass')) active @endif">
                        <a data-toggle="collapse" href="#usersManagement">
                            <i class="la flaticon-users"></i>
                            <p>Users Management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse
@if (request()->routeIs('admin.register.user')) show
@elseif(request()->routeIs('register.user.view')) show
@elseif(request()->routeIs('register.user.changePass')) show @endif"
                            id="usersManagement">
                            <ul class="nav nav-collapse">

                                {{-- Registered Users --}}
                                <li
                                    class="
    @if (request()->routeIs('admin.register.user')) active
    @elseif(request()->routeIs('register.user.view')) active
    @elseif(request()->routeIs('register.user.changePass')) active @endif">
                                    <a href="{{ route('admin.register.user') }}">
                                        <span class="sub-item">Registered Users</span>
                                    </a>
                                </li>
                            </ul>
                @endif

                @if (empty($admin->role) || (!empty($permissions) && in_array('Admins Management', $permissions)))
                    {{-- Admins Management --}}
                    <li
                        class="nav-item
@if (request()->path() == 'admin/roles') active
@elseif(request()->is('admin/role/*/permissions/manage')) active
@elseif(request()->path() == 'admin/users') active
@elseif(request()->is('admin/user/*/edit')) active @endif">
                        <a data-toggle="collapse" href="#adminsManagement">
                            <i class="fas fa-users-cog"></i>
                            <p>Admins Management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse
@if (request()->path() == 'admin/roles') show
@elseif(request()->is('admin/role/*/permissions/manage')) show
@elseif(request()->path() == 'admin/users') show
@elseif(request()->is('admin/user/*/edit')) show @endif"
                            id="adminsManagement">
                            <ul class="nav nav-collapse">
                                <li
                                    class="
    @if (request()->path() == 'admin/roles') active
    @elseif(request()->is('admin/role/*/permissions/manage')) active @endif">
                                    <a href="{{ route('admin.role.index') }}">
                                        <span class="sub-item">Role Management</span>
                                    </a>
                                </li>
                                <li
                                    class="
@if (request()->path() == 'admin/users') active
@elseif(request()->is('admin/user/*/edit')) active @endif">
                                    <a href="{{ route('admin.user.index') }}">
                                        <span class="sub-item">Admins</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif


                @if (empty($admin->role) || (!empty($permissions) && in_array('Events Management', $permissions)))
                    <li class="nav-item @if (request()->path() == 'admin/file-manager') active @endif">
                        <a href="{{ route('admin.file-manager') }}">
                            <i class="la flaticon-list"></i>
                            <span class="sub-item">File Manager</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
