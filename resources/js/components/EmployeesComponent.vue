<template>
    <div>
        <div class="input-group mb-3">
            <select class="form-select" v-model="sortBy">
                <option value="" selected>Сортування</option>
                <option value="name">Ім'я</option>
                <option value="affiliation">Приналежність</option>
            </select>
            <button class="input-group-text" v-on:click="getUsers">Оновити</button>
        </div>


        <table class="table mt-5" id="table">
            <thead>
            <tr>
                <th scope="col">Ім'я</th>
                <th scope="col">Приналежність</th>
                <th scope="col">Звання</th>
                <th scope="col">Розташування</th>
            </tr>
            </thead>

            <tbody v-for="user in users">
            <tr>
                <th scope="row">{{ user.name }}</th>
                <td>{{ user.affiliation }}</td>
                <td>{{ user.rank }}</td>
                <td>{{ user.location }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: [],
                sortBy: '',
            }
        },

        mounted() {
            let searchParams = new URLSearchParams(window.location.search)
            this.sortBy = searchParams.get('sortBy') ?? '';

            this.getUsers();
        },

        methods: {
            getUsers() {
                var users = [];

                window.history.replaceState(null, null, "?sortBy="+this.sortBy);

                $.ajax({
                    url: 'api/employees?sortBy='+this.sortBy,
                    type: 'GET',
                    async: false,

                    success: function(data) {
                        users = data;
                    },
                });

                this.users = users;
            }
        }
    }
</script>
