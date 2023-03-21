<html>
<head>
<title>{$nombre}</title>
</head>
<body>
<center><h1>Programaci&oacute;n 3</h1></center>



{section name=foo start=0 loop=20 step=2}
 <h1>Hola</h1>
{/section}


{section name=indice loop=$colores}
  colores: {$colores[indice]}<br />
{/section}

<hr>

{foreach from=$colores item=col}
  Color: {$col}<br />
{/foreach}

<hr>


{if $perfil eq "1"}
	Menu A
{else}
	Menu B
{/if}



</body>
</html>
