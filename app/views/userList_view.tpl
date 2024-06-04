{extends file="main.tpl"}

{block name=content}
<div class="container-fluid">
  <div class="row">
    {if $msgs->isError()}
    <div>
      {include file="messages.tpl"}
    </div>
    {/if}
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Użytkownicy</h4>  
        </div>
        <div class="col-lg-6">
          <form id="search-form" onsubmit="ajaxPostForm('search-form','{$conf->action_root}userListPart', 'table'); return false;">
            <div class="input-group mb-3">
              <input type="text" class="input-rounded form-control" placeholder="Szukany użytkownik" name="searchValue" value="{$form->searchValue}">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Filtruj</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
        <div id="table">
          {include file="userListTable.tpl"}
        </div>
      </div>
    </div>
  </div>
</div>
{/block}