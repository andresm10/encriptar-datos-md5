<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Encriptar con MD5 - PHP</title>
    </head>
    <body bgcolor="#0099CC">
    	<form method="post">        
        	<div style="text-align:center; color:#FFF; font-family:Verdana, Geneva, sans-serif;">
	            <h1>Encriptar datos con MD5 - PHP</h1>
                <input name="cadena" type="text" size="20" maxlength="20" />
                <input name="encriptar" type="submit" value="Encriptar" /><br/><br/>
                <label style="font-size:18px;">
                <?php 
				if (isset($_POST['encriptar'])){
						echo "Cadena encriptada, ".$_POST['cadena']." -> ".md5($_POST['cadena']);
					}
				?>
                </label>
                <div><h1>codigoweblibre</h1></div>
            </div>
        </form>
    </body>
</html>