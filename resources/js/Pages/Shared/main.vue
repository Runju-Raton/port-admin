<template>
<!-- navbar header -->
       <Header></Header>
        <div id="layoutSidenav">
            zfgag
            <!-- sidebar -->
            <Sidebar></Sidebar>
            <!-- main content -->
            <div id="layoutSidenav_content">
                <div id="app">
                    <router-view></router-view>
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