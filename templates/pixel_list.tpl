{assign var="page_title" value="##Sponsor List##"}

{include file="header.inc.tpl"}










<div class="container">
<h1 class="ac1" style=" font-size: 27px;">{$page_title|escape}</h1>
<!--{start_form method="get"}

<p>

<input name="q" style="height:27px;" size="30" height="27" value="{$smarty.request.q|escape}" />

{if isset($smarty.request.o)}<input type="hidden" name="o" value="{$smarty.request.o|escape}" />{/if}

{if isset($smarty.request.a)}<input type="hidden" name="a" value="{$smarty.request.a|escape}" />{/if}

<input style="height:27px;" type="submit" value="##Find##" />

</p>

{end_form}-->

 <table class="table table-bordered">
    <thead>
      <tr  class="active">
        <th><a href="?o=2{if $smarty.request.o==2 && $smarty.request.a==0}&amp;a=1{/if}{if isset($smarty.request.q)}&amp;q={$smarty.request.q|escape}{/if}">##Sponsor Name##</a></th>
         {if $app->setting->pixel_list_enable_images}

        <th><a href="#">##Sponsor Ad##</a></th>

        {/if}
         <th><a href="?o=5{if $smarty.request.o==5 && $smarty.request.a==0}&amp;a=1{/if}{if isset($smarty.request.q)}&amp;q={$smarty.request.q|escape}{/if}">##URL##</a></th>
        
        <th><a href="?o=3{if $smarty.request.o==3 && $smarty.request.a==0}&amp;a=1{/if}{if isset($smarty.request.q)}&amp;q={$smarty.request.q|escape}{/if}">##Pixels##</a></th>
        {if $app->setting->pixel_list_by_clicks}
        <th><a href="?o=4{if $smarty.request.o==4 && $smarty.request.a==0}&amp;a=1{/if}{if isset($smarty.request.q)}&amp;q={$smarty.request.q|escape}{/if}">##Clicks##</a></th>
      {/if}
      <th><a href="?o=1{if $smarty.request.o==1 && $smarty.request.a==0}&amp;a=1{/if}{if isset($smarty.request.q)}&amp;q={$smarty.request.q|escape}{/if}">##Date##</a></th>
   <th><a href="?o=1{if $smarty.request.o==6 && $smarty.request.a==6}&amp;a=1{/if}{if isset($smarty.request.q)}&amp;q={$smarty.request.q|escape}{/if}">##Drawing##</a></th>
      </tr>
    </thead>
    <tbody>
      {section name=region loop=$regions}

  <tr>
    <td><a href="index.php?r={$regions[region]->id}">{$regions[region]->title()|escape}</a></td>
    {if $app->setting->pixel_list_enable_images}

    <td><a href="index.php?r={$regions[region]->id}"> <img class="img-responsive" src="show_image.php?rid={$regions[region]->id}" /></a></td>

    {/if}
    <td><a href="index.php?r={$regions[region]->id}" >{$regions[region]->url|escape}</a></td> 
    
    <td>{$regions[region]->width*$regions[region]->height|number_format|escape}</td>

    {if $app->setting->pixel_list_by_clicks}

    <td>{$regions[region]->clicks|number_format|escape}</td>
    

    {/if}

    <td>{$regions[region]->created_on|datetime_to_date|escape}</td> 
    

  </tr>

  {/section}
    </tbody>
  </table>
</div>

<div style="height:320px;">
</div>






{include file="footer.inc.tpl"}

