<template>
 <div class="card-box table-responsive">
         <table  class="table table-striped table-bordered">
        <thead class="thead" style="background-color:#24695c;">
            <tr>
                  <th v-for="column in columns" :key="column.name" @click="$emit('sort', column.name)"
          :class="sortKey === column.name ? (sortOrders[column.name] > 0 ? 'sorting_asc' : 'sorting_desc') : 'sorting'"
          :style="'width:' + column.width + '; cursor:pointer; color: white;'">
          {{ column.label }}
        </th>
            </tr>
        </thead>
        <slot></slot>
    </table>
 </div>
</template>
<style>
  
</style>
<script>
    export default {
        props: ['columns', 'sortKey', 'sortOrders']
    }
</script>
<style scoped>
.table {
  width: 100%;
  max-width: 100%;
  overflow-x: auto;
}
</style>

