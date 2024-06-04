{if empty($trainers)}
  <div class="container-fluid">
    Brak dostępnych trenerów.
  </div>
{else}
<table class="table table-bordered table-striped verticle-middle table-responsive-sm">
  <thead>
    <tr>
      <th scope="col">nazwa użytkownika</th>
      <th scope="col">e-mail</th>
      <th scope="col">akcja</th>
    </tr>
  </thead>
  <tbody>
  {foreach $trainers as $t}
  {strip}
    <tr>
      <td>{$t['username']}</td>
      <td>{$t['email']}</td>
      <td>
        <span>
          <a href="{$conf->action_root}requestSend/{$t['idUser']}" data-toggle="tooltip" data-placement="top" title="{if isset($user['hasTrainer'])}Posiadasz już trenera!{elseif isset($user['requestSent']) && $user['requestSent']}Wysłałeś już prośbę o współpracę do któregoś z trenerów. Poczekaj na odpowiedź.{else}Wyślij prośbę o współpracę do {$t['username']}{/if}">
            <button {if isset($user['hasTrainer']) || (isset($user['requestSent']) && $user['requestSent'])}disabled="disabled"{/if} type="button" class="btn btn-info">
            Poproś o współpracę
            </button>
          </a>
        </span>
      </td>
    </tr>
  {/strip}
  {/foreach}  
  </tbody>
</table>
{/if}