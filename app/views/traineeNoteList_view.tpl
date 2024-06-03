{extends file="main.tpl"}

{block name=content}
 <div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Notatki użytkownika: <strong><em>{$traineeUsername}</em></strong></h4>
      </div>
    </div>
    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <a href="javascript:history.go(-1)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wstecz">
        <i class="fa fa-arrow-left"></i>
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
      <p>Użytkownik <strong>{$traineeUsername}</strong> nie posiada żadnych notatek.</p>
    </div>
    {/if}
  </div>
 </div>
{/block}