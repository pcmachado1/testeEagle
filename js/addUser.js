$(document).ready(function(){
    //mascaras
        $('#cnpj_cpf').mask('000.000.000-00');
        $('#birthdate').mask('00/00/0000');
        $('#phone').mask('00000000');
        $('#zip_code').mask('000000000');
    
    //
    
    $("input:text").change(function(){
        var name = $("#name").val();
        var cnpj_cpf = $("#cnpj_cpf").val();
        var birthdate = $("#birthdate").val();
        //var parts = birthdate.split("/");
        //var newBirthDate = parts[2]+"-"+parts[1]+"-"+parts[0];
        var phone = $("#phone").val();
        var address = $("#address").val();
        var zip_code = $("#zip_code").val();
        var city = $("#city").val();
        var state = $("#state").val();
        
        if(name == ""){
           $("#errorName").html("Favor Preencher o Campo"); 
           console.log("Favor Preencher o Campo");
           event.preventDefault();
        }else{
           $("#errorName").html(""); 
           console.log("Campo limpo");
        }
        if(cnpj_cpf == ""){
            $("#errorCpf").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }else{
            $("#errorCpf").html(""); 
            event.preventDefault();
        }
        if(birthdate == ""){
            $("#errorDate").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }else{
            $("#errorDate").html(""); 
            event.preventDefault();
        }
        if(phone == ""){
            $("#errorPhone").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }else{
            $("#errorPhone").html("");
            event.preventDefault();
        }
        if(address == ""){
            $("#errorAddress").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }else{
            $("#errorAddress").html("");
            event.preventDefault();
        }
        if(zip_code == ""){
            $("#errorZip").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }else{
            $("#errorZip").html("");
            event.preventDefault();
        }
        if(city == ""){
            $("#errorCity").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }else{
            $("#errorCity").html(""); 
            event.preventDefault();
        }
        if(state == ""){
            $("#errorState").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }else{
            $("#errorState").html("");
            event.preventDefault();
        }
    });
    
    $("#btnAdd").click(function(){
        var name = $("#name").val();
        var cnpj_cpf = $("#cnpj_cpf").val();
        var birthdate = $("#birthdate").val();
        //var parts = birthdate.split("/");
        //var newBirthDate = parts[2]+"-"+parts[1]+"-"+parts[0];
        var phone = $("#phone").val();
        var address = $("#address").val();
        var zip_code = $("#zip_code").val();
        var city = $("#city").val();
        var state = $("#state").val();
        
        if(name == ""){
           $("#errorName").html("Favor Preencher o Campo"); 
           console.log("Favor Preencher o Campo");
           event.preventDefault();
        }
        if(cnpj_cpf == ""){
            $("#errorCpf").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }
        if(birthdate == ""){
            $("#errorDate").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }
        if(phone == ""){
            $("#errorPhone").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }
        if(address == ""){
            $("#errorAddress").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }
        if(zip_code == ""){
            $("#errorZip").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }
        if(city == ""){
            $("#errorCity").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }
        if(state == ""){
            $("#errorState").html("Favor Preencher o Campo"); 
            console.log("Favor Preencher o Campo");
            event.preventDefault();
        }else{
                                       /* $.post('../js/add.php',{name:name,cnpj_cpf:cnpj_cpf,birthdate:newBirthDate,phone:phone,address:address,zip_code:zip_code,city:city,state:state},function(data){
                                            console.log(data);
                                        });*/
                                    }                      
        
        
        
        
        
        
        
        
        
    });
});