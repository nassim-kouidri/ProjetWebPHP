<?php

//insert.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$Duree_Stage = '';
$Base_Remuneration = '';
$Date_Offre = '';
$Nbr_Places = '';
$Competence = '';
$Id_Entreprise = '';

if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM offre_t WHERE Id_Offre='".$form_data->Id_Offre."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['Duree_Stage'] = $row['Duree_Stage'];
		$output['Base_Remuneration'] = $row['Base_Remuneration'];
		$output['Date_Offre'] = $row['Date_Offre'];
		$output['Nbr_Places'] = $row['Nbr_Places'];
		$output['Competence'] = $row['Competence'];
		$output['Id_Entreprise'] = $row['Id_Entreprise'];
	}
}
elseif($form_data->action == "Delete")
{
	$query = "
	DELETE FROM offre_t WHERE Id_Offre='".$form_data->Id_Offre."'
	";
	$statement = $connect->prepare($query);
	if($statement->execute())
	{
		$output['message'] = 'Utilisateur supprimer !';
	}
}
else
{
	if(empty($form_data->Duree_Stage))
	{
		$error[] = 'First Name is Required';
	}
	else
	{
		$Duree_Stage = $form_data->Duree_Stage;
	}

	if(empty($form_data->Base_Remuneration))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Base_Remuneration = $form_data->Base_Remuneration;
	}

	if(empty($form_data->Date_Offre))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Date_Offre = $form_data->Date_Offre;
	}

if(empty($form_data->Nbr_Places))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Nbr_Places = $form_data->Nbr_Places;
	}
if(empty($form_data->Competence))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Competence = $form_data->Competence;
	}
	if(empty($form_data->Id_Entreprise))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Id_Entreprise = $form_data->Id_Entreprise;
	}


	if(empty($error))
	{
		if($form_data->action == 'Insert')
		{
			$data = array(
				':Duree_Stage'		=>	$Duree_Stage,
				':Base_Remuneration'		=>	$Base_Remuneration,
				':Date_Offre'		=>	$Date_Offre,
				':Nbr_Places'		=>	$Nbr_Places,
				':Competence'		=>	$Competence,
				':Id_Entreprise'		=>	$Id_Entreprise
			);
			$query = "
			INSERT INTO offre_t (Duree_Stage, Base_Remuneration, Date_Offre, Nbr_Places, Competence, Id_Entreprise) VALUES (:Duree_Stage, :Base_Remuneration, :Date_Offre, :Nbr_Places, :Competence, (SELECT Id_Entreprise FROM entreprise_t WHERE Nom_Entreprise = :Id_Entreprise))
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
				':Duree_Stage'	=>	$Duree_Stage,
				':Base_Remuneration'	=>	$Base_Remuneration,
				':Date_Offre'	=>	$Date_Offre,
				':Nbr_Places'	=>	$Nbr_Places,
				':Competence'	=>	$Competence,
				':Id_Entreprise'	=>	$Id_Entreprise,
				':Id_Offre'			=>	$form_data->Id_Offre
			);
			$query = "
			UPDATE offre_t 
			SET Duree_Stage = :Duree_Stage, Base_Remuneration = :Base_Remuneration, Date_Offre = :Date_Offre, Nbr_Places = :Nbr_Places, Competence = :Competence, Id_Entreprise = :Id_Entreprise
			WHERE Id_Offre = :Id_Offre
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