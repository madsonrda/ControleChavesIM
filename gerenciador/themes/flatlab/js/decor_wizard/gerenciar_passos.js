jQuery.fn.extend({
    exists: function() {
        return this.length > 0;
    }
});

function ifSelectNotEmpty(field, rules, i, options) {
    if ($(field).find("option").length > 0 &&
            $(field).find("option:selected").length == 0) {
        // this allows the use of i18 for the error msgs
        return "* Campo obrigatório";
    }
}


function concluir() {
    var valid = false;
    $.ajax({
        url: baseUrl + "/usuario/concluir",
        type: 'POST',
        async: false,
        data: $("#politica-form").serialize(),
        success: function(data) {

            window.location.href = baseUrl + '/proLogAtividade';
            valid = true;
            
        },
        error: function() {
			document.getElementById('erro').innerHTML = "Wizard não pôde ser concluído.";
            $('#erro_wizard').modal('show');

            valid = false;
        }
    });
    return valid;
}



function salvarEquipes() {
    var valid = false;
    $.ajax({
        url: baseUrl + "/proEquipe/createAjax",
        type: 'POST',
        async: false,
        data: $("#equipe-form").serialize(),
        success: function(data) {
            if(data == "Sucesso"){
                valid = true;
            }
            else{
				document.getElementById('erro').innerHTML = "É necessário cadastrar equipes.";
                $('#erro_wizard').modal('show');
                valid = false;
            }
            
        },
        error: function() {
			document.getElementById('erro').innerHTML = "Equipes não puderam ser salvos.";
            $('#erro_wizard').modal('show');

            valid = false;
        }
    });
    return valid;
}

function salvarColaboradores() {
    var valid = false;
    $.ajax({
        url: baseUrl + "/proPessoa/createAjax",
        type: 'POST',
        async: false,
        data: $("#pro-pessoa-form").serialize(),
        success: function(data) {
            
            if(data == "Sucesso"){
                valid = true;
            }
            else{
				document.getElementById('erro').innerHTML = "Colaboradores não puderam ser salvos, complete todos campos obrigatórios";
                $('#erro_wizard').modal('show');

                valid = false;
            }
            
            
        },
        error: function() {
			document.getElementById('erro').innerHTML = "Colaboradores não puderam ser salvos.";
            $('#erro_wizard').modal('show');

            valid = false;
        }
    });
    return valid;
}

function salvarPS() {
    var valid = false;
    $.ajax({
        url: baseUrl + "/proListaPrograma/createAjax",
        type: 'POST',
        async: false,
        data: $("#p-s-form").serialize(),
        success: function(data) {
            
            if(data == "Sucesso"){
                valid = true;
                
            }
            else{
                document.getElementById('erro').innerHTML = "É necessário cadastrar os programas ou sites permitidos!";
            $('#erro_wizard').modal('show');
                valid = false;

            }
            
        },
        error: function() {
			document.getElementById('erro').innerHTML = "Programas e Sites não puderam ser salvos.";
            $('#erro_wizard').modal('show');

            valid = false;
        }
    });
    return valid;
}

function salvarParametros() {
    var valid = false;
    $.ajax({
        url: baseUrl + "/parametros/createAjax",
        type: 'POST',
        async: false,
        data: $("#parametros-form").serialize(),
        success: function(data) {
            
            if(data == "Sucesso"){
                valid = true;
                
            }
            else{
                
                valid = false;
				document.getElementById('erro').innerHTML = "É necessário cadastrar os parâmetros!";
            	$('#erro_wizard').modal('show');

            }
            
        },
        error: function() {
			document.getElementById('erro').innerHTML = "Parâmetros não puderam ser salvos.";
            $('#erro_wizard').modal('show');

            valid = false;
        }
    });
    return valid;
}



function carregarEquipes() {
   
    $.ajax({
        url: baseUrl + "/proEquipe/carregarEquipesAjax",
        type: 'POST',
        async: false,
        data: $("#pro-pessoa-form").serialize(),
        success: function(data) {
            $("#accordion").html(data);
           
        },
        error: function() {
			document.getElementById('erro').innerHTML = "Erro ao carregar equipes. Verifique se você está logado.";
            $('#erro_wizard').modal('show');

        }
    });
}





