<?php
    session_start();

    if(!empty($_POST)) {
        $_SESSION['font-size'] = $_POST['font-size'];
        $_SESSION['font-type'] = $_POST['font-type'];
        $_SESSION['background-color'] = $_POST['background-color'];

        // exit();
    }
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<style type="text/css">
		ul#menu {
			float: left;
			width: 10%;
			list-style-type: none;
		}

		div#tresc {
			float: left;
			width: 85%;
		}

		div#tresc table span {
			padding: 3px;
		}
	</style>
</head>

<body>
	<ul id="menu">
		<li><a href="tekst.php">Tekst</a></li>
		<li><a href="ustawienia.php">Ustawienia</a></li>
	</ul>
	<div id="tresc">
		<table cellpadding="4">
            <form action="ustawienia.php" method="post">
                <tr>
                    <td>Kolor tla strony:</td>
                    <td>
                        <input type="radio" name="background-color" value="#BAFF49"/> <span style="background-color: #BAFF49">#BAFF49</span><br />
                        <input type="radio" name="background-color" value="#8E9BFF"/> <span style="background-color: #8E9BFF">#8E9BFF</span><br />
                        <input type="radio" name="background-color" value="#FFEFBF"/> <span style="background-color: #FFEFBF">#FFEFBF</span><br />
                    </td>
                </tr>
                <tr>
                    <td>Krój czcionki:</td>
                    <td>
                        <select name="font-type">
                            <option>Verdana</option>
                            <option>Arial</option>
                            <option>Courier New</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Wielkość czcionki:</td>
                    <td><input type="text" name="font-size" style="width: 30px" />px</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit"value="Zapisz" /></td>
                </tr>
            </form>
		</table>
	</div>
</body>

</html>