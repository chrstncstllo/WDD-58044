<html>

<head>
<title> WDD Long Quiz 2</title>
</head>
<body>
<?php
	$Salary_Rate = 600;
	$Salary = $Salary_Rate*15;
	$Taxable_Amount = $Salary*0.3;
	$Net_Pay = $Salary-$Taxable_Amount;
	
	echo "Vanesa's salary in 15 days is $Salary <br>";
	echo "Vanesa's Tax from his salary is $Taxable_Amount<br>";
	echo "Vanesa's total Net Pay is $Net_Pay";
	echo "<br>";
	
	$Integer = 0;
		for($i=0; $i <=50; $i++) {
			$Integer = $Integer+$i;		
		}
	echo "<center>The sum of all integers from 1 to 50 is equal to $Integer<center>";
	echo "Long quiz 2";



?>

</body>
</html>