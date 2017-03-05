<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nette forms</title>
		<link rel="stylesheet" href="../../libs/twbs/bootstrap/dist/css/bootstrap.min.css">
	</head>
	<body>
<main class="container-fluid">
	<section class="row">
		<article class="col-md-8">
<?php
require_once __DIR__."/../_loader.php";

use Nette\Forms\Form as Form;
$form = new Form;
$form->setRenderer(new \Lib\nette\BootstrapRenderer);

$form->addGroup('Personal data');
$form->addText('name', 'Name:');
$form->addEmail('email', 'Email:');
$form->addPassword('password', 'Password:');
$form->addInteger('age', 'Your age:');
$form->addTextArea('about', 'About:');


$form->addGroup('Files');
$form->addUpload('file', 'File:');
$form->addMultiUpload('files', 'Files:');


$form->addGroup('Selects');
$sex = ['m' => 'male', 'f' => 'female'];
$form->addRadioList('gender', 'Gender:', $sex);

$colors = ['r' => 'red', 'g' => 'green', 'b' => 'blue'];
$form->addCheckboxList('colors', 'Colors:', $colors);

$countries = [
    'Europe' => ['cz' => 'Czech republic', 'sk' => 'Slovakia', 'uk' => 'United Kingdom'],
    'ca' => 'Canada', 'us' => 'USA', '?'  => 'Other'
];
$form->addSelect('country', 'Country:', $countries)->setPrompt('Pick a country');
$form->addMultiSelect('options', 'Pick many:', $countries);


$form->addGroup('Other');
$form->addButton('someButton', 'Some button');
$form->addImage('imageButton', 'image-button.png');


$form->addGroup('Containers');
$sub1 = $form->addContainer('first');
$sub1->addText('name', 'Your name:');
$sub1->addEmail('email', 'Email:');

$sub2 = $form->addContainer('second');
$sub2->addText('name', 'Your name:');
$sub2->addEmail('email', 'Email:');

$form->addGroup('Submit');
$form->addCheckbox('agree', 'I agree with terms')->setRequired('You must agree with our terms.');
$form->addHidden('user_id');
$form->addSubmit('send', 'Submit');

if($form->isSuccess()) {
	$values = $form->getValues(true);
	echo "<pre>".var_export($values, true)."</pre>";
	\Lib\nette\Forms::fixFormValues($values);
	echo "<pre>".var_export($values, true)."</pre>";
}

echo $form;
?>
		</article>
	</section>
</main>
	</body>
</html>
