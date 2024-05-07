<strong>Wystąpiły błędy:</strong>
<ul class="err">
  {foreach $msgs->getMessages() as $err}
    {strip}
      <li>{$err->text}</li>
    {/strip}
  {/foreach}
</ul>
