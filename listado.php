<?php session_start();
$menus2="active";
$menu2="activemenu";


$_SESSION['filtros'];

$filto = explode(",*,",$_SESSION['filtros']);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

include("../head/headn2.php");
include("../head/menun2.php");
include("menu/menun1.php");



 $idcor=$_GET['id'];
 
 
 
 
 
  
$departamento=$fila['tx_departamento'];
$secretaria=$fila['Secretaria'];
    
    $iduser=$fila['id_usuario'];
  

  
     
  
  
  


 if (!file_exists("registro/".date("Y"))) {
  $dirmake = mkdir("registro/".date("Y"), 0777); 

  }


	$sql = "SELECT  * from permisoscorrespondencia
			WHERE iduser = '".$_SESSION['uid']."'";
        
        
if ($result = $mysqli->query($sql) )

if( $fila = $result->fetch_array() )

 if($fila['VerListado']<1 ){
       ?>
<form name="formulario" method="post" action="correspondencia">
			<input type="hidden" name="msg_error" value="2">
</form>
		<script type="text/javascript"> 
		alert("Acceso restingido");
			document.formulario.submit();
		</script>
<?php
}else{
    
    if($_POST['iderror']==101){?>
                <script>
  $(document).ready( function(){
                          sweetAlert({  
                              title: "HA OCURRIDO UN ERROR",   text: "",   timer: 4000, type:"error",   showConfirmButton: false });
                  
                      });
 </script>
 <?php
    }
    
     if($_POST['iderror']==102){?>
                <script>
  $(document).ready( function(){
                          sweetAlert({  
                              title: "La solicitud se modificó exitosamente",   text: "",   timer: 3000, type:"success",   showConfirmButton: false });
                  
                      });
 </script>
 <?php
    }   
    

    
    
    
    
    
    ?>
               
  <form name="descarga" method="get" action="descarga.php">

<input type="hidden" name="word" value="<?php echo $_POST['word']; ?>" />


</form>
                <style>
    .table td,th{
        padding: 4px;
        font-size: 10px!important;
        text-align: left!important;
         word-wrap: break-word;
         border: 1px solid #ccc;
         font-family: Arial!important;
    }
    .dataTables_filter {
    color: #878787;
    font-size: 10px;
    right: 0;
    top: 37px;
    margin: 4px 8px 2px 10px;
  position:initial;
    text-align: left;
}
.site-stats {
    text-align: left;
}
.site-stats li{ background:#2E363F;
}
.dataTables_scrollBody{
    height: 440px!important;
}table.dataTable tr.odd  { background-color: #f9f9f9; } 
table.dataTable tr.even  { background-color: white; }
    </style>
                <style>
                    .content-header{
  background: #f6f8f8;
  border-bottom: 1px solid #ddd !important;
  margin-top: -10px!important;
 }
                    .wb{
                        width: 80px!important;
                        padding: 0px;
                    }
                    
                    
                  
       
.navbar-fixed-top .navbar {
  margin-bottom: 0px;
}
.wrapper {
	overflow: auto; 
	position: relative;//for ie7
	
}
.wrapper.small {
	height: 600px;
	width: 100%;
	
}


.intro-container {
	position: relative;
	
	.cta {
		margin-bottom: 10px;
	}
	.main-demo {
		margin-top: 0px;
	}

	.wrapper {
		width: 100%;
                min-height: 600px!important;
		
	}
}



ul#dynamic-nav li a {
	text-transform: capitalize;
}
.navbar-inverse li {
  font-size: 11px;

  a {
    padding-top: 8px;
    padding-bottom: 8px;
    line-height: 16px;
  }
}


#beer {
  padding-top: 20px;
  .alert {
    padding: 5px 35px 4px 14px;
    margin-bottom:0;
  }
  &.hide-beer {
    height: 0;
    overflow: hidden;
  }
}         
                    
#custom-search-input {
        margin:0;
        margin-top: 10px;
        padding: 0;
    }
 
    #custom-search-input .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-input button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: -10px;
        position:absolute;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        color:#000;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }
    
    
                    .select2-results{
                        background-color:#f9f9f9!important;
                    }
                    .formularios option{
                        font-weight: 300;
                       
                       
                        
                    }
                    .messages-list{
                        min-height: 800px
                            !important;
                    }
                    
                    
                    
                    
                    
        
                    
                    .unread:hover{
                        background-color: red;
                        
                    }         
                    
                    
                
          .ui-effects-transfer { border: 2px dotted gray; background-color:  white; }          
                    
          
          
          
          
          
  @media  (max-width: 979px) { 
      .filtros2{
         
      }

 }
 
 @media (min-width: 768px) and (max-width: 979px) { 



 }

.wb{
    width:110px;
}

        
@media only screen and (min-width: 1250px){ 
 
    .filtros2{
        max-width: 250px!important;
        
    }


  }           
  
  @media only screen and (min-width: 1000px){ 
 
  
.contenido{
    padding-left: 20px!important;

        
    }
}


  @media only screen and (max-width: 700px){ 
 
  
.contenido2{
margin-top: 15px!important;


        
    }
    .formularios{
    padding: 0px!important;;
}
#wrapper{
    margin-top: 15px!important;
   
}



}


 @media only screen and (min-width: 1900px){ 
 
  
.contenido2{

        
    }
}

 @media only screen and (min-width: 700px){ 
 
  
.filtros2{

    padding-right:  15px!important;
        
    }
}


                    
                    .bgtransp{
                        height: 550px;
                        text-align: center;
                        padding-top: 10%;
                 
                       
                 background-image: url("../img/semiwhite.png");
filter:alpha(opacity=80); /* IE */

position: absolute; 

width:100%;

z-index: 1;
                        
                    }
                    </style>
                    
                    
                    <style>
                        
                        
                        .table th {
    height: auto;
    font-size: 10px;
    padding: 5px 10px 2px;
    border-bottom: 0;
    text-align: center;
    color: #666666;
}

.widget-title, .modal-header, .table th, div.dataTables_wrapper .ui-widget-header {
    background: #efefef;
    border-bottom: 1px solid #CDCDCD;
    height: 36px;
}

.table th {
    font-weight: bold;
}

