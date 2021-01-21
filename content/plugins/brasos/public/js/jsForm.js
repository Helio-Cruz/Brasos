const script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.5.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);


const formMembers = document.querySelector('#formMembers');
formMembers.addEventListener('submit', (event) => {
  event.preventDefault();
  const displayMessage = $('#formMembers_output');
  const full_name = $('input[name="full_name"]').val();
  const email = $('input[name="email"]').val();
  const phone = $('input[name="phone"]').val();
  const especiality = $('input[name="especiality"]').val();
  const crm = $('input[name="crm"]').val();
  const other_professions = $('input[name="other_professions"]').val();
  const message = $('#formMembersMessage').val();
  const area = $('#formMembers .uk-active a').text();

  $.ajax({
    type: 'POST',
    url: ajax_formMembers.ajaxurl,
    data:
    {
      //data: $(formMembers).serialize(),
      full_name: full_name,
      email: email,
      phone: phone,
      especiality: especiality,
      crm: crm,
      other_professions: other_professions,
      message: message,
      area: area,
      nonce: ajax_formMembers.nonce,
      action: 'ajax_onFormSubmit',
    },
    success: function (data) {
     displayMessage.html(data);
    },
    error: function () {
      displayMessage.addClass('uk-text-danger uk-alert').html('Occoreu um erro, tente de novo mais tarde.');
    }
  });

});