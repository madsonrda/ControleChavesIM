jQuery.fn.extend({
    exists: function(){
        return this.length>0;
    }
});
$(document).ready(function(){
    // Smart Wizard         
    $('#wizard').smartWizard({
            selected: passo_atual,  // Selected Step, 0 = first step   
            keyNavigation: false, // Enable/Disable key navigation(left and right keys are used if enabled)
            enableAllSteps: false,  // Enable/Disable all steps on first load
            transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
            contentURL:null, // specifying content url enables ajax content loading
            contentCache:true, // cache step contents, if false content is fetched always from ajax url
            cycleSteps: false, // cycle step navigation
            enableFinishButton: (passo_atual == 5), // makes finish button enabled always
            errorSteps:[],    // array of step numbers to highlighting as error steps
            labelNext:'Próximo passo', // label for Next button
            labelPrevious:'Passo anterior', // label for Previous button
            labelFinish:'Concluir',  // label for Finish button        
            // Events
            onLeaveStep: onLeave, // triggers when leaving a step
            onShowStep: onShow,  // triggers when showing a step
            onFinish: onFinishSteps  // triggers when Finish button is clicked
     });
     var indice =1;
     for(var i = 1 ; i < passo_atual+1; i++){
        var passo = $("#step"+i);
        passo.attr("isDone","1");
        passo.removeClass("disabled");
        passo.addClass("done");
        indice=i;
    }
    
        
    $(".buttonPrevious").addClass("button");
    

    function salvarForm(step_num){
        if (step_num ==1){
            return true;
        }
        else if(step_num == 2){
            
                var valid = salvarEquipes();
                if(!valid){
                    setError(2,true);
                } else {
                    setError(2,false);
                }
             
            }           
         else if(step_num == 3){
            
               valid = salvarColaboradores();
                if(!valid){
                    setError(3,true);
                }
                 else {
                    setError(3,false);
                }
            } 
         else if(step_num == 4){
            
            valid = salvarPS();
            if(!valid){
                    setError(4,true);
                }
            else {
                   setError(4,false);
                }
        }
        else if(step_num == 5){
            
            valid = salvarParametros();
            if(!valid){
                    setError(5,true);
                }
            else {
                   setError(5,false);
                }
        }
        else if(step_num == 6){

            valid = concluir();
            if(!valid){
                    setError(6,true);
                }
            else {
                   setError(6,false);
                }
        }
        return valid;
    }
   

    function onLeave(obj){
        var step_num= obj.attr('rel');
		
        var valid = salvarForm(step_num);
        return valid;
    }
    
    function onShow(obj){
        var step_num= obj.attr('rel');
        if(step_num == 3){
            carregarEquipes();
        } 
    }
    

    function onFinishSteps(){
        var step_num = $(".selected").attr('rel');
        var valid = salvarForm(step_num);
        
        if(!valid){
            alert('Não foi possível salvar o projeto. Verifique se há algum campo faltando.');
        } else {
            $('#status').val('1');
            $("#decor-controle-form").submit();
        }
    }

    function showWizardMessage(myMessage){
        //var myMessage = 'Hello this is my message';
        // You can call this line wherever to show message inside the wizard
        $('#wizard').smartWizard('showMessage',myMessage);
    }

    function setError(stepnumber,status){
        $('#wizard').smartWizard('setError',{stepnum:stepnumber,iserror:status});
    }
});
