<?php
return [
    'control' => [
        'description' => '',
        'fields' => [
            'action_plan' => 'Plan d\'actions',
            'attributes' => 'Attributs',
            'choose_domain' => 'Choisir un domaine',
            'choose_period' => 'Choisir une periode',
            'domain' => 'Domaine',
            'indicator' => 'Fonction',
            'measure' => 'Mesure',
            'model' => 'Modèle',
            'name' => 'Nom',
            'next' => 'Suivant',
            'note' => 'Note',
            'objective' => 'Objectif',
            'observations' => 'Observations',
            'plan_date' => 'Date de plannification',
            'period' => 'Période',
            'periodicity' => 'Périodicité',
            'planned' => 'Planifié',
            'realisation_date' => 'Date de réalisation',
            'realized' => 'Réalisé',
            'report' => 'Rapport',
            'score' => 'Score',
            'status' => 'Etat',
            'status_done' => 'Fait',
            'status_todo' => 'A faire',
            'status_all' => 'Tous',
        ],
        'list' => 'Liste des contrôles',
        'edit' => 'Modifier un contrôle de sécurité',
        'history' => 'Planning',
        'make' => 'Réaliser un contrôle',
        'title' => 'Contrôles',
        'title_singular' => 'Contrôle',
    ],
    'measure' => [
        'title' => 'Mesure',
        'fields' => [
            'clause' => 'Clause',
            'name' => 'Nom',
            'objective' => 'Objectif',
            'attributes' => 'Attributes',
            'model' => 'Modèle',
            'indicator' => 'Indicateur (Rouge, Orange, Vert)',
            'cation_plan' => 'Plan d\'action',
            'responsible' => 'Responsable',
            'periodicity' => 'Périodicité'
        ]
    ],
    'domain' => [
        'title' => [
            'add' => 'Ajouter un domaine',
            'edit' => 'Modifier un domaine',
            'show' => 'Domaine',
            'index' => 'Liste des domaines'
        ],
        'fields' => [
            'name' => 'Nom',
            'description' => 'Description',
        ],
        'choose' => 'Choisir un domaine'
    ],
    'document' => [
        'description' => 'Description',
        'title' => [
            'list' => 'Liste des documents',
            'index' => 'Documents',
            'model' => 'Modèles de document'
        ],
        'fields' => [
            'name' => 'Nom',
            'control' => 'Contrôle',
            'size' => 'Taille',
            'hash' => 'Hash',
        ],
        'model' => [
            'control' => 'Modèle de Contrôle',
            'report' => 'Rapport de pilotage',

        ],
        'count' => 'Nombre de documents',
        'total_size' => 'Taille totale',
    ]
];
