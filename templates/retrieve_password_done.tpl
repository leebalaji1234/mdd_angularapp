{assign var="page_title" value="##Password Sent##"}
{include file="header.inc.tpl"}


<div class="section ac1">
  <div class="container">
 	<div class="row">
 	<!-- <h3 class="text-center"><strong>Password Sent</strong></h3>
 		<hr/> -->
 		<div class="col-md-12">
<p class="text-danger text-center"></p>



<p class="text-danger text-center"></p>
<form class="form-horizontal" action="/12junbkup1/login.php" method="post">

 <!--  <div class="alert alert-primary col-md-10 text-center">
        <button contenteditable="false" type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Thanks for Register to us!</strong> You will be receive an email with your code. You can use code on the upload art
      </div> -->
          <div class="panel panel-default">
              <div class="panel-heading">
                <span class="text-primary"> <strong>{$page_title|escape}</strong> </span>
              </div>
              <div class="panel-body">
             
                 <p>##Your login details have been sent to your E-Mail address.##</p>
                     
                   <p><a href="{url|escape href="/login.php"}">##Log In##</a></p>
                  
                
              </div>
            </div>
          
 
 
</form>
</div>
</div>
</div>
</div>




 <!--<div class="container">
 	<div class="row">
<h1 class="ac1" style="font-size: 27px;">{$page_title|escape}</h1>

<p>##Your login details have been sent to your E-Mail address.##</p>

<p><a href="{url|escape href="/login.php"}">##Log In##</a></p>
</div>
</div>-->
<div style="height:320px;"></div>
{include file="footer.inc.tpl"}
