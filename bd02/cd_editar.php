<h1>Alterar CD</h1>
<?
	$cd = $this->getVar("cd");
?>
<form method="post">
	Title: <input type="text" name="titel" value="<? echo $cd["titel"] ?>" />
	Interpret: <input type="text" name="interpret" value="<? echo $cd["interpret"] ?>"  />
	<input type="submit" />
</form>