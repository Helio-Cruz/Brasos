<div id="formMembers_output"></div>
<form id="formMembers">
    <div class="uk-column-1-2@s uk-margin-small-bottom">
        <div class="contact-form__fields">
            <input class="uk-input" type="text" name="full_name" autocomplete="name" placeholder="Nome Completo *" required>
            <input class="uk-input" type="email" name="email" autocomplete="email" placeholder="Email *" required>
        </div>
    </div>

    <div class="uk-column-1-2@s uk-margin-small-bottom">
        <div class="contact-form__fields">
            <input class="uk-input" type="text" name="phone" autocomplete="tel" placeholder="Telefone">
        </div>
    </div>
    <div class="uk-margin">
        <span class=" uk-flex uk-flex-middle">Area de Atuação:</span>
        <ul class="uk-margin-small-left@s uk-subnav uk-subnav-pill uk-flex uk-flex-middle" uk-switcher="animation: uk-animation-fade">
            
            <li>
                <a href="#">Medica</a>
            </li>
            <li>
                <a href="#">Outros</a>
            </li>
        </ul>
        <ul class="uk-switcher">
            <li class="uk-column-1-2@s">
                <div class="contact-form__fields">
                    <input class="uk-input" type="text" name="especiality" autocomplete="name" placeholder="Especialidade *">
                    <input class="uk-input" type="text" name="crm" autocomplete="name" placeholder="CRM *">
                </div>
            </li>
            <li>
                <input class="uk-input" type="text" name="other_professions" autocomplete="name" placeholder="Profissão *">
            </li>
        </ul>
    </div>
    <textarea class="uk-textarea" placeholder="Mensagem" type="text" id="formMembersMessage" name="message"></textarea>
    <!-- <input type="hidden" name="members_form_submit" value="1"> -->
    <button type="submit" class="normal-button special-button" type="button">Enviar</button>
</form>