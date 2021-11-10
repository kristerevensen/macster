<template>
    <form>
    <div class="modal-body">
        <div class="form-group">
            <input v-model="form.name" type="text" name="name" placeholder="Role Name" 
                class="form-control" :class="{'is-invalid': form.errors.has('name')}">
                <has-error :form="form" field="name"></has-error>
        </div>

    <b-form-group label="Assign Permissions">
        <b-form-checkbox
            v-for="option in permissions"
            v-model="form.permissions"
            :key="option.name"
            :value="option.name"
            name="flavour-3a"
            >
            {{ option.name }}
            </b-form-checkbox>    
    </b-form-group>        
    </div>
    <div class="modal-footer justify-content-between">
        <b-button type="submit" variant="primary" class="btn btn-lg btn-primary" v-if="!dis" disabled><b-spinner small type="primary"></b-spinner></b-button>
        <button type="submit" v-if="dis" @click.prevent="createRole()" class="btn btn-lg btn-primary"><i class="fas fa-save"></i></button>
    </div>
    </form>
</template>

<script>
export default {
    data() {
        return{
            dis: true,
            permissions: [],
            form: new Form({
                'name' : '',
                'permission' : []
            })
        }
    },
    methods: {
        getPermissions(){
            axios.get('/getAllPermissions')
            .then((response) => {
                this.permissions = response.data.permissions
            }).catch((error) => {
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                })
            });
        },
        createRole(){
            this.dis = false;
            //alert('you clicked me');
            this.form.post('postRole').then(()=>{
                 Swal.fire({
                icon: 'success',
                title: 'Role Created',
                text: 'Your Role has been created!',
                }).catch((error) => {
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    });
                });
            });
            //axios.post('postRole', FormData);
            this.dis = true;
        }
    },
    created() {
        this.getPermissions();
    }
}
</script>
