// var oneVue = new Vue({
//
//     el: '#one-vue',
//     data: {
//         approveamount : ''
//         },
//
//     methods:{
//         gee:function () {
//             this.$http.get('https://jsonplaceholder.typicode.com/posts').then(function(data ) {
//                 this.posts = data.data;
//                 console.log(data.data);
//             })
//         }
//     }
// });
 var towVue = new Vue({

    el: '#tow-vue',
    data: {
        selected : '',
        checkedNames: [],
        id:[]
    },
    methods: {
        gee: function () {
            $.ajax({
                url :'http://localhost/sust/balancecontroller/getAccountsWherec',
                type:'post',
                cache:false,
                data :{id:this.checkedNames},
                dataType:'json',
                success:function (data) {
                  // console.log(data)
                    $.each(data,function(k,v){
                        alert(v[1]);
                    });
                }
            });



        }
    }


});



