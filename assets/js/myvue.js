
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

 $(document).ready(function(){



 });



