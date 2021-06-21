<html>
<head>
<meta charset='utf-8'/>
<title>Tudo pdf</title>

    <style type="text/css">
        body,td			{ font-family: arial, helvetica; color: #434343; font-size: 12px; }


        A:link			{ text-decoration: none; color: #2244ee; }
        A:visited		{ text-decoration: none; color: #2244ee; }
        A:hover			{ text-decoration: underline; }

        .hidden			{ font-size: 8px; font-weight: bold; color: #ffffff; }
        A:link.hidden		{ text-decoration: none; color: #ffffff; }
        A:visited.hidden	{ text-decoration: none; color: #ffffff; }
        A:hover.hidden		{ text-decoration: none; color: #ffffff; }

        .small			{ font-size: 10px; }

        .emph			{ font-weight: bold; }
    </style>
</head>
<BR>

<body>


<TABLE BORDER=0 WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0>

    <TR><TD BGCOLOR=000000 width=100% colspan=2>
            <FONT SIZE=2 COLOR=WHITE><CENTER>
                    <A HREF="index.php"><FONT SIZE=2 COLOR=WHITE><B>Home</B></FONT></A> |
                    <A HREF="tela_categorias.php"><FONT SIZE=2 COLOR=WHITE><B>Categorias</B></FONT></A> |
                    <A HREF="tela_cadastro.php"><FONT SIZE=2 COLOR=WHITE><B>Cadastre-se</B></FONT></A> |
                    <A HREF="tela_login.php"><FONT SIZE=2 COLOR=WHITE><B>Login</B></FONT></A> |
                    <A HREF="sobre.php"><FONT SIZE=2 COLOR=WHITE><B>Sobre</B></FONT></A> |
                    <A HREF="contato.php"><FONT SIZE=2 COLOR=WHITE><B>Contato</B></FONT></A> |
                    <?php
                    if(isset($_SESSION['sLogin'])){
                        ?>
                        <A HREF="proc_logout.php"><FONT SIZE=2 COLOR=WHITE><B>Sair</B></FONT></A> |
                    <?php }
                    ?>
                </CENTER></FONT>
        </TD></TR>

    <TR>
        <TD width=150 BGCOLOR=8A8A8A><IMG SRC="img/logo.png" border=0 width=150 height=60></TD>
        <TD VALIGN=top BGCOLOR=8A8A8A>
            <CENTER><A HREF="tela_cadastro.php"><IMG SRC='' border=0><BR> Caso ainda não possua cadastro, clique aqui!</A></cENTER>

        </TD>
    </TR>

    <TR><TD BGCOLOR=000000 width=100% height=3 colspan=2><IMG SRC="" border=0 width=1 height=3></TD></TR>

</TABLE>

<CENTER>
    <FONT SIZE=2>
        © 2017 <i>TudoPDF</i> , Site criado por Douglas Junetti e Lucas Barbosa.
    </FONT>
</cENTER>

</BODY>
</HTML>