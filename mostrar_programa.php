<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	background-image: url(imagenes/bg.gif);
}
.Estilo6 {font-size: 16px}
a:link {
	color: #0000FF;
}
a:visited {
	color: #0000FF;
}
a:hover {
	color: #FF6600;
}
a:active {
	color: #0000FF;
}
.Estilo82 {color: #FFFFFF; font-family: "Berlin Sans FB Demi";}
.Estilo86 {font-family: "Berlin Sans FB Demi"}
.Estilo101 {font-family: "Harlow Solid Italic"; font-size: 18px; }
.Estilo108 {	font-family: Arial;
	font-size: 12px;
	color: #FF6600;
	font-weight: bold;
}
.Estilo109 {font-size: 24px}
.Estilo110 {font-family: Arial}
.Estilo113 {font-size: 12px}
.Estilo114 {color: #FFFFFF}
.Estilo98 {font-family: "Berlin Sans FB Demi"; color: #FFFFFF; font-size: 18px; font-weight: bold; }
-->
</style><script type="text/javascript" src="stmenu.js"></script>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
</head>

<script>
function validacion(formulario)
{
  <!-- Validar Nombre-->
  <!-- Verifica el tama�o de la cadena -->
  if (formulario.nombre.value.length < 3)
  {
    alert("Este campo debe contener m�nimo 3 caracteres");
    formulario.nombre.focus();
    return (false);
  }
  
  
<!-- verifica que la cadena no tenga numeros solo texto -->
  var cadena1 = "ABCDEFGHIJKLMN�OPQRSTUVWXYZ�����abcdefghijklmn�opqrstuvwxyz����� ";
  var cadena2 = formulario.nombre.value;
  var validar = true;
  for (i = 0;  i < cadena2.length;  i++)
  {
    ch = cadena2.charAt(i);
    for (j = 0;  j < cadena1.length;  j++)
      if (ch == cadena1.charAt(j))
        break;
    if (j == cadena1.length)
    {
     validar= false;
      break;
    }
  }
  if (!validar)
  { 
    alert("Este campo debe contener solo caracteres (letras)");
    formulario.nombre.focus();
    return (false);
  }
  
<!-- Validar apellido--> 
if (formulario.apellido.value.length < 3)
  {
    alert("Este campo debe contener m�nimo 3 caracteres");
    formulario.apellido.focus();
    return (false);
  }
  
 var cadena2 = formulario.apellido.value;
  var validar = true;
  for (i = 0;  i < cadena2.length;  i++)
  {
    ch = cadena2.charAt(i);
    for (j = 0;  j < cadena1.length;  j++)
      if (ch == cadena1.charAt(j))
        break;
    if (j == cadena1.length)
    {
     validar= false;
      break;
    }
  }
  
  if (!validar)
  {
    alert("Este campo debe contener solo caracteres (letras)");
    formulario.apellido.focus();
    return (false);
  }
  
<!-- Validar edad-->  
 if (formulario.edad.value.length < 1)
  {
    alert("Debes ingresar tu edad");
    formulario.edad.focus();
    return (false);
  }
  
  <!-- verifica que la cadena tenga solo numeros -->
   var cadena1 = "0123456789";
  var cadena2 = formulario.edad.value;
  var validar = true;
  for (i = 0;  i < cadena2.length;  i++)
  {
    ch = cadena2.charAt(i);
    for (j = 0;  j < cadena1.length;  j++)
      if (ch == cadena1.charAt(j))
        break;
    if (j == cadena1.length)
    {
     validar = false;
      break;
    }
  }
  if (!validar)
  {
    alert("Este campo debe contener solo n�meros");
    formulario.edad.focus();
    return (false);
  }
  
  <!-- Validar respuesta-->
  if (formulario.respuesta.value.length < 1)
  {
    alert("Debes ingresar tu respuesta");
    formulario.respuesta.focus();
    return (false);
  }
 
}
</script>

<body onload="MM_preloadImages('img/menu_r2_c2_f3.jpg','img/menu_r2_c2_f2.jpg','img/menu_r2_c2_f4.jpg','img/menu_r2_c4_f3.jpg','img/menu_r2_c4_f2.jpg','img/menu_r2_c4_f4.jpg','img/menu_r2_c6_f3.jpg','img/menu_r2_c6_f2.jpg','img/menu_r2_c6_f4.jpg','img/menu_r2_c8_f3.jpg','img/menu_r2_c8_f2.jpg','img/menu_r2_c8_f4.jpg','img/menu_r2_c10_f3.jpg','img/menu_r2_c10_f2.jpg','img/menu_r2_c10_f4.jpg','img/menu_r2_c12_f3.jpg','img/menu_r2_c12_f2.jpg','img/menu_r2_c12_f4.jpg','img/menu_r2_c14_f3.jpg','img/menu_r2_c14_f2.jpg','img/menu_r2_c14_f4.jpg','img/menu_r2_c16_f3.jpg','img/menu_r2_c16_f2.jpg','img/menu_r2_c16_f4.jpg')">
<table width="780" height="835" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="225" colspan="3" bgcolor="#41718C" class="Estilo6"><div align="center">
      <table width="780" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#000000"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="177" bgcolor="#FFFFFF"><span class="Estilo101"><span class="Estilo109">A</span><span class="Estilo108">manecer 101.9 FM</span> </span></td>
              <td width="182" bgcolor="#FFFFFF"><span class="Estilo101"><a href="programacion.html">Programaci&oacute;n </a></span><a href="programacion.html"><span class="Estilo101"> </span></a></td>
              <td width="206" bgcolor="#FFFFFF"><span class="Estilo101"><a href="requisitos_programa.html">Requisitos Programa</a> </span></td>
              <td width="215" bgcolor="#FFFFFF"><span class="Estilo101"><a href="requisitos_publicidad.html">Requisitos Publicidad</a> </span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td bgcolor="#000000"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="225">
            <param name="movie" value="flash/banner_funda.swf" />
            <param name="quality" value="high" />
            <embed src="flash/banner_funda.swf" width="780" height="225" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
          </object></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="19" colspan="3" bgcolor="#000000" class="Estilo6"><div align="center">
      <table border="0" cellpadding="0" cellspacing="0" width="780">
        <!-- fwtable fwsrc="menu.png" fwbase="menu.jpg" fwstyle="Dreamweaver" fwdocid = "1521214930" fwnested="0" -->
        <tr>
          <td><img src="img/spacer.gif" width="1" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="40" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="7" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="105" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="9" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="115" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="5" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="130" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="7" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="90" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="7" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="90" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="7" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="80" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="6" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="80" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="1" height="1" border="0" alt="" /></td>
          <td><img src="img/spacer.gif" width="1" height="1" border="0" alt="" /></td>
        </tr>
        <tr>
          <td colspan="17"><img name="menu_r1_c1" src="img/menu_r1_c1.jpg" width="780" height="1" border="0" id="menu_r1_c1" alt="" /></td>
          <td><img src="img/spacer.gif" width="1" height="1" border="0" alt="" /></td>
        </tr>
        <tr>
          <td rowspan="2"><img name="menu_r2_c1" src="img/menu_r2_c1.jpg" width="1" height="19" border="0" id="menu_r2_c1" alt="" /></td>
          <td><a href="index1.html" target="_top" onclick="MM_nbGroup('down','navbar1','menu_r2_c2','img/menu_r2_c2_f3.jpg',1);" onmouseover="MM_nbGroup('over','menu_r2_c2','img/menu_r2_c2_f2.jpg','img/menu_r2_c2_f4.jpg',1);" onmouseout="MM_nbGroup('out');"><img name="menu_r2_c2" src="img/menu_r2_c2.jpg" width="40" height="18" border="0" id="menu_r2_c2" alt="" /></a></td>
          <td rowspan="2"><img name="menu_r2_c3" src="img/menu_r2_c3.jpg" width="7" height="19" border="0" id="menu_r2_c3" alt="" /></td>
          <td><a href="quienesomos.html" target="_top" onclick="MM_nbGroup('down','navbar1','menu_r2_c4','img/menu_r2_c4_f3.jpg',1);" onmouseover="MM_nbGroup('over','menu_r2_c4','img/menu_r2_c4_f2.jpg','img/menu_r2_c4_f4.jpg',1);" onmouseout="MM_nbGroup('out');"><img name="menu_r2_c4" src="img/menu_r2_c4.jpg" width="105" height="18" border="0" id="menu_r2_c4" alt="" /></a></td>
          <td rowspan="2"><img name="menu_r2_c5" src="img/menu_r2_c5.jpg" width="9" height="19" border="0" id="menu_r2_c5" alt="" /></td>
          <td><a href="resenahistorica.html" target="_top" onclick="MM_nbGroup('down','navbar1','menu_r2_c6','img/menu_r2_c6_f3.jpg',1);" onmouseover="MM_nbGroup('over','menu_r2_c6','img/menu_r2_c6_f2.jpg','img/menu_r2_c6_f4.jpg',1);" onmouseout="MM_nbGroup('out');"><img name="menu_r2_c6" src="img/menu_r2_c6.jpg" width="115" height="18" border="0" id="menu_r2_c6" alt="" /></a></td>
          <td rowspan="2"><img name="menu_r2_c7" src="img/menu_r2_c7.jpg" width="5" height="19" border="0" id="menu_r2_c7" alt="" /></td>
          <td><a href="biografia_fund.html" target="_top" onclick="MM_nbGroup('down','navbar1','menu_r2_c8','img/menu_r2_c8_f3.jpg',1);" onmouseover="MM_nbGroup('over','menu_r2_c8','img/menu_r2_c8_f2.jpg','img/menu_r2_c8_f4.jpg',1);" onmouseout="MM_nbGroup('out');"><img name="menu_r2_c8" src="img/menu_r2_c8.jpg" width="130" height="18" border="0" id="menu_r2_c8" alt="" /></a></td>
          <td rowspan="2"><img name="menu_r2_c9" src="img/menu_r2_c9.jpg" width="7" height="19" border="0" id="menu_r2_c9" alt="" /></td>
          <td><a href="organigrama.html" target="_top" onclick="MM_nbGroup('down','navbar1','menu_r2_c10','img/menu_r2_c10_f3.jpg',1);" onmouseover="MM_nbGroup('over','menu_r2_c10','img/menu_r2_c10_f2.jpg','img/menu_r2_c10_f4.jpg',1);" onmouseout="MM_nbGroup('out');"><img name="menu_r2_c10" src="img/menu_r2_c10.jpg" width="90" height="18" border="0" id="menu_r2_c10" alt="" /></a></td>
          <td rowspan="2"><img name="menu_r2_c11" src="img/menu_r2_c11.jpg" width="7" height="19" border="0" id="menu_r2_c11" alt="" /></td>
          <td><a href="contactos.html" target="_top" onclick="MM_nbGroup('down','navbar1','menu_r2_c12','img/menu_r2_c12_f3.jpg',1);" onmouseover="MM_nbGroup('over','menu_r2_c12','img/menu_r2_c12_f2.jpg','img/menu_r2_c12_f4.jpg',1);" onmouseout="MM_nbGroup('out');"><img name="menu_r2_c12" src="img/menu_r2_c12.jpg" width="90" height="18" border="0" id="menu_r2_c12" alt="" /></a></td>
          <td rowspan="2"><img name="menu_r2_c13" src="img/menu_r2_c13.jpg" width="7" height="19" border="0" id="menu_r2_c13" alt="" /></td>
          <td><a href="min_aliure.html" target="_top" onclick="MM_nbGroup('down','navbar1','menu_r2_c14','img/menu_r2_c14_f3.jpg',1);" onmouseover="MM_nbGroup('over','menu_r2_c14','img/menu_r2_c14_f2.jpg','img/menu_r2_c14_f4.jpg',1);" onmouseout="MM_nbGroup('out');"><img name="menu_r2_c14" src="img/menu_r2_c14.jpg" width="80" height="18" border="0" id="menu_r2_c14" alt="" /></a></td>
          <td rowspan="2"><img name="menu_r2_c15" src="img/menu_r2_c15.jpg" width="6" height="19" border="0" id="menu_r2_c15" alt="" /></td>
          <td><a href="otros_sitios.html" target="_top" onclick="MM_nbGroup('down','navbar1','menu_r2_c16','img/menu_r2_c16_f3.jpg',1);" onmouseover="MM_nbGroup('over','menu_r2_c16','img/menu_r2_c16_f2.jpg','img/menu_r2_c16_f4.jpg',1);" onmouseout="MM_nbGroup('out');"><img name="menu_r2_c16" src="img/menu_r2_c16.jpg" width="80" height="18" border="0" id="menu_r2_c16" alt="" /></a></td>
          <td rowspan="2"><img name="menu_r2_c17" src="img/menu_r2_c17.jpg" width="1" height="19" border="0" id="menu_r2_c17" alt="" /></td>
          <td><img src="img/spacer.gif" width="1" height="18" border="0" alt="" /></td>
        </tr>
        <tr>
          <td><img name="menu_r3_c2" src="img/menu_r3_c2.jpg" width="40" height="1" border="0" id="menu_r3_c2" alt="" /></td>
          <td><img name="menu_r3_c4" src="img/menu_r3_c4.jpg" width="105" height="1" border="0" id="menu_r3_c4" alt="" /></td>
          <td><img name="menu_r3_c6" src="img/menu_r3_c6.jpg" width="115" height="1" border="0" id="menu_r3_c6" alt="" /></td>
          <td><img name="menu_r3_c8" src="img/menu_r3_c8.jpg" width="130" height="1" border="0" id="menu_r3_c8" alt="" /></td>
          <td><img name="menu_r3_c10" src="img/menu_r3_c10.jpg" width="90" height="1" border="0" id="menu_r3_c10" alt="" /></td>
          <td><img name="menu_r3_c12" src="img/menu_r3_c12.jpg" width="90" height="1" border="0" id="menu_r3_c12" alt="" /></td>
          <td><img name="menu_r3_c14" src="img/menu_r3_c14.jpg" width="80" height="1" border="0" id="menu_r3_c14" alt="" /></td>
          <td><img name="menu_r3_c16" src="img/menu_r3_c16.jpg" width="80" height="1" border="0" id="menu_r3_c16" alt="" /></td>
          <td><img src="img/spacer.gif" width="1" height="1" border="0" alt="" /></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="18" colspan="3" background="imagenes/entre.jpg" class="Estilo6"><div align="center" class="Estilo82">&nbsp;</div></td>
  </tr>
  <tr>
    <td height="21" colspan="3" background="imagenes/entre2.jpg" class="Estilo6"><div align="center"><span class="Estilo98">Concurso</span></div></td>
  </tr>
  <tr>
    <td width="44" height="19" bgcolor="#41718C" class="Estilo6"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="695" background="imagenes/tabla1.gif" bgcolor="#FFFFFF" class="Estilo6"><div align="center">
      <p>&nbsp;</p>
      <blockquote>
        <p align="center" class="Estilo86"><?
                    include "conectar.php";
					
					$sql=mysql_query("select * from concurso",$conexion);
					
					$array_datos = mysql_fetch_row ($sql);
					if (!$array_datos)
					{
					  echo" <b><div align='center'<colspan='1'><font size='3' face='Arial' color='#000000'>�Disculpe, en este momento no hay concurso en l�nea!</font></div></b>";
					}//if
					  
					  else{
					echo"
                    <table width='700' border='0' align='center' bordercolor='#000000'>
                    <tr>
                    <td><table align= center class= forumline border='0' width='334' cellspacing ='0' cellpadding='2'>
                    <b><div align='center'<colspan='1'><font size='3' face='Arial' color='#000000'>BIENVENIDO A TU PROGRAMA</font></div>                    </b>";
					
					$sql=mysql_query("select * from concurso",$conexion);                   
										
					while ($res=mysql_fetch_array($sql))
                    {
                    echo"
                    <table width='75%' border='0' align='center'>
                    <tr>
					<th colspan='3'> <p>&nbsp;</p><font size='4' face='Matura MT Script Capitals' color='#000000'>",$res[programa], " con ",$res[locutor], "</font><p>&nbsp;</p></th>
                   
                     <tr>
                     <td>
					 <div align='center'><em><font size='4' fase='Arial' color='#FF6600'>",$res[pregunta],"</font></em></div></td>
                     </tr> ";
                    }
					 
                    echo" 
                    </table>
                    <p>&nbsp;</p>
										
         <form id='form2' name='form2' method='post' action='ingresar_participante.php' onsubmit='return validacion(this)'>
                    <table width='217' border='0' align='center' cellpadding='0' cellspacing='0'>
                      
                      <tr>
                        <td width='72' background='imagenes/tabla.jpg'><div align='center' class='Estilo51 Estilo110 Estilo113 Estilo114'>
                          <div align='center'><span class='Estilo38 Estilo41 '><strong>Nombre:</strong></span></div>
                        </div></td>
                        <td width='137' background='imagenes/tabla.jpg'><div align='left'>
                          <input name='nombre' type='text' id='nombre' size='10' />
                        </div></td>
                      </tr>
                      <tr>
                        <td background='imagenes/tabla.jpg'><div align='Center' class='Estilo51 Estilo110 Estilo113 Estilo114'>
                          <div align='center'><span class='Estilo38 Estilo41 '><strong>Apellido:</strong></span></div>
                        </div></td>
                        <td background='imagenes/tabla.jpg'><div align='left'>
                          <input name='apellido' type='text' id='apellido' size='10' />
                        </div></td>
                      </tr>
                      <tr>
                        <td background='imagenes/tabla.jpg'><div align='left' class='Estilo51 Estilo110 Estilo113 Estilo114'>
                          <div align='center'><span class='Estilo38 Estilo41 '><strong>Sexo:</strong></span></div>
                        </div></td>
                        <td background='imagenes/tabla.jpg'><div align='left'><span class='Estilo38 Estilo44 Estilo41 Estilo4'>                         <strong><select name='sexo' id='sexo'>
                            <option value=''></option>
                            <option value='Femenino'>Femenino</option>
                            <option value='Masculino'>Masculino</option>
                          </select>
                        </strong></span> </div></td>
                      </tr>
                      <tr>
                        <td background='imagenes/tabla.jpg'><div align='left' class='Estilo51 Estilo110 Estilo113 Estilo114'>
                          <div align='center'><span class='Estilo38 Estilo41 '><strong>Edad:</strong></span></div>
                        </div></td>
                        <td background='imagenes/tabla.jpg'><div align='left'>
                          <input name='edad' type='text' id='edad' size='5' />
                        </div></td>
                      </tr>
                      <tr>
                        <td background='imagenes/tabla.jpg'><div align='left' class='Estilo51 Estilo110 Estilo113 Estilo114'>
                          <div align='center'><span class='Estilo38 Estilo41 '><strong>Respuesta:</strong></span></div>
                        </div></td>
                        <td background='imagenes/tabla.jpg'><div align='left'><span class='Estilo38 Estilo44 Estilo41 Estilo4'><strong>
                          <textarea name='respuesta' cols='10' id='respuesta'></textarea>
                        </strong></span></div></td>
                      </tr>
                      <tr>
                        <td colspan='2' background='imagenes/tabla.jpg'><div align='center'>
                          <input type='submit' name='Submit2' value='Enviar' />
                          <input type='reset' name='Submit3' value='Cancelar' />
                        </div></td>
                      </tr>
            </table>
          </form>	
					
					
					</table>";
                    }//else
                    
          ?></p>
        
           <p align="justify" class="Estilo86">&nbsp;</p>
        </blockquote>
        </blockquote>
      </blockquote>
    </div></td>
    <td width="44" bgcolor="#41718C" class="Estilo6">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="3" bgcolor="#41718C" class="Estilo6"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center"><a href="index1.html"><img src="imagenes/TgC_flechas_81.gif" width="45" height="44" border="0" /></a></p>
    <p>&nbsp;</p></td>
  </tr>
  
    
  
  <tr>
    <td height="20" colspan="3" background="imagenes/entre3.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" colspan="3" background="imagenes/entre4.jpg">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
