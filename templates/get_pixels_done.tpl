{assign var="page_title" value="##Thank You##"}
{include file="header.inc.tpl"}

<div class="section ac1">
  <div class="container">
 	<div class="row">
 		<!-- <h3 class="text-center"><strong>{$page_title|escape}</strong></h3>
 		<hr/> -->
 		<div class="col-md-12" style="min-height:400px;">

 
          <div class="panel panel-default">
              <div class="panel-heading">
                <span class="text-primary"> <strong>{$page_title|escape}</strong> </span>
              </div>
              <div class="panel-body">
             
                  
                  

               <p>##Thank you for your order!##</p>

<p>##Your confirmation number is## <strong>{$smarty.request.region_id|escape}</strong>. ##Please keep this number in case you need to contact us about your pixels.##</p>

<p>##You will receive an e-mail from us shortly with instructions on how
to update your pixels.##</p>

<p><a href="{url|escape href="/index.php"}">##Return to Home Page##</a></p>
                     
                   
                  
                
              </div>
            </div>
          
 
 

</div>
</div>
</div>
</div>

<!--<h1>{$page_title|escape}</h1>

<p>##Thank you for your order!##</p>

<p>##Your confirmation number is## <strong>{$smarty.request.region_id|escape}</strong>. ##Please keep this number in case you need to contact us about your pixels.##</p>

<p>##You will receive an e-mail from us shortly with instructions on how
to update your pixels.##</p>

<p><a href="{url|escape href="/index.php"}">##Return to Home Page##</a></p>-->

{include file="footer.inc.tpl"}
