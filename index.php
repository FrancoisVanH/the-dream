<html>
<head>
<link href="style.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>
* {
    font-family: 'Lato', sans-serif;
    color: #007;
}
body {
    background: rgb(104,184,213);
background: linear-gradient(10deg, rgba(104,184,213,1) 0%, rgba(192,239,255,1) 20%, rgba(247,255,252,1) 100%);
}

#box {
  margin: 0;
  margin-left:20%;
  margin-right:20%;
  border: 3px solid #bfe1ed;
  padding: 2%;
  border-style:ridge;
  border-radius: 25px;
  box-shadow: #bfe1ed 0px 3px 8px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #fafafa;
}

#converter {
    border-color:#bfe1ed;
    background-color:#fafafa;
}
input {
    border-radius:5px;
}

h2{
    text-align: center;
    margin-top: 10%;
    margin-bottom: 4%;
    text-transform: uppercase;
}
#symbols {
       text-align: center;
        margin-bottom: 4%; 
}
table{
    margin:0px auto;
    text-align:center;
}
</style>
</head>

<body>

<form method="post">
<div id="page">
<h2><center>What will be the price of that way-too-expensive drink?</center></h2>
<div id="symbols">
<h3><center><span class="material-symbols-outlined">local_bar</span>
            <span class="material-symbols-outlined">currency_yen</span>
            <span class="material-symbols-outlined">wine_bar</span>
            <span class="material-symbols-outlined">euro_symbol</span>
            <span class="material-symbols-outlined">sports_bar</span>
            <span class="material-symbols-outlined">currency_pound</span>
</center></h3>
</div>
<div id="box">
<table>
	<tr>
	<td>
		Enter drink price: <input type="text" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br>From: <select name='cur1'>
	 <option value="EUR" selected>Euro (EUR)</option>
     <option value="GBP">British Pound Sterling(GBP)</option>
	 <option value="JPY">Japanese Yen(JPY)</option>
	 <option value="PHP">Philippine Peso(PHP)</option>
     <option value="UGX">Ugandan Shilling(UGX)</option>
	 </select>
</td>
</tr>
<tr>
	<td>
	<br>To: <select name='cur2'>
     <option value="EUR">Euro (EUR)</option>
	 <option value="GBP">British Pound Sterling(GBP)</option>
	 <option value="JPY">Japanese Yen(JPY)</option>
	 <option value="PHP" selected>Philippine Peso(PHP)</option>
     <option value="UGX">Ugandan Shilling(UGX)</option>
	</select>
</td>
</tr>
<tr>
<td><center><br>
<input id="converter" type='submit' name='submit' value="Convert Now"></center>
</td>
</tr>
</table>

</form>
<?php
    if(isset($_POST['submit'])){
    
    $amount = $_POST['amount'];
    $cur1 = $_POST['cur1'];
    $cur2 = $_POST['cur2'];

    if($cur1=="EUR" AND $cur2=="EUR"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount . "</center>";
        }

    if($cur1=="EUR" AND $cur2=="JPY"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount*141.49 . "</center>";
        }

    if($cur1=="EUR" AND $cur2=="GBP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 0.86 . "</center>";
        }

    if($cur1=="EUR" AND $cur2=="PHP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 57.65 . "</center>";
        }

    if($cur1=="EUR" AND $cur2=="UGX"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 3898.92 . "</center>";
        }

    if($cur1=="JPY" AND $cur2=="EUR"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount*0.0071 . "</center>";
        }

    if($cur1=="JPY" AND $cur2=="JPY"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount . "</center>";
        }

    if($cur1=="JPY" AND $cur2=="GBP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount*0.0061 . "</center>";
        }

    if($cur1=="JPY" AND $cur2=="PHP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 0.41 . "</center>";
        }

    if($cur1=="JPY" AND $cur2=="UGX"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 27.51 . "</center>";
        }

    if($cur1=="GBP" AND $cur2=="EUR"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount*1.16 . "</center>";
        }

    if($cur1=="GBP" AND $cur2=="JPY"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount*163.93 . "</center>";
        }

    if($cur1=="GBP" AND $cur2=="GBP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount . "</center>";
        }

    if($cur1=="GBP" AND $cur2=="PHP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 66.77 . "</center>";
        }

    if($cur1=="GBP" AND $cur2=="UGX"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 4516.74 . "</center>";
        }

    if($cur1=="PHP" AND $cur2=="EUR"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount*0.017 . "</center>";
        }

    if($cur1=="PHP" AND $cur2=="JPY"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount*2.46 . "</center>";
        }

    if($cur1=="PHP" AND $cur2=="GBP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount*0.015 . "</center>";
        }

    if($cur1=="PHP" AND $cur2=="PHP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount . "</center>";
        }

    if($cur1=="PHP" AND $cur2=="UGX"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 67.61 . "</center>";
        }

    if($cur1=="UGX" AND $cur2=="EUR"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 0.00026 . "</center>";
        }

    if($cur1=="UGX" AND $cur2=="JPY"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 0.036 . "</center>";
        }

    if($cur1=="UGX" AND $cur2=="GBP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 0.00022 . "</center>";
        }

    if($cur1=="UGX" AND $cur2=="PHP"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount* 0.015 . "</center>";
        }

    if($cur1=="UGX" AND $cur2=="UGX"){
        echo "<center><b>Your way-too expensive drink will cost you:</b><br></center>";
        echo "<center>" . $amount . "</center>";
        }

    }
?>

</body>
</html>