$(function() {
  $('.submit').click(function(e) {
    
    e.preventDefault();

    let formdata = new FormData();
    formdata.append( 'name', $.trim($('.name').val()) );
    formdata.append( 'file', $('.file').prop('files')[0] );

    $.ajax({
      type: 'POST',
      url: 'form-submit.php',
      data: formdata,
      cache: false,
      contentType: false,
      processData: false,
      context: this,

      before: function() {},

      error: function(xhr) {
        console.log('Error Message: ' + xhr.status);
      },

      success: function(response) {
        console.log(response);
        $('.user_details')[0].reset();
      }
    });
  });
});