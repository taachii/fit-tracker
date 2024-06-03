{extends file="main.tpl"}

{block name=content}
<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
    </div>
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Trenerzy</h4>  
        </div>
        <div class="col-lg-6">
          <form action="{$conf->action_url}view_trainerList">
            <div class="input-group mb-3">
              <input type="text" class="input-rounded form-control" placeholder="Szukany użytkownik" name="search_value">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Filtruj</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
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
        <br><br>
        <div class="conatiner-fluid text-center">
          <em>*Jeśli opcja wysłania prośby o współpracę do trenera stała się aktywna, a wcześniej nie była, to oznacza, że trener odrzucił twoją prośbę lub zakończyliście dotychczasową współpracę.*</em>
        </div>
      </div>
    </div>
  </div>
</div>
{/block}