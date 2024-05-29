{extends file="auth.tpl"}

{block name=form}
  {if $msgs->isError()}
  <div class="messages alert alert-danger">
        {include file="messages.tpl"}
  </div>
  {/if}
  <h4 class="text-center mb-4">Edycja Roli:</h4>
  <form action="{$conf->action_root}roleSave" method="post">
    <div class="form-group">
      <label for="id_roleName"><strong>Nazwa użytkownika</strong></label>
      <input id="id_roleName" name="roleName" type="text" class="form-control" value="{$form->roleName|default:''}" placeholder="roleName">
    </div>
    <input type="hidden" name="idRole" value="{$form->idRole}">
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Zapisz</button>
    </div>
  </form>
{/block}