.table {
margin-bottom: 0px!important;
}
.table td, th {
    padding: 4px;
    font-size: 10px!important;
    text-align: left!important;
    word-wrap: break-word;
    border: 1px solid #ccc;
    font-family: Arial!important;
}

.table th, .table td {
    padding: 8px;
    line-height: 20px;
    text-align: left;
    vertical-align: top;
    border-top: 1px solid #ddd;
}

.table tr:hover {
    background-color: #ff9999!important;
}
</style>
                        
                        
    

<script>
                    function redirect(a){
                        
                        
                        
                        
                        
                 
                        sessionStorage.setItem('scroll',$(".dataTables_scrollBody").scrollTop());
                        
                        
                        
                        var nadmon=$("#nadmon").val(); 
                        
                    var q=$("#buscar").val();
var n1=$("#n1").val();
var n2=$("#n2").val();
var n3=$("#n3").val();
var n4=$("#n4").val();
var n5=$("#n5").val();
var st1=0;
var st2=0;
var st3=0;
var st4=0;
var st5=0;
var st6=0;

var pt1=0;
var pt2=0;
var pt3=0;
var pt4=0;


var pat1=0;
var pat2=0;
var pat3=0;
var pat4=0;



var n6=$("#n6").val();

var n10=$("#n10").val();
if (n10 == null){
    n10="";
}


if (n6 == null){
    n6="";
}



 if($("#st1").is(':checked')) {  st1=1;  }
 if($("#st2").is(':checked')) {  st2=1;  }
 if($("#st3").is(':checked')) {  st3=1;  }
 if($("#st4").is(':checked')) {  st4=1;  }
 if($("#st5").is(':checked')) {  st5=1;  }
 if($("#st6").is(':checked')) {  st6=1;  }
 
 
 
 if($("#pt1").is(':checked')) {  pt1=1;  }
 if($("#pt2").is(':checked')) {  pt2=1;  }
 if($("#pt3").is(':checked')) {  pt3=1;  }
 if($("#pt4").is(':checked')) {  pt4=1;  }
 
 
 
  if($("#pat1").is(':checked')) {  pat1=1;  }
 if($("#pat2").is(':checked')) {  pat2=1;  }
 if($("#pat3").is(':checked')) {  pat3=1;  }
 if($("#pat4").is(':checked')) {  pat4=1;  }


var limite=$("#limit").val();





var n7="<?php echo $departamento;?>"
var n8="<?php echo $secretaria;?>"
var n9="<?php echo $iduser;?>"

   var dataString = 'q='+q+'&n1='+n1+'&n2='+n2+'&n3='+n3+'&n4='+n4+'&n5='+n5+'&n6='+n6+'&n7='+n7+'&n8='+n8+'&n9='+n9+'&n10='+n10+'&st1='+st1+'&st2='+st2+'&st3='+st3+'&st4='+st4+'&st5='+st5+'&st6='+st6+'&pt1='+pt1+'&pt2='+pt2+'&pt3='+pt3+'&pt4='+pt4+'&pat1='+pat1+'&pat2='+pat2+'&pat3='+pat3+'&pat4='+pat4+'&limite='+limite+'&nadmon='+nadmon;

     xhr  =   $.ajax({
            type: "GET",
            url: "session.php",
            data: dataString,
            success: function(data) {
     
               
             
                
               $('#resul-busc').html(data);
     document.location.href ="seguimiento.php?id="+a;

                 

            }
        });      
                        

     
     
     
}

</script>        
      <script type="text/javascript">










      function OnScrollDiv (div) {
      
           // var info = document.getElementById ("info");
            //info.innerHTML = "Horizontal: " + div.scrollLeft
              //              + "px<br/>Vertical: " + div.scrollTop + "px";
							
					
							
        }
</script>              
                    
                    <script>
                     $(document).ready(function () {


                       $demoTable = $("table.demo0");
        $demoTable.find('#demoHeader1').on('click', function(){
            alert('Click event fired');
            return false;
        }).text('click me');
        $demoTable.find('#demoHeader2').on('mouseover', function(){
            $(this).closest('th').css('background-color', '#ccc');
        }).on('mouseout', function(){
                    $(this).closest('th').css('background-color', '#eee');
                }).text('mouse over me');

        setTimeout(function(){
            $(".run-main-demo").removeClass("shake");
        }, 2500);

    
			
            var $button = $(this);
         

                $demoTable.floatThead({
                    //the pageTop is a global function i have here, it takes care of making the table float under my floated nav
                    scrollingTop: pageTop,
                    scrollContainer: function($table){
                        return $table.closest('.wrapper');
                    },
                    useAbsolutePositioning: true
            
				
				
                

          
        });




    });
        function tabla(){
	$demoTable = $("table.demo0");
        $demoTable.find('#demoHeader1').on('click', function(){
            alert('Click event fired');
            return false;
        }).text('click me');
        $demoTable.find('#demoHeader2').on('mouseover', function(){
            $(this).closest('th').css('background-color', '#ccc');
        }).on('mouseout', function(){
                    $(this).closest('th').css('background-color', '#eee');
                }).text('mouse over me');

        setTimeout(function(){
            $(".run-main-demo").removeClass("shake");
        }, 2500);

    
			
            var $button = $(this);
         

                $demoTable.floatThead({
                    //the pageTop is a global function i have here, it takes care of making the table float under my floated nav
                    scrollingTop: pageTop,
                    scrollContainer: function($table){
                        return $table.closest('.wrapper');
                    },
                    useAbsolutePositioning: true
     });
	}
                    
                    
                      function getScrollBarWidth() {
        var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
                widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
        $outer.remove();
        return 100 - widthWithScroll;
    }
      
                    </script>                

                
                  
<?php

$result =$mysqli->query($sql = "SELECT  count(*) FROM correspondenciatable "
         . "Inner join conocimiento on conocimiento.idcorrespondenciatable=correspondenciatable.idcorrespondenciatable
"
         . " WHERE iduser='".$_SESSION['uid']."'  and status='0' and (Archivado!='1' || Archivado is null)   ");
$row=$result->fetch_array();
        

        $result =$mysqli->query($sql = "SELECT  count(*) FROM conocimiento "
        
         . " WHERE idusuario2='".$_SESSION['uid']."' group by idcorrespondenciatable   ");
