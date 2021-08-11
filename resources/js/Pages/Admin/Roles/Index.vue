<template>
    
    <Head title="Roles" />
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Roles</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Users</a></li>
                <li class="breadcrumb-item active">Roles</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    Roles Page
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
import AdminLayout from '../../../Layouts/Admin/App.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        
        Head,
    },
    // Using a render function
    layout: (h, page) => h(AdminLayout, () => child),

    // Using the shorthand
    layout: AdminLayout,
}
</script>
