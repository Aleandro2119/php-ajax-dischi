console.log('Vue OK', Vue);

Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        discs: [],
    },

    mounted() {
        axios.get('http://localhost/php-ajax-dischi/dischi/api/data.php').then(res => {
            this.database = res.data;
        }).catch(err => { console.error(err) });
    }
})