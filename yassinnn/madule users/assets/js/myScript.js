$(document).ready(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });
    var check_approve =  $('#t_approve').text();
    if(check_approve == 2 ){
        $('#one').removeClass('current');
        $('#two').addClass('current');

    }

    $('select').select2({
        dir: "rtl"
    });

    $('#item').change(function () {
        var id = "";
        var name  = "";
        var year = "";
        var collage = "";
        var approveamount = "";



        $("#item option:selected").each(function () {
            id += $(this).val();
            name += $(this).text();
            year += $('#year_no').val();
            collage += $('#collage').val();


            $('#show_table_items').show();
            console.log(id);

            $('#item_id').text(id);
            $('#item_name').text(name);

            $('#save-item').click(function () {
                approveamount += oneVue.approveamount ;
                var items = [year,collage,id,approveamount];
                $.ajax({
                    url: "http://localhost/sust/balancecontroller/setitems",
                    method: "POST",
                    data: { item :items },
                    dataType: "html"
                })

                .done(function( msg ) {
                    console.log(msg);
                });
                $('#show_table_items').hide();
                window.location = "http://localhost/sust/balancecontroller/";

            });



        });
    });







});









