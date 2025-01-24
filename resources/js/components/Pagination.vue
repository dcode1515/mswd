<style lang="scss">
.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.page-stats {
  margin-right: 10px;
}

.pagination a {
  display: inline-block;
  padding: 8px 12px;
  text-decoration: none;
  border: 1px solid #ccc;
  color: #333;
  background-color: #fff;
}

.pagination a:hover {
  background-color: #e6e6e6;
}

.pagination .disabled {
  color: #aaa;
  pointer-events: none;
}

.pagination i {
  color: #3273dc;
  margin: 0 5px;
}
</style>

<template>
    
    <nav class="pagination" v-if="!client">
        <span class="page-stats">{{pagination.from}} - {{pagination.to}} of {{pagination.total}}</span>
        <a v-if="pagination.prevPageUrl" class="btn btn-default pagination-previous" @click="$emit('prev');">
            Prev
        </a>
        <a class="btn btn-default pagination-previous" v-else :disabled="true">
           Prev
        </a>&nbsp;

        <a v-if="pagination.nextPageUrl" class="btn btn-default pagination-next" @click="$emit('next');">
            Next
        </a>
        <a class="btn btn-sm btn-default pagination-next" v-else :disabled="true">
            Next
        </a>
    </nav>
    
</template>
<script>
    export default {
        props: ['pagination', 'client', 'filtered']
    }
</script>
