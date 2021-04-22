jQuery(document).ready(function ($) {


  let formMembers = document.getElementById('formMembers');
  if (formMembers) {
    formMembers.addEventListener('submit', (event) => {
      event.preventDefault();
      const displayMessage = $('#formMembers_output');
      const full_name = $('input[name="full_name"]').val();
      const email = $('input[name="email"]').val();
      const phone = $('input[name="phone"]').val();
      const especiality = $('input[name="especiality"]').val();
      const crm = $('input[name="crm"]').val();
      const area = $('#formMembers .uk-active a').text();
      displayMessage.show();

      function clearForm() {
        $('input[name="full_name"]').val();
        $('input[name="email"]').val();
        $('input[name="phone"]').val();
        $('input[name="especiality"]').val();
        $('input[name="crm"]').val();
        $('#formMembers_output').hide();
      }


      $.ajax({
        type: 'POST',
        url: ajax_formMembers.ajaxurl,
        data:
        {
          full_name: full_name,
          email: email,
          phone: phone,
          especiality: especiality,
          crm: crm,
          area: area,
          nonce: ajax_formMembers.nonce,
          action: 'ajax_onFormSubmit'
        },
        success: function (data) {
          displayMessage.html(data);
          setTimeout(clearForm, 3000);
        },
        error: function () {
          displayMessage.addClass('uk-text-danger').html('Occoreu um erro, tente de novo mais tarde.');
        }
      });

    });
  }


});
