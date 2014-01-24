<?php
include '../env.inc.php';

use \JasonKaz\FormBuild\Form AS FormBuilder;

function sampleForm() {

    $form = new FormBuilder();

    $form->init("#", "POST", \JasonKaz\FormBuild\FormType::Normal);
    $form->setWidths(2, 10); //Horizontal forms only
    $form->hidden(array(
        array('name' => 'hidden1'),
        array('name' => 'hidden2')
    ));

    $form->group($form->label('User'), new \JasonKaz\FormBuild\Text(array('id' => 'test', 'class' => 'sd', 'name'=>'userField')));
    $form->group($form->label('Pass'), new \JasonKaz\FormBuild\Password(array('id' => 'hello','name'=>'pass1')));
    $form->group($form->label('Email'),new \JasonKaz\FormBuild\Email(array('name'=>'emailField')));
    $form->group(
        $form->checkbox("Checkbox text", true,array('name'=>'check[]')),
        $form->checkbox("More Text", true)
    );
    $form->group($form->label('Textarea'), new \JasonKaz\FormBuild\Textarea('', array('disabled' => true)));
    $form->group($form->label('Select'), new \JasonKaz\FormBuild\Select(array('one' => 1, 'two' => 2, 'three' => 3), 'two', array('multiple' => true)));
    $form->group($form->label('Static Text'), new \JasonKaz\FormBuild\StaticText('weee'));
    $form->group($form->label('File'), new \JasonKaz\FormBuild\File(), "Help Text");
    $form->group($form->label('File'), new \JasonKaz\FormBuild\Submit('Submit',array('class'=>'btn btn-info')), "Help Text");

    echo $form->render();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bootstrap-3.0.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
                sampleForm();
            ?>
        </div>
    </div>
</div>
</body>
</html>


