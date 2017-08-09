<html><head><title>PHP Calculator</title></head>
 <Body>
  <form method = "POST" action = ''>
   Введите первое число<input TYPE = "text" name = "a" /><br>
   Введите второе число<input TYPE = "text" name = "b" /><br>
   <input TYPE = "radio" name = "operation" value = '+'/> Сложение
   <input TYPE = "radio" name = "operation" value = '-'/> Разность
   <input TYPE = "radio" name = "operation" value = '*'/> Произведение
   <input TYPE = "radio" name = "operation" value = '/'/> Деление  
   <input type = 'submit' name = "Calculate" value = 'Вычислить'> 
   <input type = "reset" name = 'Reset' value = 'Отменить'>  
   </form> 
<?php
error_reporting (-1);
 
$a = $_POST['a'];
$b = $_POST['b'];
$radioButton = $_POST['operation'];

	if ($_POST['Calculate'] == true)
		{
		if ($radioButton == NULL) 
		{
			echo "<b style='color: red'>Hjnja kakaja-to...</b>";
		}
		if ($radioButton == '+')
		{
			$c = $a + $b;
		    echo "Сумма равна: " . $c ;  
		}
		if ($radioButton == '-')
		{
			$c = $a - $b;
		    echo "Сумма равна: " . $c ;  
		}
		if ($radioButton == '*')
		{
			$c = $a * $b;
		    echo "Сумма равна: " . $c ;  
		}
		if ($radioButton == '/')
		{
			$c = $a / $b;
		    echo "Сумма равна: " . $c ;  
		}
	}
?>  
</Body>
</html>