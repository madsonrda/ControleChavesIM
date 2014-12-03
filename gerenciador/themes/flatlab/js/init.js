// Formata um número em reais

function float2string(valor){
    //accounting.formatMoney(number,[symbol = "$"],[precision = 2],[thousand = ","],[decimal = "."],[format = "%s%v"])
    return accounting.formatMoney(valor,'',2,'.',',',"%s%v");
}
// ========  verifica se existe algum CEP descrito =======//
function checkCEP(){
    if($('#Endereco_cep').val() == ''){
        alert('Favor preencher o campo CEP corretamente.');
    }
}
    
// ======= busca o logradouro, bairro, cidade e UF do site republicavirtual e joga nos campos respectivos
function getEndereco() {
    // Se o campo CEP não estiver vazio
    if($.trim($("#Endereco_cep").val()) != ""){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#Endereco_cep").val(), function(){
                    // o getScript dá um eval no script, então é só ler!
                    //Se o resultado for igual a 1
                    if(resultadoCEP["resultado"]==1 || resultadoCEP["resultado"]==2){
                            // troca o valor dos elementos
                            if(resultadoCEP["tipo_logradouro"]){
                                $("#Endereco_logradouro").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                            }
                            else{
                                $("#Endereco_logradouro").val(unescape(''));
                            } 
                            $("#Endereco_bairro").val(unescape(resultadoCEP["bairro"]));
                            $("#Endereco_cidade").val(unescape(resultadoCEP["cidade"]));
                            $("#Endereco_estado").val(unescape(getEstado(resultadoCEP["uf"])));
                            /*if(resultadoCEP["uf"]){
                                $("#pais").val("Brasil");
                            }
                            else{
                                $("#pais").val("");
                            } */
                    } else {
                        if($("#Endereco_cep").val() != "")
                            alert("Endereço não encontrado.");
                    }
            });
    }
}

$(document).ready(function() {
    $(".cep").keypress(function(evt) {
        var keycode = evt.charCode || evt.keyCode;
        if (keycode == 13) { //Enter key's keycode
            return false;
        }
    });
});
// ======== pega a UF e retorna o nome do estado respectivo
function getEstado(uf){
    switch (uf) {
        case 'AC':
            return 'Acre';
        case 'AL':
            return 'Alagoas';
        case 'AP':
            return 'Amapá';
        case 'AM':
            return 'Amazonas';
        case 'BA':
            return 'Bahia';
        case 'CE':
            return 'Ceará';
        case 'DF':
            return 'Distrito Federal ';
        case 'ES':
            return 'Espírito Santo';
        case 'GO':
            return 'Goiás';
        case 'MA':
            return 'Maranhão';
        case 'MT':
            return 'Mato Grosso';
        case 'MS':
            return 'Mato Grosso do Sul';
        case 'MG':
            return 'Minas Gerais';
        case 'PA':
            return 'Pará';
        case 'PB':
            return 'Paraíba';
        case 'PR':
            return 'Paraná';
        case 'PE':
            return 'Pernambuco';
        case 'PI':
            return 'Piauí';
        case 'RJ':
            return 'Rio de Janeiro';
        case 'RN':
            return 'Rio Grande do Norte';
        case 'RS':
            return 'Rio Grande do Sul';
        case 'RO':
            return 'Rondônia';
        case 'RR':
            return 'Roraima';
        case 'SC':
            return 'Santa Catarina';
        case 'SP':
            return 'São Paulo';
        case 'SE':
            return 'Sergipe';
        case 'TO':
            return 'Tocantins';
        default:
            return '';
    }
}

function boxy_view(){
    $('.view').unbind("click");
    $('.view').boxy({title:'Dados'});
}

