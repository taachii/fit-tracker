{extends file="form.tpl"}

{block name=content}
  {if $msgs->isError()}
  <div class="messages alert alert-danger">
        {include file="messages.tpl"}
  </div>
  {/if}
  <div class="row mx-0 mb-4">
  <div class="col-sm-6 p-md-0">
    <h4>Notatka treningowa</h4>
  </div>
  <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <a href="javascript:history.go(-1)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wstecz">
      <i class="fa fa-arrow-left"></i>
    </a>
  </div>
</div>
  <form action="{$conf->action_root}noteSave" method="post">
    <div class="form-group">
      <label for="id_noteTitle"><strong>Tytuł notatki</strong></label>
      <input id="id_noteTitle" name="noteTitle" type="text" class="form-control" value="{$form->noteTitle|default:''}" placeholder="Tytuł twojej notatki">
    </div>
    <input type="hidden" name="idTrainingNote" value="{$form->idTrainingNote}">
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Dalej</button>
    </div>
  </form>
{/block}