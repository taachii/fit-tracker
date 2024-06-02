{extends file="form.tpl"}

{block name=content}
  {if $msgs->isError()}
  <div class="messages alert alert-danger">
        {include file="messages.tpl"}
  </div>
  {/if}
  <div class="row mx-0 mb-4">
    <div class="col-sm-6 p-md-0">
      <h4>Edycja użytkownika</h4>
    </div>
    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <a href="javascript:history.go(-1)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wstecz">
        <i class="fa fa-arrow-left"></i>
      </a>
    </div>
  </div>
  <form action="{$conf->action_root}userSave" method="post">
    <div class="form-group">
      <label for="id_username"><strong>Nazwa użytkownika</strong></label>
      <input id="id_username" name="username" type="text" class="form-control" value="{$form->username|default:''}" placeholder="username">
    </div>
    <div class="form-group">
      <label for="id_email"><strong>Email</strong></label>
      <input id="id_email" name="email" type="text" inputmode="email" class="form-control" value="{$form->email|default:''}" placeholder="hello@example.com">
    </div>
    <div class="form-group">
      <label for="id_role"><strong>Rola</strong></label>
      <select name="idRole" id="id_role" class="form-control">
        <option {if $form->idRole == 1}selected{/if} value="1">admin</option>
        <option {if $form->idRole == 2}selected{/if} value="2">trenujący</option>
        <option {if $form->idRole == 3}selected{/if} value="3">trener</option>
      </select>
    </div>
    <input type="hidden" name="idUser" value="{$form->idUser}">
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Zapisz</button>
    </div>
  </form>
{/block}