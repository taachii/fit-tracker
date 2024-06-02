<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
  {include file="head.tpl"}
</head>
<body>
  <div class="title">
  <a href="{$conf->action_root}{$cancelAction|default: "view_login"}"><h1 class="auth-header">Fit<span class="tracker-text">Tracker</span></h1></a>
  </div>
  {if $msgs->isError()}
    <div class="authform">
      <div class="col-md-3">
        <div class="col-xl-12">
          <div class="messages alert alert-danger">
            {include file="messages.tpl"}
          </div>
        </div>
      </div>
    </div>
  {else}
  <div class=" noteEntryList d-flex justify-content-center align-items-center full-height">
    <div class="card">
      <div class="card-header">
        <div class="col-sm-6">
          <h4>Wpisy</h4>  
        </div>
        <div class="col-sm-6 justify-content-sm-center mt-2 mt-sm-0 d-flex">
          <a href="{$conf->action_root}noteEntryAdd/{$noteID}">
            <button type="button" class="btn-lg btn-info">Nowy wpis
              <span class="btn-icon-right">
                <i class="fa fa-plus color-info"></i>
              </span>
            </button>
          </a>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">ćwiczenie</th>
              <th scope="col">serie</th>
              <th scope="col">powtórzenia</th>
              <th scope="col">obciążenie</th>
              <th scope="col">typ ćwiczenia</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          {if !empty($entries)}
          {foreach $entries as $e}
          {strip}
            <tr>
              <td>{$e['exerciseName']}</td>
              <td>{$e['sets']}</td>
              <td>{$e['reps']}</td>
              <td>{$e['weight']|default:'0'}</td>
              <td>{$e['typeName']}</td>
              <td>
                <span>
                  <a href="{$conf->action_root}view_noteEntryEdit/{$e["idTrainingNote"]}/{$e["idNoteEntry"]}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edytuj">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a href="{$conf->action_root}noteEntryDelete/{$e["idTrainingNote"]}/{$e["idNoteEntry"]}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Usuń">
                    <i class="fa fa-close"></i>
                  </a>
                </span>
              </td>
            </tr>
          {/strip}
          {/foreach}
          {else}
            <p>Brak wpisów - dodaj je</p>
          {/if}
          </tbody>
        </table>
        <div class="col-sm-12 justify-content-sm-center mt-2 mt-sm-0 d-flex">
          <a href="{$conf->action_root}view_noteList">
            <button type="button" class="btn-lg btn-primary">Zakończ</button>
          </a>
        </div>
      </div>
    </div>
  </div>
  {/if}
</body>
</div>
</html>