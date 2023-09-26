<script>

   new pipModals("{{ config('app.url') }}:8000");
   var listOfQitems = [];
   const itemFormat = `
   <div class="question-item" id="[[id]]">
      [[name]]
        <a href="#" class="text-danger pull-right">
            <i class="fa fa-ban"></i>
        </a>
    </div>
   `;
   var question_type_selection = $("#question_type_selection");
   var multiple_choice_question_container = $("#multiple_choice_question_container");
   var direct_question_container = $("#direct_question_container");
   var sub_question_container = $(".sub_question_container");
   var question_type_selector = [
       direct_question_container,
       multiple_choice_question_container
   ];

   var adding_question_form_submit = $("#adding_question_form_submit");

   var add_question_item_section = $("#add_question_item_section");

   var question_item_list_input = $("#question_item_list_input");
   var question_type_input_saver = $("#question_type_input_saver");
   var question_sub_type_input_saver = $("#question_sub_type_input_saver");

   question_type_selection.change( function(ev){
      var value = parseInt($(this).val());
      sub_question_container.hide();
      question_type_input_saver.val(value);
      question_type_selector[value].show();
      var subtypevalue = question_type_selector[value].find("select").val();
      question_sub_type_input_saver.val(subtypevalue);
      if(value){
        add_question_item_section.show();
        if(listOfQitems.length==0) {
            adding_question_form_submit.addClass("disabled");

        } else adding_question_form_submit.removeClass("disabled");
      }
      else {
        add_question_item_section.hide();
        adding_question_form_submit.removeClass("disabled");
      }
   });

   sub_question_container.find("select").change( function(ev){
      var the_value_of = $(this).val();
      question_sub_type_input_saver.val(the_value_of);
   });

   add_question_item_section.find("#add_new_question_item").click( function(ev){
     ev.preventDefault();
     var the_new_item = add_question_item_section.find("#add_new_question_item_val").val();
     if(!checkNameExitInListOfQ(the_new_item)){
        var new_item_id = makeid(20);
        adding_question_form_submit.removeClass("disabled");
        add_question_item_section.append(itemFormat.replace("[[name]]",the_new_item).replace("[[id]]",new_item_id));
        listOfQitems.push({
            "name":the_new_item,
            "id":new_item_id
        });
        itemClickEventAdd(new_item_id);
        question_item_list_input.val(composeAllQuestionItem());
        add_question_item_section.find("#add_new_question_item_val").val("");
     }
   });

   function checkNameExitInListOfQ(name){
      for(var i = 0; i < listOfQitems.length; i++){
         if(listOfQitems[i].name==name) return true;
      }
      return false;
   }

   function itemClickEventAdd(id){
    add_question_item_section.find(`#${id}`).find("a").off("click").click( function(ev){
        ev.preventDefault();
        $(this).parent().remove();
        removeItemFromTheList(id);
        question_item_list_input.val(composeAllQuestionItem());
    })
   }

   function removeItemFromTheList(id){
      var newlistOfQitems = [];
      for(var i = 0; i < listOfQitems.length; i++){
        if(!(listOfQitems[i].id==id)) {
            newlistOfQitems.push({
                "name":listOfQitems[i].name,
                "id":listOfQitems[i].id
            });
        }
      } 
      listOfQitems = newlistOfQitems;
   }

   function composeAllQuestionItem(){
     var rets = "";
     for(var i = 0; i < listOfQitems.length; i++){
        rets += "_"+listOfQitems[i].name;
     }
     return rets;
   }

   
</script>