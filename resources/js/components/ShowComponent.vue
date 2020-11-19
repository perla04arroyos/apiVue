<template>
    <div>
        <div v-if="Object.keys(names).length > 0" class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                        </tr>
                        <tr v-for="name in names" :key="name.id">
                            <td>{{name.id}}</td>
                            <td>{{name.name}}</td>
                            <td>{{name.lastname}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div v-if="Object.keys(names).length === 0" class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "show-component",
    data(){
        return {
            names : Object
        }
    },
    methods : {
        apiGetNames(){
            axios
                .get('api/names')
                .then(response => {
                    this.names = response.data;
                })
                .catch(error => (console.log(error)));
        }
    },
    mounted(){
       this.apiGetNames();
    },
}
</script>