$row2=$result->fetch_array();

if(empty($row2['count(*)'])){
$row2['count(*)']=0;
}

        $result =$mysqli->query($sql = "SELECT  count(*) FROM conocimiento "
        
         . " WHERE Archivado='1' and  iduser='".$_SESSION['uid']."'    ");
$row3=$result->fetch_array();






?>
                    
                    	

              
             <style>
    body{
      
        font-family: arial!important;
        font-family: Arial!important;
    }
   #filtros::-webkit-scrollbar {
      width: 8px;
}
#filtros::-webkit-scrollbar-track {
      background-color:#f1f1f1;
} 
#filtros::-webkit-scrollbar-thumb {
      background-color:#c1c1c1;
} 

.dropdown-menu {
   z-index:999999999 !important;
   position: absolute!important;
}

</style>       
                    <div class="panel box-shadow-none content-header " style=" background-color:  white; border-bottom:#cccccc dashed 1px!important; ">
                  <div class="panel-body">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft" style=" margin-top: 0px!important;">Correspondencia para atención</h3>
                        <p class="animated fadeInDown">
                         <a href="listado.php" style=" color: #3a3a3a;">Solicitudes<span class="fa-angle-right fa"></span></a> 
                        </p>
                    </div>
                             <div class="col-md-6">
                                 <div class=" right"> <a href="new.php"><button class="btn btn-success">Registro de correspondencia</button></a></div>
                        
                        
                    </div>
                  </div>
              </div>
     
                    
                    <div class="col-md-12 formularios nopadding" style=" background-color: transparent; border: 0px; " >
    
                        <div class="col-lg-2 col-xs-12 col-md-3 nopadding filtros2" id="filtros2" style=" min-width: 200px; position: absolute; z-index: 999; display: none;  ">
             <div style=" width: 100%; border: 1px solid #ccc;" >
                 <div class=" header " style=" background-color:#e3e3e3;  width: 100%; height: 40px; color: #006578; text-align: left; padding: 10px 20px;  font-size: 15px; font-weight: bold; " ">Búsqueda avanzada<span class=" fa fa-close" style=" float: right; color:  #000; cursor: pointer;" id="close"></span></div>
             <div class="col-lg-12 col-xs-12" id="filtros" style=" background-color:  white; min-width: 200px; padding: 20px;  ">
             <div class="bd-example" data-example-id="">
<form>

    
    
    
  <div class="form-group" >
      <label for="n1"><strong>Folio</strong></label>
      <input type="n1" value="<?php echo $filto[1]; ?>" class="form-control " id="n1" placeholder="Folio" onkeyup="buscar()">
  </div>
    
    
    <?php if($admon==1){ ?>
      <div class="form-group" >
      <label for="nadmon"><strong>Periodo de administración</strong></label>
      <select id="nadmon" name="nadmon"  required="required" class="form-control select2" style="width: 100%!important;" onchange="buscar();"   >
          
              <?php if($filto[26]==1) {  ?>
          
           <option value="2">2018-2021</option>
          
           <option selected="" value="1">2015-2018</option>
          
          <?php }else{ ?>
          <option value="2">2018-2021</option>
          
          <option value="1">2015-2018</option>
          <?php } ?> 
      </select>
  </div>
    <?php } ?>
    
    <div class="form-group  ">
        <label  style="  "><strong>Fecha de recepción</strong></label>
        <div class="col-lg-6 col-xs-6 " style=" padding-left: 0px; padding-right: 2px; margin-bottom: 15px;" >
          <LABEL style="font-size:10px;">De</LABEL>
          <input type="n2" value="<?php echo $filto[2]; ?>" class="form-control mask-date " id="n2" placeholder="dd/mm/aaaa" style=" font-size: 11px;"  onkeyup="buscar();" onchange="buscar();">
        </div>
        
        
        <div class="col-lg-6 col-xs-6 " style=" padding-left: 2px; padding-right: 0px;" >
            <LABEL style="font-size:10px;">Hasta</LABEL>
        <input type="n3" value="<?php echo $filto[3]; ?>" class=" form-control mask-date " id="n3" placeholder="dd/mm/aaaa" style=" font-size: 11px;"  onkeyup="buscar();" onchange="buscar();">
        </div>
        
  </div>
    
    
    <div class="form-group   " >
    <label ></label>
  
  </div>
    
    
    
        <div class="form-group   " >
            <label ><strong>Prioridad</strong></label>
    <div class="input-group  form-control nopadding" style="">
						
                                               
        <button tabindex="-1"  data-toggle="dropdown" class="btn form-control " type="button" style=" padding-left: 10px; padding-right: 10px; text-align: left!important; font-size: 10px; color: #333333;">PRIORIDAD<span class="caret" style=" float: right!important; margin-top: 5px;"></span></button>
							
							
                                                        <style>
                                                            .dropdown-menu span{
                                                                padding-left: 15px;
                                                                cursor:pointer;
                                                                
                                                            }
                                                        </style>
							<ul role="menu" class="dropdown-menu">
                                                            
                                                            <?php $xa=1;?>
								<li>
								<li class="divider"></li>
								
    
                                                        
		
		  
		
<li><a href="#"><label>
            
                    <?php if($filto[17]==1) {  ?>
            <input  checked=""   type="checkbox" class="checkbox3"  name="pt1" id="pt1" onclick="buscar();">
                    <?php }else{
                        
               if($turnar==1 || $registrar==1){         
                        ?>
            <input checked=""  type="checkbox" class="checkbox3"  name="pt1" id="pt1" onclick="buscar();">          
               <?php }else{?>
            
               <input  type="checkbox" class="checkbox3"  name="pt1" id="pt1" onclick="buscar();">      
            
            
            
           <?php  } } ?>
            
            
            
            
            &nbsp;&nbsp;
 Conocimiento
</label></a></li>
                                                    
 <li><a href="#"><label>
                <?php if($filto[18]=="0") {  ?>
    <input  type="checkbox" class="checkbox3"  name="pt2" id="pt2"  onclick="buscar();">
      <?php }else{?>
       <input  checked="" type="checkbox" class="checkbox3"  name="pt2" id="pt2"  onclick="buscar();">       
              <?php      } ?>
       &nbsp;&nbsp;
 Ordinario
