<?php
$test = false;
$errors =  [];
$data = array_map('trim', $_POST);
$reasons = [
    'stage' => 'Pour un stage',
    'emploi' => 'Pour un emploi',
    'renseignement' => 'Pour un renseignement',
];

if (!empty($data)) {
    $choices = ['stage', 'emploi', 'renseignement'];
    $error = [
        'Le champ "Nom" ne peut pas être vide',
        'Le champ "Nom" ne peut pas dépasser 80 caractères',
        'Le champ "Prénom" ne peut pas être vide',
        'Le champ "Prénom" ne peut pas être vide 80 caractères',
        'L\'élément ' . $data['select'] . ' dans le champs "Sujet" n\'est pas correct',
        'Un message est requis pour l\'envoi du formulaire '
    ];

    if (empty($data['lastname'])) {
        $errors['lastnameEmpty'] = $error[0];
    }

    if (strlen($data['lastname']) > 80) {
        $errors['toLongLastname'] = $error[1];
    }

    if (empty($data['firstname'])) {
        $errors['firstnameEmpty'] = $error[2];
    }

    if (strlen($data['firstname']) > 80) {
        $errors['toLongfirstName'] = $error[3];
    }

    if (!in_array($data['select'], $choices)) {
        $errors['notInSelect'] = $error[4];
    }

    if (empty($data['message'])) {
        $errors['noMessage'] = $error[5];
    }

    
}
