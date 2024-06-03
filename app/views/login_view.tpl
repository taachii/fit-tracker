{extends file="form.tpl"}

{block name=content}
  {if $msgs->isError()}
  <div>
    {include file="messages.tpl"}
  </div>
  {/if}
  <h4 class="form-header text-center mb-4">Logowanie</h4>
  <form action="{$conf->action_root}login" method="post">
    <div class="form-group">
      <label for="id_email"><strong>Email</strong></label>
      <input id="id_email" name="email" type="text" inputmode="email" class="form-control" value="{$form->email|default:''}" placeholder="hello@example.com">
    </div>
    <div class="form-group">
      <label for="id_pas"><strong>Hasło</strong></label>
      <input id="id_pass" name="pass" type="password" class="form-control" placeholder="*******">
    </div>
    <div class="text-center mt-5">
      <button type="submit" class="btn btn-primary btn-block">Zaloguj</button>
    </div>
  </form>
  <div class="new-account mt-3">
    <p>Nie masz konta? <a class="text-primary" href="{$conf->action_root}view_register">Zarejestruj się</a></p>
  </div>
{/block}