<?php

$nu = array($_POST['q'],$_POST['w'],$_POST['r']);

if($nu[0]<$nu[1]&&$nu[0]<$nu[2])
	{	
		if($nu[1]<$nu[2])
			{
				echo "$nu[0],$nu[1],$nu[2]";
			}
			else
				{
					echo "$nu[0],$nu[2],$nu[1]";
				}
	
	}elseif ($nu[1]<$nu[0]&&$nu[1]<$nu[2]) 
			{
				if($nu[0]<$nu[2])
				{
					echo "$nu[1],$nu[0],$nu[2]";
				}
				else
					{
						echo "$nu[1],$nu[2],$nu[0]";
					}
			}elseif ($nu[2]<$nu[1]&&$nu[2]<$nu[0]) 
					{if($nu[1]<$nu[0])
							{
								echo "$nu[2],$nu[1],$nu[0]";
							}
							else
								{
									echo "$nu[2],$nu[0],$nu[1]";
								}
					}