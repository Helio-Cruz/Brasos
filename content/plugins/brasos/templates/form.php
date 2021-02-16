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
    <div class="uk-margin formMembers">
        <span class=" uk-flex uk-flex-middle">Area de Atuação:</span>
        <ul>
            <li class="uk-column-1-2@s">
                <div class="contact-form__fields" uk-flex uk-flex-middle>
                    <input class="uk-input" type="text" name="especiality" autocomplete="name" placeholder="Especialidade *">
                    <input class="uk-input" type="text" name="crm" autocomplete="name" placeholder="CRM *">
                </div>
            </li>
        </ul>
    </div>
    <button type="submit" class="normal-button special-button" type="button">Enviar</button>
</form>