</label></a></li>

<li><a href="#"><label>
                <?php if($filto[19]=="0") {  ?>
    <input   type="checkbox" class="checkbox3"  name="pt3" id="pt3"  onclick="buscar();">
    <?php }else{?>
   <input  checked="" type="checkbox" class="checkbox3"  name="pt3" id="pt3"  onclick="buscar();">      
              <?php      } ?>
         &nbsp;&nbsp;
 Urgente
</label></a></li>

<li><a href="#"><label>
                 <?php if($filto[20]=="0") {  ?>
    <input   type="checkbox" class="checkbox3"  name="pt4" id="pt4"  onclick="buscar();">
    <?php }else{?>
 <input  checked="" type="checkbox" class="checkbox3"  name="pt4" id="pt4"  onclick="buscar();">
              <?php      } ?>
          &nbsp;&nbsp;
 Extra urgente

 </a>
</li>
							</ul>
                                                        
                                                        
                                                  
						</div>
  </div>
    
    
    
    
    
    
    
    <div class="form-group   " >
        <label ><strong>Tipo de solicitante</strong></label>
    <div class="input-group  form-control nopadding" style="">
						
                                               
        <button tabindex="-1"  data-toggle="dropdown" class="btn form-control " type="button" style=" padding-left: 10px; padding-right: 10px; text-align: left!important; font-size: 10px; color: #333333;">Tipo de solicitante<span class="caret" style=" float: right!important; margin-top: 5px;"></span></button>
							
							
                                                        <style>
                                                            .dropdown-menu span{
                                                                padding-left: 15px;
                                                                cursor:pointer;
                                                                
                                                            }
                                                        </style>
							<ul role="menu" class="dropdown-menu">
                                                            
                                                            <?php $xa=1;?>
								<li>
								<li class="divider"></li>
								
                                                        
                                                        
		
		  
		
<li><a href="#"><label>
                  <?php if($filto[21]=="0") {  ?>
            <input  type="checkbox" class="checkbox4"  name="pat1" id="pat1" onclick="buscar();">
                  <?php }else{?>
            <input checked=""  type="checkbox" class="checkbox4"  name="pat1" id="pat1" onclick="buscar();">  
                  <?php } ?>
            &nbsp;&nbsp;
 Ciudadano
</label></a></li>
                                                    
 <li><a href="#"><label>
                  <?php if($filto[22]=="0") {  ?>
    <input  type="checkbox" class="checkbox4"  name="pat2" id="pat2"  onclick="buscar();">
               <?php }else{?>
         <input  checked="" type="checkbox" class="checkbox4"  name="pat2" id="pat2"  onclick="buscar();">
                  <?php } ?>
       &nbsp;&nbsp;
 Asociación civil 
</label></a></li>

<li><a href="#"><label>
             <?php if($filto[23]=="0") {  ?>
    <input   type="checkbox" class="checkbox4"  name="pat3" id="pat3"  onclick="buscar();">
      <?php }else{?>
    <input checked=""   type="checkbox" class="checkbox4"  name="pat3" id="pat3"  onclick="buscar();">
                  <?php } ?>
         &nbsp;&nbsp;
 Dependencia interna
</label></a></li>

<li><a href="#"><label>
                <?php if($filto[24]=="0") {  ?>
    <input  type="checkbox" class="checkbox4"  name="pat4" id="pat4"  onclick="buscar();">
     <?php }else{?>
 <input  checked="" type="checkbox" class="checkbox4"  name="pat4" id="pat4"  onclick="buscar();">
                  <?php } ?>
          &nbsp;&nbsp;
Organizacion

 </a>
</li>
							</ul>
                                                        
                                                        
                                                  
						</div>
  </div>
    
    

    
    
    
    
    
  <div class="form-group">
    <label for="exampleSelect1">Remitente</label>
