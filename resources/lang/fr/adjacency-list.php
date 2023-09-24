<?php

return [
    'actions' => [
        'add' => [
            'label' => 'Ajouter un élémént',
            'modal' => [
                'heading' => 'Ajouter un élément',
                'actions' => [
                    'create' => 'Créer',
                ],
            ],
        ],

        'add-child' => [
            'label' => 'Ajouter un enfant',
            'modal' => [
                'heading' => 'Ajouter un enfant',
                'actions' => [
                    'create' => 'Créer',
                ],
            ],
        ],

        'edit' => [
            'label' => 'Modifier',
            'modal' => [
                'heading' => 'Modifier un élément',
                'actions' => [
                    'save' => 'Enregistrer',
                ],
            ],
        ],

        'delete' => [
            'label' => 'Supprimer',
            'modal' => [
                'heading' => 'Supprimer un élément',
                'actions' => [
                    'confirm' => 'Confirmer',
                ],
            ],
        ],

        'toggle-children' => [
            'label' => 'Afficher / Masquer les enfants',
        ],

        'reorder' => [
            'label' => 'Réorganiser',
        ],
    ],

    'items' => [
        'empty' => 'Aucun élément',
        'label' => 'Label',
        'untitled' => 'Sans titre',
    ],
];
