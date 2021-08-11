<template>
  <div>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="javascript:void(0)" class="brand-link">
                <img src='/img/AdminLTELogo.png' alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Penaindie</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <Link href="/admin/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </Link>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="nav-icon fas fa-box-open green"></i>
                                <p>
                                    Catalog
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <Link href="/admin/catalog/categories" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="ml-4">Categories</p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/admin/catalog/attributes" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="ml-4">Attributes</p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/admin/catalog/products" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="ml-4">Products</p>
                                    </Link>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="nav-icon fas fa-users-cog blue"></i>
                                <p>
                                    User Managment
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li  class="nav-item">
                                    <Link href="/admin/users/permissions" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="ml-4">Permissions</p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/admin/users/roles" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="ml-4">Roles</p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/admin/users" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="ml-4">Users</p>
                                    </Link>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" role="button">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    components: {
        Link
    },
}
</script>

<style>

</style>