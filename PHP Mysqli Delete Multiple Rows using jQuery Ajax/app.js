$(function () {
  fetch()

  //check uncheck all
  $('#checkAll').click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked)
  })

  $('#delete').click(function () {
    var ids = $('.check:checked')
      .map(function () {
        return $(this).val()
      })
      .toArray()

    //check if a checkbox is checked
    if (jQuery.isEmptyObject(ids)) {
      $('.alert').hide()
      $('.alert-danger').show()
      $('.message').html('Select row(s) to delete first')
    }
    //delete the checked rows
    else {
      $.ajax({
        type: 'POST',
        url: 'ajax.php?action=delete',
        data: { ids: ids },
        dataType: 'json',
        success: function (response) {
          $('.alert').hide()
          $('.alert-success').show()
          $('.message').html(response)
          fetch()
        },
      })
    }
  })
})

function fetch() {
  $.ajax({
    type: 'POST',
    url: 'ajax.php',
    dataType: 'json',
    success: function (response) {
      $('#tbody').html(response)
    },
  })
}
