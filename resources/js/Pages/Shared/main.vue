<template>
<!-- navbar header -->
       <Header></Header>
        <div id="layoutSidenav">
            zfgag
            <!-- sidebar -->
            <Sidebar></Sidebar>
            <!-- main content -->
            <div id="layoutSidenav_content">
                <div id="app" class="p-5">
                    <slot>
                        <!-- DYNAMIC -->
                    </slot>
                </div>
                <!-- footer -->
                <Footer></Footer>
            </div>
        </div>
        <footer></footer>
</template>

<script>

import Header from './component/header.vue';
import Sidebar from './component/sidebar.vue'; 
import Footer from './component/footer.vue';

export default {
//   components: { Header, Sidebar, Footer },
  components: { Header,Sidebar,Footer },

}
</script>

<style>
      .card{
        box-shadow: 10px 15px 5px gray;
    }
    .card-head h2{
        background-image: linear-gradient(#0B5ED7, #000);
    }
</style>