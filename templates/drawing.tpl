{assign var="page_title" value="##Drawing Detail##"}
{assign var="pagename" value="volunteer"}
{include file="header.inc.tpl"}
<div class="section">
  <div class="container">
<!-- <h1>{$page_title|escape}</h1> -->  
{show_errors}
 
  
<div class="row">
 <!--  <div class="alert alert-primary col-md-10 text-center">
        <button contenteditable="false" type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Thanks for Register to us!</strong> You will be receive an email with your code. You can use code on the upload art
      </div> -->
          <div class="col-md-12">
            <div class="panel panel-default">
              <div  >
                <span class="text-primary col-md-5"> <h4> </h4>
                   </span> 
                
              </div>
              <div class="panel-body">
                 <p class="text-center text-primary"><i class="fa fa-fw fa-child fa-3x"></i>{$drawing->username}     <i style="color:green;" class="fa fa-fw fa-hand-o-up fa-3x"></i>Clicks :{$drawing->clicks}  <i style="color:black;" class="fa fa-fw fa-eye fa-3x"></i>Views :{$drawing->views}<i style="color:#BE1931;" class="fa fa-fw fa-heart fa-3x"></i> Likes :{$drawing->likes}    </p>
            <p class="text-left text-warning"><i class="fa fa-fw fa-graduation-cap fa-3x"></i>Sponsors :   {', '|implode:$drawing->sponsors.title}</p> 
                <p><h3 class="text-info">{$drawing->title}</h3>
                <img src="{$drawing->image}" class="img-responsive"></p>
            <p class="well d1">{$drawing->description}  </p>
            <hr/>
            <h3 class="text-info">Make Of Art</h3>
            <p class="text-center"> <iframe width="660" height="315" src="{$drawing->proof}" frameborder="0" allowfullscreen>
</iframe> </p>
              </div>
            </div>
          </div>
        </div>


{end_form}
</div>
</div>
{include file="footer.inc.tpl"}
 