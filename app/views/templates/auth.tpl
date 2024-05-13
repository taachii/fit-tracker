<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl" class="h-100">
<head>
    {include file="head.tpl"}
</head>
<body>
<div class="title">
  <h1 class="auth-header">Fit<span class="tracker-text">Tracker</span></h1>
</div>
  <div class="container">
    <div class="authform">
      <div class="col-md-6">
        <div class="authincation-content">
          <div class="row no-gutters">
            <div class="col-xl-12">
              <div class="auth-form">
              {block name=form}
                  
              {/block}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
{include file="required.tpl"}

</body>

</html>