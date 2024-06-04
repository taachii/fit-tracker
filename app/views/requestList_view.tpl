{extends file="main.tpl"}

{block name=content}
<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Prośby o współpracę</h4>  
        </div>
      </div>
      <div class="card-body">
        {if $msgs->isError()}
        <div>
          {include file="messages.tpl"}
        </div>
        {/if}
        {if empty($requests)}
          <div class="container-fluid">
            Nie masz żadnych próśb o współpracę.
          </div>
        {else}
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">nazwa użytkownika</th>
              <th scope="col">e-mail</th>
              <th scope="col">wysłano</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          {foreach $requests as $r}
          {strip}
            <tr>
              <td>{$r['username']}</td>
              <td>{$r['email']}</td>
              <td>{$r['sendDate']}</td>
              <td>
                <a href="{$conf->action_root}requestAccept/{$r['idRequest']}/{$r['idUser']}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Akceptuj">
                  <i class="fa fa-check"></i>
                </a>
                <a href="{$conf->action_root}requestDeny/{$r['idRequest']}/{$r['idUser']}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Odrzuć">
                  <i class="fa fa-close"></i>
                </a>
              </td>
            </tr>
          {/strip}
          {/foreach}  
          </tbody>
        </table>
        {/if}
      </div>
    </div>
  </div>
</div>
{/block}