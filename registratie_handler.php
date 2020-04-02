<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	foreach($_POST as $key => $val)
	{
		if ($key == 'fname')
		{
			echo 'username:'.$val."<br>";
        } elseif($key == 'lname'){
            echo "uw email is:" . $val. "<br>";
        }
		else
		{
			echo "uw leeftijd is:" . $val."<br>";
		}
	}
}
?>