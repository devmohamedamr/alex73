<template>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="cat in category[0]">
                            <td scope="row">{{ cat.id }}</td>
                            <td scope="row">{{ cat.name }}</td>
                            <td scope="row"><button @click="categorydelete(cat.id)" class="btn btn-danger">delete</button></td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</template>


<script>
import axios from 'axios'

export default {
    name: "Category",
    mounted() {
        let token = localStorage.getItem("token");
        if (token === null) {
            this.$router.push("/login");
        }

        this.getcategory();

    },
    data() {
        return {
            category: []
        }
    },
    methods: {
        async getcategory() {
            let token = localStorage.getItem("token");
            let res = await axios.get("http://127.0.0.1:8000/api/category", { headers: { Authorization: `Bearer ${token}` } });
            this.category.push(res.data.data);
        },

        async categorydelete(id){
            let token = localStorage.getItem("token");
            let res = await axios.delete(`http://127.0.0.1:8000/api/category/${id}`, { headers: { Authorization: `Bearer ${token}` } });
            this.getcategory();
        }
    },
    updated() {
        console.log("update")   
    }
}
</script>

<style>

</style>