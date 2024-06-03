{extends file="main.tpl"}

{block name=content}
<div class="container-fluid">
  <div class="row">
    {if empty($statsIsometric) && empty($statsIsotonic) && empty($statsAerobic)}
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Brak statystyk do wyświetlenia.</h4>  
        </div>
      </div>
    </div>
    {/if}
    {if !empty($statsIsotonic)}
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Ćwiczenia izotoniczne</h4>  
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">nazwa ćwiczenia</th>
              <th scope="col">łączna liczba serii</th>
              <th scope="col">łączna liczba powtórzeń</th>
              <th scope="col">max. liczba powtórzeń</th>
              <th scope="col">max. ciężar</th>
            </tr>
          </thead>
          <tbody>
          {foreach $statsIsotonic as $sIt}
          {strip}
            <tr>
              <td>{$sIt['exerciseName']}</td>
              <td>{$sIt['total_sets']}</td>
              <td>{$sIt['total_reps']}</td>
              <td>{$sIt['max_reps']}</td>
              <td>{$sIt['max_weight']}kg</td>
            </tr>
          {/strip}
          {/foreach}  
          </tbody>
        </table>
      </div>
    </div>
    {/if}
    {if !empty($statsIsometric)}
      <div class="card col-lg-12">
        <div class="card-header">
          <div class="col-lg-6">
            <h4>Ćwiczenia izometryczne</h4>  
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
            <thead>
              <tr>
                <th scope="col">nazwa ćwiczenia</th>
                <th scope="col">łączna liczba serii</th>
                <th scope="col">łączny czas</th>
                <th scope="col">max. czas</th>
                <th scope="col">max. ciężar</th>
              </tr>
            </thead>
            <tbody>
            {foreach $statsIsometric as $sIm}
            {strip}
              <tr>
                <td>{$sIm['exerciseName']}</td>
                <td>{$sIm['total_sets']}</td>
                <td>
                  {if $sIm['total_reps']['hours'] > 0} {$sIm['total_reps']['hours']}h{/if}
                  {if $sIm['total_reps']['minutes'] > 0} {$sIm['total_reps']['minutes']}min{/if}
                  {if $sIm['total_reps']['seconds'] > 0} {$sIm['total_reps']['seconds']}s{/if}
                </td>
                <td>
                  {if $sIm['max_reps']['hours'] > 0} {$sIm['max_reps']['hours']}h{/if}
                  {if $sIm['max_reps']['minutes'] > 0} {$sIm['max_reps']['minutes']}min{/if}
                  {if $sIm['max_reps']['seconds'] > 0} {$sIm['max_reps']['seconds']}s{/if}
                </td>
                <td>{$sIm['max_weight']}kg</td>
              </tr>
            {/strip}
            {/foreach}  
            </tbody>
          </table>
        </div>
      </div>
      {/if}
      {if !empty($statsAerobic)}
        <div class="card col-lg-12">
          <div class="card-header">
            <div class="col-lg-6">
              <h4>Ćwiczenia aerobowe</h4>  
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
              <thead>
                <tr>
                  <th scope="col">nazwa ćwiczenia</th>
                  <th scope="col">łączna liczba serii</th>
                  <th scope="col">łączny czas</th>
                  <th scope="col">max. czas</th>
                </tr>
              </thead>
              <tbody>
              {foreach $statsAerobic as $sA}
              {strip}
                <tr>
                  <td>{$sA['exerciseName']}</td>
                  <td>{$sA['total_sets']}</td>
                  <td>
                    {if $sA['total_reps']['hours'] > 0} {$sA['total_reps']['hours']}h{/if}
                    {if $sA['total_reps']['minutes'] > 0} {$sA['total_reps']['minutes']}min{/if}
                    {if $sA['total_reps']['seconds'] > 0} {$sA['total_reps']['seconds']}s{/if}
                  </td>
                  <td>
                    {if $sA['max_reps']['hours'] > 0} {$sA['max_reps']['hours']}h{/if}
                    {if $sA['max_reps']['minutes'] > 0} {$sA['max_reps']['minutes']}min{/if}
                    {if $sA['max_reps']['seconds'] > 0} {$sA['max_reps']['seconds']}s{/if}
                  </td>
                </tr>
              {/strip}
              {/foreach}  
              </tbody>
            </table>
          </div>
        </div>
      {/if}
  </div>
</div>

{* {if empty($stats)}
  <div class="container-fluid">
    Nie masz jeszcze żadnych statystyk.
  </div>
{/if} *}

{/block}