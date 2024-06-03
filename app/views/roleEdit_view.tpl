{extends file="form.tpl"}

{block name=content}
  {if $msgs->isError()}
  <div>
    {include file="messages.tpl"}
  </div>
  {/if}
  <div class="form-header row mx-0 mb-4">
    <div class="col-sm-6 p-md-0">
      <h4>Rola</h4>
    </div>
    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <a href="javascript:history.go(-1)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wstecz">
        <i class="fa fa-arrow-left"></i>
      </a>
    </div>
  </div>
  <form action="{$conf->action_root}roleSave" method="post">
    <div class="form-group">
      <label for="id_roleName"><strong>Nazwa roli</strong></label>
      <input id="id_roleName" name="roleName" type="text" class="form-control" value="{$form->roleName|default:''}" placeholder="roleName">
    </div>
    <input type="hidden" name="idRole" value="{$form->idRole}">
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Zapisz</button>
    </div>
  </form>
{/block}