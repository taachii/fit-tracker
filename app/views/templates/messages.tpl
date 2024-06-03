<ul>
  {foreach $msgs->getMessages() as $msg}
    {strip}
    <li class="alert {if $msg->isError()}alert-danger{/if} {if $msg->isWarning()}alert-warning{/if} {if $msg->isInfo()}alert-info{/if}">{$msg->text}</li>
    {/strip}
  {/foreach}
</ul>
