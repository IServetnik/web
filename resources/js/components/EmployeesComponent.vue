<template>
    <table class="table mt-5" id="table">
        <thead>
            <tr>
                <th scope="col">Ім'я</th>
                <th scope="col">Приналежність</th>
                <th scope="col">Звання</th>
                <th scope="col">Розташування</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Важка вага</td>
                <td>90,72+</td>
                <td>200+</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        mounted() {
            this.getUsers();
        },

        methods: {
            getUsers() {
                // $.ajax({
                //     url: 'https://github.com/AxolotlAPI/data',
                //     dataType: "jsonp",
                //     cache: false,
                //     crossDomain: true,
                //
                //     success: function( response ) {
                //         console.log( response ); // server response
                //     },
                //     error: function(error){
                //         alert(123);
                //         console.log(error);
                //     }
                //
                // });

                $.ajax({
                    url: 'http://lab.vntu.org/webusers/api-server/lab7.php',
                    dataType: 'jsonp',
                    type: 'GET',
                    contentType: "application/json",
                    crossDomain: true,

                    success: function() { alert("Success"); },
                    error: function(error) {
                        alert('Failed!');
                        console.log(error);
                    },
                });
            }
        }
    }
</script>
