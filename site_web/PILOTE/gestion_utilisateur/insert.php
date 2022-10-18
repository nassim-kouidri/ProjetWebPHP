<?php

//insert.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$Nom = '';
$Prenom = '';
$Centre = '';
$Typee = '';
$Pseudo = '';
$Mot_De_Passe = '';
$Id_Promotion = '';

if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM utilisateur_t WHERE Id_Utilisateur='".$form_data->Id_Utilisateur."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['Nom'] = $row['Nom'];
		$output['Prenom'] = $row['Prenom'];
		$output['Centre'] = $row['Centre'];
		$output['Typee'] = $row['Typee'];
		$output['Pseudo'] = $row['Pseudo'];
		$output['Mot_De_Passe'] = $row['Mot_De_Passe'];
		$output['Id_Promotion'] = $row['Id_Promotion'];
	}
}
elseif($form_data->action == "Delete")
{
	$query = "
	DELETE FROM utilisateur_t WHERE Id_Utilisateur='".$form_data->Id_Utilisateur."'
	";
	$statement = $connect->prepare($query);
	if($statement->execute())
	{
		$output['message'] = 'Utilisateur supprimer !';
	}
}
else
{
	if(empty($form_data->Nom))
	{
		$error[] = 'First Name is Required';
	}
	else
	{
		$Nom = $form_data->Nom;
	}

	if(empty($form_data->Prenom))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Prenom = $form_data->Prenom;
	}

	if(empty($form_data->Centre))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Centre = $form_data->Centre;
	}

if(empty($form_data->Typee))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Typee = $form_data->Typee;
	}
if(empty($form_data->Pseudo))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Pseudo = $form_data->Pseudo;
	}
if(empty($form_data->Mot_De_Passe))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Mot_De_Passe = $form_data->Mot_De_Passe;
	}
	if(empty($form_data->Id_Promotion))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Id_Promotion = $form_data->Id_Promotion;
	}


	if(empty($error))
	{
		if($form_data->action == 'Insert')
		{
			$data = array(
				':Nom'		=>	$Nom,
				':Prenom'		=>	$Prenom,
				':Centre'		=>	$Centre,
				':Typee'		=>	$Typee,
				':Pseudo'		=>	$Pseudo,
				':Mot_De_Passe'		=>	$Mot_De_Passe,
				':Id_Promotion'		=>	$Id_Promotion
			);
			$query = "
			INSERT INTO utilisateur_t (Nom, Prenom, Centre, Typee, Pseudo, Mot_De_Passe, Id_Promotion) VALUES (:Nom, :Prenom, :Centre, :Typee, :Pseudo , :Mot_De_Passe ,(SELECT Id_Promotion FROM promotion_t WHERE Promotion = :Id_Promotion))
			";
			$statement = $connect->prepare($query);
			if($statement->execute($data))
			{
				$message = 'Utilisateur ajouter !';
			}
		}
		if($form_data->action == 'Edit')
		{
			$data = array(
				':Nom'	=>	$Nom,
				':Prenom'	=>	$Prenom,
				':Centre'	=>	$Centre,
				':Typee'	=>	$Typee,
				':Pseudo'	=>	$Pseudo,
				':Mot_De_Passe'	=>	$Mot_De_Passe,
				':Id_Promotion'	=>	$Id_Promotion,
				':Id_Utilisateur'			=>	$form_data->Id_Utilisateur
			);
			$query = "
			UPDATE utilisateur_t 
			SET Nom = :Nom, Prenom = :Prenom, Centre = :Centre, Typee = :Typee, Pseudo = :Pseudo, Mot_De_Passe = :Mot_De_Passe, Id_Promotion = :Id_Promotion
			WHERE Id_Utilisateur = :Id_Utilisateur
			";

			$statement = $connect->prepare($query);
			if($statement->execute($data))
			{
				$message = 'Utilisateur modifier !';
			}
		}
	}
	else
	{
		$validation_error = implode(", ", $error);
	}

	$output = array(
		'error'		=>	$validation_error,
		'message'	=>	$message
	);

}



echo json_encode($output);

?>