$(function() {
        //===== loading =====//
        $("body").ajaxStart(function(){
            $(this).addClass("loading"); 
        });
        $("body").ajaxStop(function(){
            $(this).removeClass("loading"); 
        });

        //===== Light box - boxy =====//

        $('.view').boxy({title:'Dados'});
        $(document).keyup(function(event) {
            if((Boxy.isModalVisible()) && (boxy != undefined) && (event.keyCode==27)){
                boxy.hide();
            }
        });

	//===== Information boxes =====//

	$(".hideit").click(function() {
		$(this).fadeOut(400);
	});
        
	//===== Wizard =====//

	$('.wizard').smartWizard({
		selected: 0,  // Selected Step, 0 = first step   
		keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
		enableAllSteps: false,  // Enable/Disable all steps on first load
		transitionEffect: 'slideleft', // Effect on navigation, none/fade/slide/slideleft
		contentURL:null, // specifying content url enables ajax content loading
		contentCache:true, // cache step contents, if false content is fetched always from ajax url
		cycleSteps: false, // cycle step navigation
		enableFinishButton: false, // makes finish button enabled always
		errorSteps:[],    // array of step numbers to highlighting as error steps
		labelNext:'Next', // label for Next button
		labelPrevious:'Previous', // label for Previous button
		labelFinish:'Finish',  // label for Finish button        
	  // Events
		onLeaveStep: null, // triggers when leaving a step
		onShowStep: null,  // triggers when showing a step
		onFinish: null  // triggers when Finish button is clicked
	 });

	

	//===== Collapsible elements management =====//
	/*
	$('.active').collapsible({
		defaultOpen: 'current',
		cookieName: 'nav',
		speed: 300
	});
	
	$('.exp').collapsible({
		defaultOpen: 'current',
		cookieName: 'navAct',
		cssOpen: 'active',
		cssClose: 'inactive',
		speed: 300
	});

	$('.opened').collapsible({
		defaultOpen: 'opened,toggleOpened',
		cssOpen: 'inactive',
		cssClose: 'normal',
		speed: 200
	});

	$('.closed').collapsible({
		defaultOpen: '',
		cssOpen: 'inactive',
		cssClose: 'normal',
		speed: 200
	});
	*/
    
    //============= Chosen Select =====================//
    $(".chzn-select").chosen({no_results_text: "Não encontrado"}); 
    $(".chzn-select-deselect").chosen({allow_single_deselect:true});
    
    	
     
    //===== Form elements masks =====//
	
        //$(".telefone").mask("(99)9999-9999",{placeholder:" "});
        /*$('.telefone').mask("(99) 9999-9999?9").ready(function(event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if(phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");  
            }
        });*/
        $(".telefone").focusout(function(){
            var phone, element;
            element = $(this);
            element.unmask();
            phone = element.val().replace(/\D/g, '');
            if(phone.length > 10) {
                element.mask("(99)99999-999?9",{placeholder:" "});
            } else {
                element.mask("(99)9999-9999?9",{placeholder:" "});
            }
        }).trigger('focusout');

        $(".cpf").mask("999.999.999-99",{placeholder:" "}); 
        $(".cep").mask("99999-999",{placeholder:" "}); 
        $(".cnpj").mask("99.999.999/9999-99",{placeholder:" "}); 
        $(".data").mask("99/99/9999",{placeholder:" "}); 
        $(".hora").mask("99:99",{placeholder:" "});
        $(".previsto").mask("99:99:99",{placeholder:" "});
		$(".previstoHM").mask("99:99",{placeholder:" "});
        $(".pis").mask("999.999999.99-9",{placeholder:" "});
        $(".real").autoNumeric('init',{mDec: 5, aSep: '.', aDec: ',', aPad: 2, vMax: 9999999999999999999999999999999999999999999.99999});
        $(".dinheiro").autoNumeric('init',{mDec: 5, aSep: '.', aDec: ',', aPad: 2, vMax: 9999999999999999999999999999999999999999999.99999});
        $(".numInteiro").maskMoney({
            symbol:'',
            showSymbol:true,
            thousands:'',
            decimal:',',
            symbolStay: false,
            precision: 0
        });
        $(".valor").maskMoney({
            symbol:'R$ ',
            showSymbol:true,
            thousands:'.',
            decimal:',',
            symbolStay: false
        });
        $(".valorNeg").maskMoney({
            symbol:'R$ ',
            showSymbol:true,
            thousands:'.',
            decimal:',',
            symbolStay: false,
            allowNegative: true,
        });
        $(".percentagem").maskMoney({
            symbol:'',
            showSymbol:true,
            thousands:'.',
            decimal:',',
            symbolStay: false,
            allowNegative: true,
        });
    
    
    //===== Form validation engine =====//

	//$(".valid").validationEngine();
        
        $("form").submit(function(){
            $(".validate_select").each(function(){
               var id = $(this).attr("id");
               if (($(this).hasClass("validate[required]")) && ($(this).val()=="")) {
                   $("#"+id+"_chzn").validationEngine("showPrompt", "* Campo obrigatótio", "error", "", true);
               }else{
                   $("#"+id+"_chzn").validationEngine("hide");
               }
            });
        });
	
    //===== Datepickers =====//
/*        var data_atual = new Date();
        $(".date").datepicker({ 
            autoSize: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1940:'+(data_atual.getFullYear()+10),
            dateFormat: 'dd/mm/yy'
        });

        $(".date_mes_ano").datepicker({ 
            autoSize: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1940:'+(data_atual.getFullYear()+10),
            dateFormat: 'MM yy'
        });
        $(".date_dia_mes").datepicker({ 
            autoSize: true,
            changeMonth: true,
            changeYear: false,
            yearRange: '1940:'+(data_atual.getFullYear()+10),
            dateFormat: 'dd/mm'
        });*/
        //===== Tabs =====//
        
	$.fn.simpleTabs = function(){ 
	
		//Default Action
		$(this).find(".tab_content").hide(); //Hide all content
		$(this).find("ul.tabs li:first").addClass("activeTab").show(); //Activate first tab
		$(this).find(".tab_content:first").show(); //Show first tab content
	
		//On Click Event
		$("ul.tabs li").click(function() {
			$(this).parent().parent().find("ul.tabs li").removeClass("activeTab"); //Remove any "active" class
			$(this).addClass("activeTab"); //Add "active" class to selected tab
			$(this).parent().parent().find(".tab_content").hide(); //Hide all tab content
			var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
			$(activeTab).show(); //Fade in the active content
			return false;
		});
	
	};//end function

	$("div[class^='widget']").simpleTabs(); //Run function on any div with class name of "Simple Tabs"


	//===== Placeholder for all browsers =====//
	
	$("input").each(
		function(){
			if($(this).val()=="" && $(this).attr("placeholder")!=""){
			$(this).val($(this).attr("placeholder"));
			$(this).focus(function(){
				if($(this).val()==$(this).attr("placeholder")) $(this).val("");
			});
			$(this).blur(function(){
				if($(this).val()=="") $(this).val($(this).attr("placeholder"));
			});
		}
	});
    
//        dataTable
   /*    
	oTable = $('#table').dataTable({
        "bSort": true,
        "bAutoWidth": true,
        "bFilter": false,
        "bLengthChange": true,
        "bProcessing": true,
        "oLanguage": {
            "sLengthMenu": "_MENU_ linhas por página",
            "sSearch": "",
            "sZeroRecords": "Nenhum registro encontrado.",
            "sEmptyTable": "Sem dados.",
            "sInfo": "Total de _TOTAL_ registros para exibir (_START_ para _END_)",
            "sInfoEmpty": "Sem registros para exibir",
            "sInfoFiltered": " - filtro de _MAX_ registros",
            "sLoadingRecords": "Por favor aguarde - carregando...",
            "oPaginate": {
                "sFirst": "<<",
                "sLast": ">>",
                "sNext": ">",
                "sPrevious": "<"
            }
        },
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": '<""f>t<"F"lp>'
	});
        
        oTable = $('#table_scroll').dataTable({
        "sScrollX": "100%",
        "sScrollXInner": "250%",
        "bScrollCollapse":true,
        "bSort": true,
        "bAutoWidth": true,
        "bFilter": false,
        "bLengthChange": true,
        "bProcessing": true,
        "oLanguage": {
            "sLengthMenu": "_MENU_ linhas por página",
            "sSearch": "",
            "sZeroRecords": "Nenhum registro encontrado.",
            "sEmptyTable": "Sem dados.",
            "sInfo": "Total de _TOTAL_ registros para exibir (_START_ para _END_)",
            "sInfoEmpty": "Sem registros para exibir",
            "sInfoFiltered": " - filtro de _MAX_ registros",
            "sLoadingRecords": "Por favor aguarde - carregando...",
            "oPaginate": {
                "sFirst": "<<",
                "sLast": ">>",
                "sNext": ">",
                "sPrevious": "<"
            }
        },
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": '<""f>t<"F"lp>'
	});
     */   
//        jqTransform
        
//	$('form').jqTransform({imgPath:'../images/forms'});
        
});

