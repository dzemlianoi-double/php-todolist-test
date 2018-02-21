$(document).ready(function(){
  $('.check').change(function(){
    var input = $(this).find('input[type=checkbox]');
    var value = input.val() == '0' ? '1' : '0';
    input.val(value);


  var request = $.ajax({
    url: "engines/task/setCompleted.php",
    method: "POST",
    data: { task_id: , is_completed: '11' },
    dataType: "html"
  });
})
