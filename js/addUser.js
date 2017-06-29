$(document).ready(function(){
    $("#btnAdd").click(function(){
        var name = $("#name").val();
        var cnpj_cpf = $("#cnpj_cpf").val();
        var birthdate = $("#birthdate").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        var zip_code = $("#zip_code").val();
        var city = $("#city").val();
        var state = $("#state").val();
        $.post('../js/add.php',{name:name,cnpj_cpf:cnpj_cpf,birthdate:birthdate,phone:phone,address:address,zip_code:zip_code,city:city,state:state},function(data){
            console.log(data);
        });
    });
});