function Conta(tipo){
   var vencimento = $('#Conta'+tipo+'_data_vencimento');
   var emissao = $("#Conta"+tipo+"_data_emissao");
   var bt = $("input[name='yt0']");
   
   vencimento.change(function(){
       var data = new Date();
       var array = vencimento.val().split("/");
       var dia = array[0];
       var mes = array[1];
       var ano = array[2];
       
       var string = "Paga";
       var year = data.getFullYear();
       var month = data.getMonth()+1;
       var day = data.getDate();
       var paga = false;
       
       string = (ano > year) ? "Pendente" : string;
       string = (ano == year && mes > month) ? "Pendente" : string;
       string = (ano == year && mes == month && (dia > day)) ? "Pendente" : string;
              
       if(string == "Paga"){paga = true; }else{paga = false; }
       
       var options = (paga) ? "<option value='Paga' selected='selected'>Paga</option>\n<option value='Pendente'>Pendente</option>" : "<option value='Paga'>Paga</option>\n<option value='Pendente' selected='selected'>Pendente</option>";
       var situacao = $("#Conta"+tipo+"_situacao");
       situacao.each(function(){
            $(this).html(options);
       });
       $("select.chzn-select").trigger("liszt:updated");
       
       array = emissao.val().split("/");
       var e_dia = array[0];
       var e_mes = array[1];
       var e_ano = array[2];
       var validar = false;
       
       if(ano > e_ano) validar = true;
       if(!validar && ano == e_ano && mes > e_mes)validar = true;
       if(!validar && (ano == e_ano && mes == e_mes && dia >= e_dia)) validar = true;
  
       if(!validar){
           var err = $("#err");
           err.remove();
           if(emissao.val() == ""){
                emissao.after("<div style='clear: both'></div><div class='form-group col-lg-12' id='err' style='padding:0; margin:0; min-height: 0 !important;height:40px'>* campo obrigatório.</div>");
                bt.attr("disabled","disabled");
           }else{
                emissao.after("<div style='clear: both'></div><div class='form-group col-lg-12' id='err' style='padding:0; margin:0; min-height: 0 !important;height:40px'>data de emissão maior que a data de vencimento.</div>");
                bt.attr("disabled","disabled");
           }
       }
       else
       {
           $("#err").remove();
           bt.removeAttr("disabled");
       }
       
       $(".date").datepicker({ 
            autoSize: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1940:2028',
            dateFormat: 'dd/mm/yy'
        });	
   });
   
    emissao.change(function(){
       if(vencimento.val()!=""){
           
            var array = vencimento.val().split("/");
            var dia = array[0];
            var mes = array[1];
            var ano = array[2];

            array = emissao.val().split("/");
            var e_dia = array[0];
            var e_mes = array[1];
            var e_ano = array[2];
            var validar = false;

            if(ano > e_ano) validar = true;
            if(!validar && ano == e_ano && mes > e_mes)validar = true;
            if(!validar && (ano == e_ano && mes == e_mes && dia >= e_dia)) validar = true;
       
            if(!validar){
                var err = $("#err");
                err.remove();
                emissao.after("<div style='clear: both'></div><div class='form-group col-lg-12' id='err' style='padding:0; margin:0; min-height: 0 !important;height:40px'>data de emissão maior que a data de vencimento.</div>");
                bt.attr("disabled","disabled");
            }
            else
            {
                $("#err").remove();
                bt.removeAttr("disabled");
            }
            
             $(".date").datepicker({ 
                    autoSize: true,
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '1940:2028',
                    dateFormat: 'dd/mm/yy'
            });	
       }
    });
}
