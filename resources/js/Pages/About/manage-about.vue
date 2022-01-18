<template>
    <Main>
        <div class="card">
            <div class="card-head text-center text-white">
                <h2 class="p-3">Manage About</h2>
            </div>
            <div class="card-body">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th class="text-uppercase">#sl</th>
                             <th class="text-uppercase">title</th>
                             <th class="text-uppercase">name</th>
                             <th class="text-uppercase">email</th>
                             <th class="text-uppercase">phone</th>
                             <th class="text-uppercase">degree</th>
                             <th class="text-uppercase">Action</th>
                         </tr>
                     </thead>
                 </table>
            </div>
        </div>
    </Main>
</template>

<script>
import Main from '../Shared/main'
export default {
  components: { Main },
    
}
</script>

<style>
</style>