<select id="n4" name="n4"  required="required" class="form-control select2" style="width: 100%!important;" onchange="buscar();"   >
                                <option value=""> DEPENDENCIAS</option>
                                
                             <?php
                            
            $result =$mysqli->query(	$sql = "SELECT  *
			FROM dependencia
			WHERE inactivo  != '1' || inactivo is null ORDER BY nombre asc");
        
        


	   while($row=$result->fetch_array()){
               
               if($filto[4]==$row['iddependencias']){
               ?>
                                <option selected="" value="<?php echo $row['iddependencias'] ?>">
                          <?php echo  mb_strtoupper($row['nombre'],'UTF-8');?></option>
                
                      <?php
               }else{?>
                   
                 <option value="<?php echo $row['iddependencias'] ?>">
                          <?php echo  mb_strtoupper($row['nombre'],'UTF-8');?></option>
                                 
                                 
                                 <?php }
                }
             ?>
        
      
    </select>
  </div>
    
    
    
    
    <div class="form-group">
     <?php
     
        $result =$mysqli->query(	$sql = "SELECT  *
			FROM solicitante
			WHERE  (inactivo  != '1' || inactivo is null) ORDER BY CONCAT(Sol_Nombre,Sol_aPaterno,Sol_aMaterno) asc");
        
          ?>
<select id="n5" name="n5" required="required" class="form-control select2"  style="width: 100%!important;" onchange="buscar();" >
                                <option value=""> SELECCIONE REMITENTE</option>
                               <?php 
        	   while($row=$result->fetch_array()){
                       
                        if($filto[5]==$row['idSolicitantes']){
               ?>
                                <option selected="" value="<?php echo $row['idSolicitantes'] ?>">
                          <?php echo  mb_strtoupper($row['Sol_Nombre']." ".$row['Sol_aPaterno']." ".$row['Sol_aMaterno'],'UTF-8');?></option>
                
                        <?php
                        
                        }else{
                            ?>
                                <option  value="<?php echo $row['idSolicitantes'] ?>">
                          <?php echo  mb_strtoupper($row['Sol_Nombre']." ".$row['Sol_aPaterno']." ".$row['Sol_aMaterno'],'UTF-8');?></option>
                
                        <?php  
                        }
                
                }
             ?>
      
    </select>
  </div>
    
    
    
    
    <?php  
     $r1="";
     $r2="";
     $r3="";
     $r4="";
     $r5="";
    
    
    if($fila['VerListado']<=6){ 
        
        if($fila['VerListado']==1){ 
          
         $r2='selected=""';   
        
         }
        if($fila['VerListado']==2){ 
        
         $r2='selected=""';   
       
    }
        if($fila['VerListado']==3){ 
    
         $r3='selected=""'; 
      
         }
         if($fila['VerListado']==4){ 
           
         $r4='selected=""';   
        
         }
         if($fila['VerListado']==5){ 
                
         $r5='selected=""';   
                }
         
                
                      if($filto[6]==1){
         $r1='selected=""';   
        } if($filto[6]==2){
         $r2='selected=""';   
        } if($filto[6]==3){
         $r3='selected=""';   
        } if($filto[6]==4){
         $r4='selected=""';   
        } if($filto[6]==5){
         $r5='selected=""';   
        }
        
      
        ?>
    
    
    <div class="form-group">
    <label for="exampleSelect1">Ver</label>
  
    
<select  id="n6" name="n6"  required="required" class="form-control " style="width: 100%!important;" onchange="buscar();"   >
      <?php  if($fila['VerListado']==6){  ?>
    
     <option <?php echo $r5; ?> value="6">Mi modulo</option>
    
      <?php } ?>
    
    <option <?php echo $r5; ?> value="5">Mis solicitudes </option>
    <?php if($fila['VerListado']<5){
    ?>
     <option <?php echo $r4; ?> value="4">Solicitudes de mi departamento</option>
    <?php if($fila['VerListado']<4){ ?>
    <option <?php echo $r3; ?> value="3">Solicitudes de mi dirección</option>
    <?php } ?>
    <?php if($fila['VerListado']<3){ ?>
    <option <?php echo $r2; ?> value="2">Solicitudes de mi secretaria</option>
    <?php } ?>
    <?php if($fila['VerListado']<2){ ?>
    <option <?php echo $r1; ?> value="1">Ver todo</option>
    <?php } ?>
    
    
    <?php } ?>
                                
                           
      
    </select>
  </div>
    
    
    <?php } ?>
    
    
      <?php if($fila['VerListado']<3){ ?>
    <div class="form-group">
    <label for="exampleSelect1">Departamento</label>
<select id="n10" name="n10"  required="required" class="form-control select2" style="width: 100%!important;" onchange="buscar();"   >
                                <option value=""> SECRETARIA</option>
                                
                             <?php
                            
            $result =$mysqli->query(	$sql = "SELECT  *
			FROM departamento
			WHERE (inactivo  != '1' || inactivo is null) and Nivel=1 ORDER BY Departamento asc");
        
        


	   while($row=$result->fetch_array()){
                  if($filto[10]==$row['idDepartamento']){?>
                                <option selected="" value="<?php echo $row['idDepartamento'] ?>">
                          <?php echo  mb_strtoupper($row['Departamento'],'UTF-8');?></option>
                
                      <?php
                  }else{?>
                             <option value="<?php echo $row['idDepartamento'] ?>">
                          <?php echo  mb_strtoupper($row['Departamento'],'UTF-8');?></option>         
                                 
                                 <?php
                }
           }
             ?>
        
      
    </select>
  </div>
    
      <?php } ?>

    
        
      <?php if($fila['VerListado']==6){ ?>
    <div class="form-group">
    <label for="exampleSelect1">Departamento</label>
<select id="n10" name="n10"  required="required" class="form-control select2" style="width: 100%!important;" onchange="buscar();"   >
                                <option value=""> DEPARTAMENTO</option>
                                
                             <?php
                            
            $result =$mysqli->query(	$sql = "SELECT  *
			FROM departamento
			WHERE inactivo  != '1' || inactivo is null ORDER BY Departamento asc");
        
        


	   while($row=$result->fetch_array()){
                  if($filto[10]==$row['idDepartamento']){?>
                                <option selected="" value="<?php echo $row['idDepartamento'] ?>">
                          <?php echo  mb_strtoupper($row['Departamento'],'UTF-8');?></option>
                
                      <?php
                  }else{?>
                             <option value="<?php echo $row['idDepartamento'] ?>">
                          <?php echo  mb_strtoupper($row['Departamento'],'UTF-8');?></option>         
                                 
                                 <?php
                }
           }
             ?>
        
      
    </select>
  </div>
    
      <?php } ?>
    
    
    
    
  <div class="form-group">
    <label for="exampleSelect1">Categoria</label>
<select id="an4" name="na4"  required="required" class="form-control select2" style="width: 100%!important;" onchange="buscar();"   >
                                <option value=""> Categorias</option>
                                
                             <?php
                            
            $result =$mysqli->query(	$sql = "SELECT  *
			FROM categoriasolicitud
                        INNER JOIN departamento ON departamento.idDepartamento=categoriasolicitud.Departamento
			WHERE categoriasolicitud.inactivo  != '1' || categoriasolicitud.inactivo is null ORDER BY NombreCategoria asc");
        
        


	   while($row=$result->fetch_array()){?>
                                 <option value="<?php echo $row['idCategoriaSolicitud'] ?>">
                          <?php echo  mb_strtoupper($row['NombreCategoria'],'UTF-8');?></option>
                
                      <?php
                
                }
             ?>
        
      
    </select>
  </div>
    
    
    
    
    
    
    
    
</form>
</div>
         </div>  
         </div>  
          </div>  
         
         
         <div class="col-lg-12 col-md-12 col-xs-12 nopadding contenido2 ">
             
        <?php 

             
        ?>

              
         <div style=" padding-left:0px; padding-right:0px; width:<?php echo $myWidth; ?>">
      <div class=" col-lg-12 col-xs-12 " style=" background-color: white; padding: 6px;  border: 1px solid #ccc;" >
            <div class=" col-lg-5 col-md-5  col-xs-12">
           <div class="input-group col-md-12">
                                  
                         <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                  
                                <input value="<?php echo     $filto[0]  ?>"  type="text" class="  search-query form-control input-sm" id="buscar" name="buscar" onkeyup="buscar();" placeholder="Buscar..." />
                               
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" style=" background-color: white!important;" type="button" onclick="buscar()">
                                        <span class=" glyphicon glyphicon-search" style=" color: #333!important;"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
               
               
               <label style=" position: initial; cursor: pointer; margin-top: 5px;" onclick=" filtros();" id="filtrosa"><span class="fa fa-bars"></span>&nbsp;&nbsp;Búsqueda avanzada </label>
                            </div>
              
                
            </div>
          
          
          
          <div class=" col-lg-1 col-md-1  col-xs-12 left ">
              <a href="listado.php">
              <button title="Limpiar filtros" class="btn btn-danger" style=" background-color: white!important;margin-top: 15px;" type="button" onclick="buscar()">
                                        <span class=" glyphicon glyphicon-refresh" style=" color: #333!important; float: left; "></span>
                                    </button>
              </a>
              
          </div>
          
          <div class=" col-lg-2  col-md-2   col-xs-12 left ">
              <div class="form-group" style="padding-top: 10px!important; ">
   <?php
   
   ?>
<select  id="limit" name="limit"   class="form-control " style="width: 100%!important;height:30px; font-size: 10px; " onchange="buscar();"   >
  <?php if($filto[25]==50){?>
    <option selected=""  value="50">Max. 50 registros</option>
   <?php }else{?>
      <option  value="50">Max. 50 registros</option>
       <?php }?>
       
       
       <?php if($filto[25]==100){?>
    <option selected=""  value="100">Max. 100 registros</option>
   <?php }else{?>
      <option  value="100">Max. 100 registros</option>
       <?php }?>
      
     <?php if($filto[25]==200){?>
    <option selected="" value="200">Max. 200 registros</option>
   <?php }else{?>
      <option  value="200">Max. 200 registros</option>
       <?php }?>
      
         <?php if($filto[25]==500){?>
    <option selected=""  value="500">Max. 500 registros</option>
   <?php }else{?>
      <option  value="500">Max. 500 registros</option>
       <?php }?>
      
         <?php if($filto[25]==1000){?>
    <option selected=""  value="1000">Max. 1000 registros</option>
   <?php }else{?>
      <option  value="1000">Max. 1000 registros</option>
       <?php }?>
      
      
         <?php if($filto[25]==10000){?>
    <option selected=""  value="10000">Max. 10000 registros</option>
   <?php }else{?>
      <option  value="10000">Max. 10000 registros</option>
       <?php }?>
      
         <?php if($filto[25]==50000){?>
    <option selected=""  value="50000">Max. 50000 registros</option>
   <?php }else{?>
      <option  value="50000">Max. 50000 registros</option>
       <?php }?>
      
      
 <?php if($filto[25]==999999999999999){?>
    <option selected=""  value="999999999999999">Sin limites</option>
   <?php }else{?>
      <option  value="999999999999999">Sin limites</option>
       <?php }?>
      
      
</select>
     
  </div>  
</div>
          
          
           <div class=" col-lg-1 col-md-1  col-xs-12 right ">
                   <?php if($fila['graficas']==1){?>
                <a href="chart.php"> <button class=" default fa fa-bar-chart" style=" font-size: 20px; margin-top: 10px;"></button></a>
               
                <?php }?>
             
           </div>
           <div class=" col-lg-3  col-md-3   col-xs-12 right ">
          <div class="input-group  right" style="padding:0px!important; padding-top: 10px!important;">
						
                                               
                                                        <button tabindex="-1"  data-toggle="dropdown" class="btn btn-sm " type="button"><span class="fa fa-bars" aria-hidden="true">
                                                            
                                                    </span>&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>
							
							
                                                        <style>
                                                            .dropdown-menu span{
                                                                padding-left: 15px;
                                                                cursor:pointer;
                                                                
                                                            }
                                                        </style>
							<ul role="menu" class="dropdown-menu">
                                                            
                                                            <?php $xa=1;?>
								<li><li><a href="#">
                                                                        <label>
                                                                            <input type="checkbox" id="al2" name="al2" ><span class="lb2"> Todos</span></label>
                                                                    </a>
                                                                </li>
								<li class="divider"></li>
								
                                                        
                                                        
		
		  
		
<li><a href="#"><label>
            
            <?php if($filto[11]=="0") {  ?>
             <input   type="checkbox" class="checkbox2"  name="st1" id="st1" onchange=="buscar();">
            <?php }else{ ?>
            <input  checked="" type="checkbox" class="checkbox2"  name="st1" id="st1" onchange="buscar();">
            <?php } ?>
            
            
            
    <span class="lbl">
    <div class="btn text-white  bg-deep-orange btn-xs wb" style="  ">Registrado</div></span>
</label></a></li>
                                                    
 <li><a href="#"><label>
               <?php if($filto[12]=="0") {  ?>
             <input type="checkbox" class="checkbox2"  name="st2" id="st2" onchange="buscar();">
       <?php }else{ ?>
       <input  checked="" type="checkbox" class="checkbox2"  name="st2" id="st2"  onchange="buscar();">
       <?php } ?>
    <span class="lb2">
    <div class="btn text-white bg-primary btn-xs wb" style="  ">Turnado</div></span>
</label></a></li>

<li><a href="#"><label>
              <?php if($filto[13]=="0") {  ?>
    <input   type="checkbox" class="checkbox2"  name="st3" id="st3"  onclick="buscar();">
      <?php }else{ ?>
       <input  checked="" type="checkbox" class="checkbox2"  name="st3" id="st3"  onclick="buscar();">
       <?php } ?>
    
    <span class="lb3">
    <div class="btn text-white  bg-green btn-xs wb" style="  ">En proceso</div></span>
</label></a></li>

<li><a href="#"><label>
   <?php if($filto[14]==1) {  ?>
    <input checked="" type="checkbox" class="checkbox2"  name="st4" id="st4"  onclick="buscar();">
    <?php }else{ ?>
    <input  type="checkbox" class="checkbox2"  name="st4" id="st4"  onclick="buscar();"> 
     <?php } ?>
    
    
    <span class="lb4">
    <div class="btn text-white bg-dark-green btn-xs wb" style="  ">Terminado</div></span>
</label></a></li>


                                                                
<li><a href="#"><label>
            <?php if($filto[16]=="0") {  ?>
    <input  type="checkbox" class="checkbox2"  name="st6" id="st6"  onclick="buscar();">
    <?php }else{ ?>
    <input  checked="" type="checkbox" class="checkbox2"  name="st6" id="st6"  onclick="buscar();">
      <?php } ?>
    <span class="lb6">
    <div class="btn text-white bg-dark-red btn-xs wb" style="  ">Objetado</div></span>
</label></a></li>								
							</ul>
                                                        
                                                        
                                                    </form>
						</div>
      </div>
      </div>
                            <div id="bgtransp" class="bgtransp" style=" display: none; margin-top: 70px;   ">
<img src="../img/loader.gif" style=" height: 100px; float:  none;">
<div>Cargando....</div></div> 


<div id="bgtransp2" class="bgtransp" style=" display: none;   ">
<img src="../img/loading.gif" style=" height: 100px; float:  none;">
<div>EXPORTANDO....</div></div>
             <div class='wrapper small'  onscroll="OnScrollDiv (this)" id="wrapper" style="float:left;  height:500px!important; background-color: #fff; border:#e7e7e7 1px solid!important;" >
                 

       <div id="resul-busc" class="" style="  padding-left:0px; padding-right:0px; ">
      <?php 
       $_GET['st1']=1;
        $_GET['st2']=1;
         $_GET['st3']=1;
          $_GET['st4']=0;
           $_GET['st5']=1;
            $_GET['st6']=1;
            
            
       $_GET['pt1']=0;
        $_GET['pt2']=0;
         $_GET['pt3']=0;
          $_GET['pt4']=0;
          
          
       $_GET['pat1']=1;
        $_GET['pat2']=1;
         $_GET['pat3']=1;
          $_GET['pat4']=1;
          
          
          $_GET['n6']=$fila['VerListado'];
          
          
          
          
         
          
         ?>
           
       <table id="example" class="display nowrap table" cellspacing="0" width="100%"> 
            <thead> 
                <tr> 
                    <th >#</th>
                   <th  >Folio interno</th>
                   <th  >Folio externo</th>
                   <th  >Fecha<br> Recepción</th>
                   <th   >Fecha <br>Limite</th>
                   <th  >Fecha de<br> atención</th>
                     <th   >Remitente</th>
                    <th   >Asunto</th>
                   <th   >Apoyos</th>
                    <th   >Status</th>
                    <th   >Avance</th>
                    <th  >Turnado</th>
            
                    
                </tr>
            </thead>
            <tbody style=" border: 0px!important;">
                
                
            </tbody>
       
       
       </table>
       
    </div>
               
         
        </div>   
             
                 
                    
               </div>
             
             
               </div>     
                        
                        
<?php

 if($fila['Reportes']>0 ){
     
     
 ?>
                          <div class="col-lg-10 col-xs-12 nopadding">
                              <h5><button onclick="excel();" class="btn btn-adn">Exportar datos <span class="fa fa-file-excel-o"></span></button></h5>          
                          </div>
                        
 <?php } ?>
         </div>            
                                
             	<div class="overlay-container2">

<div>

		<div class="window-container2 zoomout" style="color:#333333; font-size:14px; font-family:Calibri; line-height:15px; font-weight:bold;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="47" align="center" bgcolor="#E9E9E9">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#E9E9E9"><img src="../img/loader.gif" width="70" height="70" /></td>
  </tr>
  
  <tr>
    <td height="63" align="center" bgcolor="#E9E9E9">EXPORTANDO<br />
ESPERE 
      UN MOMENTO</td>
  </tr>
    <tr>
    <td height="30" align="center" bgcolor="#E9E9E9">&nbsp;</td>
  </tr>
</table>
        </div>
        </div>       
                    
                    
         </div>            
                
                    

                <?php
    
    
    
}?>
         
                
 
    <!-- bootstrap-progressbar -->
 
         <?php
include("../head/footn2.php");


$_SESSION['filtros'] = "";
?>
          <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 
 <script src="../js/custom.js"></script>

         
         <script>
   
function filtros(){
    
   
}
     
$( ".select2, .select2-multiple" ).select2( {  } );
$( document ).ready(function() {

});


function buscarkey(){
  if(event.keyCode == 13){
    buscar(a);
  }
}

var xhr = null;

function buscar(a){
    
    
    if(xhr && xhr.readyState != 4) { 
        
    xhr.abort();
}
  
//$('.dataTables_scrollBody').scrollLeft(0);
 //var scroll = $('.dataTables_scrollBody').scrollTop();


  
    
    
    
 var activo="";

   var nadmon=$("#nadmon").val(); 
    
    
    
var q=$("#buscar").val();
var n1=$("#n1").val();
var n2=$("#n2").val();
var n3=$("#n3").val();
var n4=$("#n4").val();
var n5=$("#n5").val();
var st1=0;
var st2=0;
var st3=0;
var st4=0;
var st5=0;
var st6=0;

var pt1=0;
var pt2=0;
var pt3=0;
var pt4=0;


var pat1=0;
var pat2=0;
var pat3=0;
var pat4=0;



var n6=$("#n6").val();

var n10=$("#n10").val();
if (n10 == null){
    n10="";
}


if (n6 == null){
    n6="";
}

var limite=$("#limit").val();

var n7="<?php echo $departamento;?>"
var n8="<?php echo $secretaria;?>"
var n9="<?php echo $iduser;?>"
var direccion="<?php echo $direccion;?>"



 if($("#st1").is(':checked')) {  st1=1;  }
 if($("#st2").is(':checked')) {  st2=1;  }
 if($("#st3").is(':checked')) {  st3=1;  }
 if($("#st4").is(':checked')) {  st4=1;  }
 if($("#st5").is(':checked')) {  st5=1;  }
 if($("#st6").is(':checked')) {  st6=1;  }
 
 
 
 if($("#pt1").is(':checked')) {  pt1=1;  }
 if($("#pt2").is(':checked')) {  pt2=1;  }
 if($("#pt3").is(':checked')) {  pt3=1;  }
 if($("#pt4").is(':checked')) {  pt4=1;  }
 
 
 
  if($("#pat1").is(':checked')) {  pat1=1;  }
 if($("#pat2").is(':checked')) {  pat2=1;  }
 if($("#pat3").is(':checked')) {  pat3=1;  }
 if($("#pat4").is(':checked')) {  pat4=1;  }










var buscar=1;






 
 
        $('#bgtransp').show();

        var page = "1";  
       
          var tipo= $("#tipo").val();

        var dataString = 'q='+q+'&buscar='+buscar+'&n1='+n1+'&n2='+n2+'&n3='+n3+'&n4='+n4+'&n5='+n5+'&n6='+n6+'&n7='+n7+'&n8='+n8+'&n9='+n9+'&n10='+n10+'&st1='+st1+'&st2='+st2+'&st3='+st3+'&st4='+st4+'&st5='+st5+'&st6='+st6+'&pt1='+pt1+'&pt2='+pt2+'&pt3='+pt3+'&pt4='+pt4+'&pat1='+pat1+'&pat2='+pat2+'&pat3='+pat3+'&pat4='+pat4+'&limite='+limite+'&direccion='+direccion+'&nadmon='+nadmon;

     xhr  =   $.ajax({
            type: "GET",
            url: "config-respaldo.php",
            data: dataString,
            success: function(data) {
     
               
             $('#bgtransp').hide();
                
               $('#resul-busc').html(data);

table();

              $( ".dataTables_scrollBody" ).scrollTop( sessionStorage.getItem('scroll'))
sessionStorage.clear('scroll');   

            }
        });
    }
 

function table(){


           $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder=" '+title+'" style="width:100%!important;" />' );
    } );
    $('#example').removeAttr('width').DataTable( {
      

   
        "scrollY": 500,
        "scrollX": true,
          "paging":   false,
    
        "info":     false,
         autoWidth:         false,  
        "searching": false


        

    

    } );
  
    
   
    
    
       var table = $('#example2').DataTable();
       // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
         
            
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
    
    
    

}
        
        
        $('#n2').datetimepicker({
            
format: "DD/MM/YYYY",
locale: 'es',
 
});


        $('#n3').datetimepicker({
format: "DD/MM/YYYY",
locale: 'es',

 
});






$(function() {
    $('#al2').click(function(event) {  //on click 
    
        if(this.checked) {
          
          // check select status
            $('.checkbox2').each(function() { //loop through each checkbox
                this.checked = true;
                  buscar();
            });
        }else{
            $('.checkbox2').each(function() { //loop through each checkbox
                this.checked = false;
                 buscar();             
            });         
        }
    });
});


$('#resul-busc').scroll(function (event) {
    var scroll = $('#resul-busc').scrollTop();
    
  
    
    // Do something
});



$(document).ready(function() {
$('#excel').click(function() {
type = $(this).attr('data-type');
$('.overlay-container').fadeIn(function() {
window.setTimeout(function(){
$('.window-container.'+type).addClass('window-container-visible');
}, 100);
});



});
$('.close').click(function() {
$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');
});


if("<?php echo $_POST['word'];?>"!=""){
window.setTimeout(function(){
document.descarga.submit();
}, 2000);
}
});


function excel(a){

$('#wrapper').scrollLeft(0);
 var scroll = $('#wrapper').scrollTop();


    document.getElementById("bgtransp2").style.top = scroll+"px";
              $('#bgtransp2').show();
    if(xhr && xhr.readyState != 4) { 
        
    xhr.abort();
}
  
$('#wrapper').scrollLeft(0);
 var scroll = $('#wrapper').scrollTop();


    document.getElementById("bgtransp").style.top = scroll+"px";
    
        document.getElementById("bgtransp2").style.top = scroll+"px";
    
 var activo="";

    
    
var q=$("#buscar").val();
var n1=$("#n1").val();
var n2=$("#n2").val();
var n3=$("#n3").val();
var n4=$("#n4").val();
var n5=$("#n5").val();
var st1=0;
var st2=0;
var st3=0;
var st4=0;
var st5=0;
var st6=0;

var pt1=0;
var pt2=0;
var pt3=0;
var pt4=0;


var pat1=0;
var pat2=0;
var pat3=0;
var pat4=0;



var n6=$("#n6").val();

var n10=$("#n10").val();
if (n10 == null){
    n10="";
}


if (n6 == null){
    n6="";
}

var limite=$("#limit").val();

var n7="<?php echo $departamento;?>"
var n8="<?php echo $secretaria;?>"
var n9="<?php echo $iduser;?>"



 if($("#st1").is(':checked')) {  st1=1;  }
 if($("#st2").is(':checked')) {  st2=1;  }
 if($("#st3").is(':checked')) {  st3=1;  }
 if($("#st4").is(':checked')) {  st4=1;  }
 if($("#st5").is(':checked')) {  st5=1;  }
 if($("#st6").is(':checked')) {  st6=1;  }
 
 
 
 if($("#pt1").is(':checked')) {  pt1=1;  }
 if($("#pt2").is(':checked')) {  pt2=1;  }
 if($("#pt3").is(':checked')) {  pt3=1;  }
 if($("#pt4").is(':checked')) {  pt4=1;  }
 
 
 
  if($("#pat1").is(':checked')) {  pat1=1;  }
 if($("#pat2").is(':checked')) {  pat2=1;  }
 if($("#pat3").is(':checked')) {  pat3=1;  }
 if($("#pat4").is(':checked')) {  pat4=1;  }










var buscar=1;





        var page = "1";  
       
          var tipo= $("#tipo").val();

        var dataString = 'q='+q+'&buscar='+buscar+'&n1='+n1+'&n2='+n2+'&n3='+n3+'&n4='+n4+'&n5='+n5+'&n6='+n6+'&n7='+n7+'&n8='+n8+'&n9='+n9+'&n10='+n10+'&st1='+st1+'&st2='+st2+'&st3='+st3+'&st4='+st4+'&st5='+st5+'&st6='+st6+'&pt1='+pt1+'&pt2='+pt2+'&pt3='+pt3+'&pt4='+pt4+'&pat1='+pat1+'&pat2='+pat2+'&pat3='+pat3+'&pat4='+pat4+'&limite='+limite;

location.href = "excel/reportegeneral.php?"+dataString;
    
    }
      
      
      $("#close").click(function(){
         
    

    $("#filtros2").hide("slide", { direction: "left" }, 700);
});
$("#filtrosa").click(function(e){
 $("#filtros2").show("slide", { direction: "left" }, 700);
      //   e.stopPropagation();
});

$("#filtros2").click(function(e){
      //e.stopPropagation();
    
});

buscar();
             </script>