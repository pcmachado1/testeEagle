$(document).ready(function(){
    //mascaras
        $('#cnpj_cpf').mask('000.000.000-00');
        $('#birthdate').mask('00/00/0000');
        $('#phone').mask('00000000');
        $('#zip_code').mask('00000000');
    
    //
    
    $("#btnAdd").click(function(){
        var name = $("#name").val();
        var cnpj_cpf = $("#cnpj_cpf").val();
        var birthdate = $("#birthdate").val();
        var parts = birthdate.split("/");
        var newBirthDate = parts[2]+"-"+parts[1]+"-"+parts[0];
        var phone = $("#phone").val();
        var address = $("#address").val();
        var zip_code = $("#zip_code").val();
        var city = $("#city").val();
        var state = $("#state").val();
        $.post('../js/add.php',{name:name,cnpj_cpf:cnpj_cpf,birthdate:newBirthDate,phone:phone,address:address,zip_code:zip_code,city:city,state:state},function(data){
            console.log(data);
        });
    });
});