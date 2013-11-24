<?php
// specify a directory to write data to:
$target_path = "d/";

// get file name from POST data and append to target_path:
$target_path = $target_path . urlencode(trim($_POST['u'])) . "." . urlencode(trim($_POST['d'])) . "." . basename( $_FILES['f']['name']); 

// get uploaded data and save to target_path; success slient / fail silent.
// uncomment echo statments for debugging only:
if(move_uploaded_file($_FILES['f']['tmp_name'], $target_path)) {
	//echo "The file ".  basename( $_FILES['uploadedfile']['name']) . " has been uploaded.";
} else{
	//echo "There was an error uploading the file.";
}
?>
