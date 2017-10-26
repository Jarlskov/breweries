<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Brewery suggestor</div>

                    <div class="panel-body">
                        <form action="" method="post" @submit.prevent="doSearch">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" placeholder="name" class="form-control" ref="brewery-name">
                            </div>
                            <input type="submit" class="form-control">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        mounted() {
        },

        methods: {
            doSearch() {
                var ref = this.$refs['brewery-name'];
                axios.get('/brewery', {
                    params: {
                        name: this.$refs['brewery-name'].value,
                    }
                })
                .then(({ data }) => {
                    console.log(data);
                });
            }
        }
    }
</script>
