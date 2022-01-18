<template>
        <Main>
           <div class="card">
            <div class="card-head text-center text-white">
                <h2 class="p-3">Manage Home</h2>
            </div>
            <div class="card-body">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th class="text-uppercase">#sl</th>
                             <th class="text-uppercase">title</th>
                             <th class="text-uppercase">subtitle</th>
                             <th class="text-uppercase">image</th>
                             <th class="text-uppercase" colspan="2">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>1</td>
                             <td>It is a title</td>
                             <td>It's  a subtitle</td>
                             <td>Image</td>
                             <td>
                               <Link href="/edit/home"><i class="fas fa-edit"></i></Link> &nbsp;
                                <a><i class="fas fa-trash-alt"></i></a>
                             </td>
                         </tr>
                     </tbody>
                 </table>
            </div>
        </div>
        aaa
        </Main>
</template>

<script>
import Main from '../Shared/main';
import { Link } from '@inertiajs/inertia-vue3';

export default {
  components: { Main, Link },
    
}
</script>