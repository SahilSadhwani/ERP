jQuery(document).ready(function() {
  $("#category_id").select2({
    placeholder: 'Select...',
  });
  $("#supplier_id").select2({
    placeholder: 'Select...',
    multiple: true, 
  });
    
});