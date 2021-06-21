<?php
session_start();
?>
<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Pagina principal</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">

</HEAD>

<BODY>

<?php
require("topo.php");
?>



<TABLE BORDER=0 WIDTH=98% HEIGHT=70% ALIGN=CENTER>
    <TR>

        <TD VALIGN=top Width=75%>

            <FONT size=20><B>Bem vindo à TUDOPDF!</B></FONT><BR><BR>


        </TD>
    </TR>
    <TR>

        <td valign="top"><center> <b><font size=10> Contribua para o site!</b></font> </center><br> <br>
            <center><a href="tela_upload.php"><font size=5><b> Faca upload de seu pdf aqui!</b></font></a></center>
        </td>
    </TR></TABLE>

<?php
require("rodape.php");
?>

</BODY>
</HTML>

