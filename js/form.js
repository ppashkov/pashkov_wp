$(document).ready(function(){
  $(function filecheck() {
    $('input[type=file]').change(function () {
      var val = $(this).val().toLowerCase(),
        regex = new RegExp("(.*?)\.(jpg|jpeg|pdf|png)$");
      if (!(regex.test(val))) {
        $(this).val('');
        $('#msg').html("Неверный файл");
      }
    });
  });
  
var files;
$('input[type=file]').on('change', function(){
	files = this.files;
});
function isValidEmailAddress(email) {
  var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  return pattern.test(email);
}

$('#cvform').on('submit', function(e){
  e.preventDefault();
  var $that = $(this); 
  var email = $('#email').val();
  var message = $('#message').val();
  var $file = $('#file')
  
  var data = new FormData();
  data.append( 'screen', $file[0].files[0] );
  data.append( 'message', message );
  data.append( 'email', email );

  var isValidEmail = false;
  var isValidMessage = false;
  var isValidFile = false;
  if( !isValidEmailAddress( email ) ){
    $('#msg').html("Неверный E-mail");
    $("#email").addClass("formerr");
   isValidEmail = false;
  } else{
    $('#msg').html("");
    $("#email").removeClass("formerr");
    isValidEmail = true;
  }

  if( message.length < 10 ){
    $('#msg').html("Не меньше 10 символов");
    $("#message").addClass("formerr");
    isValidMessage = false;
  } else{
    $('#msg').html("");
    $("#message").removeClass("formerr");
    isValidMessage = true;
  }
  if($("#file").val()){
    isValidFile = true;
  } else{
    $('#msg').html("Файл не выбран");
    isValidFile = false;
  }

  if( isValidEmail == true && isValidMessage == true && isValidFile == true ){
    var filename = $("#file").val().replace(/C:\\fakepath\\/i, '');
    fData = $that.serialize(); 
    $.ajax({
      url: $that.attr('action'), 
      type: $that.attr('method'),
      // data: $that.serialize(),
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(json){
        if(json){
          $that.replaceWith(json); 
        }
      }
  }); 
  
  }
  if (!isValidEmail && !isValidMessage && !isValidFile){
    return false;
  } 
  
  var filename = $("#file").val().replace(/C:\\fakepath\\/i, '');

});
});