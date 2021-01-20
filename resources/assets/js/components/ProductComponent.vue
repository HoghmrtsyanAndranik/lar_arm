<template>
    <div>
    <h1>Products</h1>
    <table class="table class-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Count</th>
            <th>Description</th>
            <th>Accept</th>
            <th>Delete</th>
        </tr>

        <tr v-for="p in products">
            <td>{{p.id}}</td>
            <td>{{p.name}}</td>
            <td>{{p.price}}</td>
            <td>{{p.count}}</td>
            <td>{{p.description}}</td>
            <td>
                <button class="btn btn-success">Accept</button>
            </td>
            <td>
                <button class="btn btn-danger">Accept</button>
            </td>
        </tr>
    </table>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                products:[]
            }
        },
        created:function(){
            this.axios.get("/api/admin/getproducts").then((r)=>{
                this.products = r.data
                console.log(r.data)
            })
            // console.log(this.axios)
        }

    }
</script>
