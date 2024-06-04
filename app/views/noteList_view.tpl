{extends file="main.tpl"}

{block name=content}
 <div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Witaj, {$user['username']}!</h4>
        <span class="ml-1">Dodaj, usuń lub edytuj swoje notatki treningowe!</span>
      </div>
    </div>
    {if $msgs->isError()}
    <div>
      {include file="messages.tpl"}
    </div>
    {/if}
    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <a href="{$conf->action_root}noteAdd">
        <button type="button" class="btn-lg btn-info">
          Nowa notatka
          <span class="btn-icon-right">
            <i class="fa fa-plus color-info"></i>
          </span>
        </button>
      </a>
    </div>
  </div>
  <div class="row">
    {if !empty($notes)}
    {foreach $notes as $n}
    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 ">
      <div class="trainingNote card">
        <div class="card-header">
          <div class="col-sm-6 p-md-0">
            <h5 class="card-title">{$n['noteTitle']}</h5>
          </div>
          <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <div>
              <a href="{$conf->action_root}view_noteEdit/{$n['idTrainingNote']}" class="btn btn-outline-info">Edytuj
              </a>
              <button onclick="confirmLink('{$conf->action_root}noteDelete/{$n['idTrainingNote']}', 'Czy na pewno chcesz usunąć notatkę?')" class="btn btn-outline-danger">
                <i class="fa fa-trash color-danger"></i>
              </button>
            </div>  
          </div>
        </div>
        <hr>
        <div class="card-body">
          <ul class="noteList">
            {foreach $n['entries'] as $e}
            <li>
              {$e['exerciseName']}: <strong>{$e['sets']} x  
              {if is_array($e['reps'])}
                {if $e['reps']['hours'] > 0} {$e['reps']['hours']}h{/if}
                {if $e['reps']['minutes'] > 0} {$e['reps']['minutes']}min{/if}
                {if $e['reps']['seconds'] > 0} {$e['reps']['seconds']}s{/if}
              {else} 
                {$e['reps']}
              {/if}
              </strong>{if $e['weight'] > 0} <span  style="color:#593bdb">[+{$e['weight']}kg]</span>{/if}
            </li>
            {/foreach}
          </ul>
        </div>
        <div class="card-footer d-sm-flex justify-content-between">
          <div class="card-footer-link mb-4 mb-sm-0">
            <p class="card-text text-dark d-inline"><strong>Dodano:</strong> {$n['creationDate']}</p>
            </div>
        </div>
      </div>
    </div>
    {/foreach}
    {else}
      <div class="container-fluid">
        <p>Nie posiadasz jeszcze żadnych notatek.</p>
      </div>
    {/if}
  </div>
 </div>
{/block}