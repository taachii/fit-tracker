{extends file="auth.tpl"}

{block name=form}
  {if $msgs->isError()}
  <div class="messages alert alert-danger">
        {include file="messages.tpl"}
  </div>
  {/if}
  <h4 class="text-center mb-4">Rejestracja</h4>
  <form action="{$conf->action_root}register" method="post">
    <div class="form-group">
      <label for="id_username"><strong>Nazwa użytkownika</strong></label>
      <input id="id_username" name="username" type="text" class="form-control" value="{$form->username|default:''}" placeholder="username">
    </div>
    <div class="form-group">
      <label for="id_email"><strong>Email</strong></label>
      <input id="id_email" name="email" type="text" inputmode="email" class="form-control" value="{$form->email|default:''}" placeholder="hello@example.com">
    </div>
    <div class="form-group">
      <label for="id_pass"><strong>Hasło</strong></label>
      <input id="id_pass" name="pass" type="password" class="form-control" placeholder="*******">
    </div>
    <div class="form-group">
      <label for="id_pass_confirm"><strong>Potwierdź hasło</strong></label>
      <input id="id_pass_confirm" name="pass_confirm" type="password" class="form-control" placeholder="*******">
    </div>
    <div class="form-group">
      <label><strong>Rodzaj konta</strong></label>
        <div class="radio">
          <label for="acc_type_radio_0">
            <input type="radio" name="acctype" value="0" id="acc_type_radio_0"> Zwykłe
          </label>
        </div>
        <div class="radio">
          <label for="acc_type_radio_1">
            <input type="radio" name="acctype" value="1" id="acc_type_radio_1"> Trenerskie
          </label>
        </div>
    </div>
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Stwórz konto</button>
    </div>
  </form>
  <div class="new-account mt-3">
    <p>Masz już konto? <a class="text-primary" href="{$conf->action_root}view_login">Zaloguj się</a></p>
  </div>
{/block}