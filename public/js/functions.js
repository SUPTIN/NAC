(function($) {

  RemoveTableRow = function(handler) {
    var tr = $(handler).closest('tr');

    tr.fadeOut(400, function(){ 
      tr.remove(); 
    }); 

    return false;
  };
  
  AddTableRow = function() {
      
      var newRow = $("<tr>");
      var cols = "";
      
      cols += '<td><div class="form-group"><input class="form-control" size="16" type="text" name="date" id="date" placeholder="dd/mm/yyyy"></div></td>';
      cols += '<td><input class="form-control" type="text" name="numercao"></td>';
      cols += '<td><input class="form-control" type="text" name="quantidade"></td>';
      cols += '<td><input class="form-control" type="text" name="autN"></td>';
      
      cols += '<td class="actions">';
      cols += '<button class="btn btn-large btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button>';
      cols += '</td>';
      
      newRow.append(cols);
      
      $("#products-table").append(newRow);
    
      return false;
  };
  
})(jQuery);