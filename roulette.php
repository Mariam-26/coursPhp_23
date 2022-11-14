<?php
function nbrAleatoire(){

	return rand(0, 36);
}
echo nbrAleatoire();
// $roulette = rand(0, 36);

// if ($roulette % 2) {
//   echo "$roulette est impair";
// } else {
//   echo "$roulette est pair";
// };

// var_dump($argv);
// $val = $argv[1];
// echo $val; 

























							// if((($nbr%2==0)&&($_POST['nbr']=="1"))||(($nbr%2==1)&&($_POST['nbr']=="2")))
							// {
							// 	if($_POST['nbr']=="0")
							// 	{
							// 	echo " sur un nombre pair et " .$roulette. "et le resultat est";
							// 	}	
							// 	else
							// 	{
							// 	echo "Vus aviez parié sur un nombre  impair " .$roulette;
							// 	}
							// }
							// else
							// {
							// 	if($_POST['nbr']=="1")
							// 	{
							// 	echo "Vous aviez parié sur un nombre pair " .$roulette;
							// 	}
							// 	else
							// 	{
							// 	echo "Vous aviez parié sur un nombre impair " .$roulette;
							// 	}
							// }


							

	// if(isset($_POST['Nombre']))
	// {
		
	// 	if($_POST['Mise']>$_SESSION['money'])
	// 				{
	// 					echo "Vous n'avez pas assez d'argent pour faire une telle mise".'<br>';
	// 				}

	// 				elseif(empty($_POST['Mise']))
	// 				{
	// 					echo "Entrez une mise pour jouer".'<br>';
	// 				}
	// 		if(!empty($_POST['Nombre']))
	// 			{
	// 				if(isset($_POST['Mise']))
	// 				{
	// 					$mise= $_POST['Mise'];
	// 				}					
							
	// 						$_SESSION['money']=$_SESSION['money']-$mise;
	// 						$roulette = rand (1, 36 );
	// 						if($_POST['Nombre']==$roulette)
	// 							{
	// 								echo "Youpi!".'<br>'."C'est bien le nombre " .$roulette." qui est tombé!".'<br>';
	// 								$profit= $_SESSION['money']+$mise*35;
	// 								$_SESSION['money']=($_SESSION['money']+($mise*35));
	// 								$money= $_SESSION['money'];
	// 							}
	// 						else
	// 							{
	// 								echo '<br>'."Dommage, vous avez parié sur le " .$_POST['Nombre']. " et c'est le ".$roulette." qui est sorti.".'<br>';
	// 								$money= $_SESSION['money'];
	// 								$profit= 0;
	// 							}

	// 						$conn = null;
	// 					}

	// else
	// 					{
	// 						if(isset($_POST['Mise']))
	// 						{
	// 							$mise= $_POST['Mise'];
	// 						}
	// 					$_SESSION['money']=$_SESSION['money']-$mise;
					
	// 					$roulette = rand (1, 36 );
	// 						if((($roulette%2==0)&&($_POST['parite']=="1"))||(($roulette%2==1)&&($_POST['parite']=="2")))
	// 						{
	// 							if($_POST['parite']=="1")
	// 							{
	// 							echo "Vous aviez parié sur un nombre pair et " .$roulette." l'est!".'<br>';
	// 							$profit= $_SESSION['money']+$mise*2;
	// 							$_SESSION['money']=($_SESSION['money']+($mise*2));
	// 							$money= $_SESSION['money'];
	// 							}	
	// 							else
	// 							{
	// 							echo "Vous aviez parié sur un nombre  impair et " .$roulette." l'est!".'<br>';
	// 							$profit= $_SESSION['money']+$mise*2;
	// 							$_SESSION['money']=($_SESSION['money']+($mise*2));	
	// 							$money= $_SESSION['money'];
	// 							}
	// 						}
	// 						else
	// 						{
	// 							if($_POST['parite']=="1")
	// 							{
	// 							echo "Vous aviez parié sur un nombre pair et " .$roulette." ne l'est pas!".'<br>';
	// 							}
	// 							else
	// 							{
	// 							echo "Vous aviez parié sur un nombre impair et " .$roulette." ne l'est pas!".'<br>';
	// 							}
	// 						}
	// 				}
			
	// 	}
	
?>