<template>
    <div>
    <h1>Users</h1>
    <table class="table class-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Email</th>
            <th>Block User</th>
        </tr>

        <tr v-for="u in users">
            <td>{{u.id}}</td>
            <td>{{u.name}}</td>
            <td>{{u.surname}}</td>
            <td>{{u.age}}</td>
            <td>{{u.email}}</td>
            <td>
                <input type="text">
                <button class="btn btn-danger" @click="blockuser(u.id)">Block</button>
            </td>
        </tr>
    </table>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                users:[]
            }
        },
        created:function(){
            // console.log(this.axios)
            this.axios.get("/api/admin/getUsers").then((r)=>{
                // console.log(r);
                this.users = r.data
            })
        },
        methods:{
            blockuser(id){
                console.log(id);
            }
        }

    }
</script>
