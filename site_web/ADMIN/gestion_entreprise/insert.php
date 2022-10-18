<?php

//insert.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$Nom_Entreprise = '';
$Secteur_Activite = '';
$Localite = '';
$Nbr_Stagiere_Accepte = '';


if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM entreprise_t WHERE Id_Entreprise='".$form_data->Id_Entreprise."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['Nom_Entreprise'] = $row['Nom_Entreprise'];
		$output['Secteur_Activite'] = $row['Secteur_Activite'];
		$output['Localite'] = $row['Localite'];
		$output['Nbr_Stagiere_Accepte'] = $row['Nbr_Stagiere_Accepte'];
	}
}
elseif($form_data->action == "Delete")
{
	$query = "
	DELETE FROM entreprise_t WHERE Id_Entreprise='".$form_data->Id_Entreprise."'
	";
	$statement = $connect->prepare($query);
	if($statement->execute())
	{
		$output['message'] = 'Utilisateur supprimer !';
	}
}
else
{
	if(empty($form_data->Nom_Entreprise))
	{
		$error[] = 'First Name is Required';
	}
	else
	{
		$Nom_Entreprise = $form_data->Nom_Entreprise;
	}

	if(empty($form_data->Secteur_Activite))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Secteur_Activite = $form_data->Secteur_Activite;
	}

	if(empty($form_data->Localite))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Localite = $form_data->Localite;
	}

if(empty($form_data->Nbr_Stagiere_Accepte))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Nbr_Stagiere_Accepte = $form_data->Nbr_Stagiere_Accepte;
	}



	if(empty($error))
	{
		if($form_data->action == 'Insert')
		{
			$data = array(
				':Nom_Entreprise'		=>	$Nom_Entreprise,
				':Secteur_Activite'		=>	$Secteur_Activite,
				':Localite'		=>	$Localite,
				':Nbr_Stagiere_Accepte'		=>	$Nbr_Stagiere_Accepte,
			);
			$query = "
			INSERT INTO entreprise_t (Nom_Entreprise, Secteur_Activite, Localite, Nbr_Stagiere_Accepte) VALUES (:Nom_Entreprise, :Secteur_Activite, :Localite, :Nbr_Stagiere_Accepte)
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
				':Nom_Entreprise'	=>	$Nom_Entreprise,
				':Secteur_Activite'	=>	$Secteur_Activite,
				':Localite'	=>	$Localite,
				':Nbr_Stagiere_Accepte'	=>	$Nbr_Stagiere_Accepte,
				':Id_Entreprise'			=>	$form_data->Id_Entreprise
			);
			$query = "
			UPDATE entreprise_t 
			SET Nom_Entreprise = :Nom_Entreprise, Secteur_Activite = :Secteur_Activite, Localite = :Localite, Nbr_Stagiere_Accepte = :Nbr_Stagiere_Accepte
			WHERE Id_Entreprise = :Id_Entreprise
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