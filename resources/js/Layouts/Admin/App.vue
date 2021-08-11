<template>
    <div>
        <div class="wrapper"> 
            <!-- Navbar -->
            
            <Navbar />

            <Sidebar />

            <!-- Page Heading -->
            <!-- <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header> -->

            <!-- Page Content -->
            <div class="content-wrapper">
                <slot />
           </div>
        </div>
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 <a href="javascript:void(0)">penaindie.id</a>.</strong> All rights
            reserved.
        </footer>

    </div>
</template>

<script>

import Navbar from '../Admin/Navbar.vue'
import Sidebar from '../Admin/Sidebar.vue'
export default {
    components: {
        Navbar,
        Sidebar
    },

    props: {
      user: Object,
    },

}
</script>
