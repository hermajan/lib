<?php require_once __DIR__."/../../_loader.php"; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bootstrap 4 renderer for Nette Forms</title>
		<link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
	<body>
<main class="container-fluid">
	<section class="row">
		<article class="col-md-8">
<?php use Nette\Forms\Form as Form;
$form = new Form;
$form->setRenderer(new \Lib\nette\renderers\Bootstrap4);

require_once "form.php";
echo setFormForRenderers($form); ?>
		</article>
	</section>
</main>
	</body>
</html>
