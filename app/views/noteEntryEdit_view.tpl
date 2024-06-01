{extends file="form.tpl"}

{block name=content}
  {if $msgs->isError()}
  <div class="messages alert alert-danger">
        {include file="messages.tpl"}
  </div>
  {/if}
  <div class="row mx-0 mb-4">
  <div class="col-sm-6 p-md-0">
    <h4>Wpis do notatki</h4>
  </div>
  <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <a href="javascript:history.go(-1)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wstecz">
      <i class="fa fa-arrow-left"></i>
    </a>
  </div>
</div>
  <form action="{$conf->action_root}noteEntrySave" method="post">
    <div class="form-group">
      <label for="id_exerciseName"><strong>Ćwiczenie</strong></label>
      <input id="id_exerciseName" name="exerciseName" type="text" class="form-control" value="{$form->exerciseName|default:''}" placeholder="np. podciąganie nachwytem">
    </div>
    <div class="form-group">
      <label for="id_sets"><strong>Liczba serii</strong></label>
      <input id="id_sets" name="sets" type="number" min="1" class="form-control" value="{$form->sets|default:''}" placeholder="3">
    </div>
    <div class="form-group">
      <label for="id_reps"><strong>Liczba powtórzeń</strong></label>
      <input id="id_reps" name="reps" type="number" min="1" class="form-control" value="{$form->reps|default:''}" placeholder="12">
    </div>
    <div class="form-group">
      <label for="id_type"><strong>Typ ćwiczenia</strong></label>
      <select name="idType" id="id_type" class="form-control">
        <option {if $form->idType == 1}selected{/if} value="1" title="Ćwiczenia izometryczne to takie, gdzie mięśnie się napinają, ale nie poruszają, jak trzymanie się w jednej pozycji, na przykład deski (plank).">
          izometryczne
        </option>
        <option {if $form->idType == 2}selected{/if} value="2" title="Ćwiczenia izotoniczne to takie, gdzie mięśnie się kurczą i rozciągają, jak przy podnoszeniu i opuszczaniu ciężarów.">
          izotoniczne
        </option>
        <option {if $form->idType == 3}selected{/if} value="3" title="Ćwiczenia aerobowe to takie, które sprawiają, że serce bije szybciej, jak bieganie, skakanie czy jazda na rowerze.">
          aerobowe
        </option>
      </select>
    </div>

    <input type="hidden" name="idNoteEntry" value="{$form->idNoteEntry}">
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Zapisz</button>
    </div>
  </form>
{/block}