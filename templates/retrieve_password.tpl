
 



  
<div class="section">
  <div class="container">
 	<div class="row">
 		<!-- <h3 class="text-center"><strong>Login</strong></h3>
 		<hr/> -->
 		<div class="col-md-12">
<p class="text-danger text-center"></p>


{assign var="page_title" value="##Retrieve Password##"}

{include file="header.inc.tpl"}



<h1>{$page_title|escape}</h1>

<br />
<br />

{show_errors}

{start_form}
<div class="col-md-offset-3">

<table>



  <tr>

    <td class="label" style=" color: #000; font-size: 15px;line-height: 28px;display: flex;">##Enter your E-Mail Address##:</td>

    <td><input name="email" size="25" value="{$smarty.request.email|escape}"  style="font-size: 17px;
    line-height: 37px;"/>  <input type="submit" value="##Send My Password##"style="font-size: 15px;
    line-height: 22px;
    padding: 7px;" /></td>
    

  </tr>



</table>


</div>
 



{end_form}







<p class="text-danger text-center"></p>

</div>
</div>
</div>
</div>
<div style="height:400px;>
</div>

{include file="footer.inc.tpl"}"}"}"}"}"}"}"}

"}"}"}"}"}"}"}"}