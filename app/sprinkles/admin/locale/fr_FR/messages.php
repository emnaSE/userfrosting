<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

/**
 * French message token translations for the 'admin' sprinkle.
 *
 * @author Louis Charette
 */

return [
    'ACTIVITY' => [
        1 => 'Activité',
        2 => 'Activités',

        'LAST' => 'Dernière activité',
        'PAGE' => 'Une liste des activités des utilisateurs',
        'TIME' => "Date de l'activité"
    ],

    'CACHE' => [
        'CLEAR'             => 'Vider le cache',
        'CLEAR_CONFIRM'     => 'Voulez-vous vraiment supprimer le cache du site?',
        'CLEAR_CONFIRM_YES' => 'Oui, vider le cache',
        'CLEARED'           => 'Cache effacé avec succès !'
    ],

    'DASHBOARD'             => 'Tableau de bord',
    'DELETE_MASTER'         => 'Vous ne pouvez pas supprimer le compte principal !',
    'DELETION_SUCCESSFUL'   => "L'utilisateur <strong>{{user_name}}</strong> a été supprimé avec succès.",
    'DETAILS_UPDATED'       => 'Les détails du compte de <strong>{{user_name}}</strong> ont été mis à jour',
    'DISABLE_MASTER'        => 'Vous ne pouvez pas désactiver le compte principal !',
    'DISABLE_SELF'          => 'Vous ne pouvez pas désactiver votre propre compte !',
    'DISABLE_SUCCESSFUL'    => "Le compte de l'utilisateur <strong>{{user_name}}</strong> a été désactivé avec succès.",

    'ENABLE_SUCCESSFUL' => "Le compte de l'utilisateur <strong>{{user_name}}</strong> a été activé avec succès.",

    'GROUP' => [
        1 => 'Groupe',
        2 => 'Groupes',

        'CREATE'              => 'Créer un groupe',
        'CREATION_SUCCESSFUL' => 'Successfully created group <strong>{{name}}</strong>',
        'DELETE'              => 'Supprimer le groupe',
        'DELETE_CONFIRM'      => 'Êtes-vous certain de vouloir supprimer le groupe <strong>{{name}}</strong>?',
        'DELETE_DEFAULT'      => "Vous ne pouvez pas supprimer le groupe <strong>{{name}}</strong> parce que c'est le groupe par défaut pour les utilisateurs nouvellement enregistrés.",
        'DELETE_YES'          => 'Oui, supprimer le groupe',
        'DELETION_SUCCESSFUL' => 'Groupe <strong>{{name}}</strong> supprimé avec succès',
        'EDIT'                => 'Modifier le groupe',
        'ICON'                => 'Icône',
        'ICON_EXPLAIN'        => 'Icône des membres du groupe',
        'INFO_PAGE'           => 'Informations sur le groupe {{name}}',
        'MANAGE'              => 'Gérer le groupe',
        'NAME'                => 'Nom du groupe',
        'NAME_EXPLAIN'        => 'Spécifiez le nom du groupe',
        'NOT_EMPTY'           => 'Vous ne pouvez pas le faire car il y a encore des utilisateurs associés au groupe <strong>{{name}}</strong>.',
        'PAGE_DESCRIPTION'    => 'Une liste des groupes pour votre site. Fournit des outils de gestion pour éditer et supprimer des groupes.',
        'UPDATE'              => 'Les détails du groupe <strong>{{name}}</strong> ont été enregistrés'
    ],

    'MANUALLY_ACTIVATED'    => 'Le compte de {{user_name}} a été activé manuellement',
    'MASTER_ACCOUNT_EXISTS' => 'Le compte principal existe déjà !',
    'MIGRATION'             => [
        'REQUIRED'          => 'Mise à jour de la base de données requise'
    ],

    'PERMISSION' => [
        1 => 'Autorisation',
        2 => 'Autorisations',

        'ASSIGN_NEW'        => 'Assigner une nouvelle autorisation',
        'HOOK_CONDITION'    => 'Hook/Conditions',
        'MANAGE'            => 'Gestion des autorisations',
        'PAGE_DESCRIPTION'  => 'Une liste des autorisations pour votre site. Fournit des outils de gestion pour modifier et supprimer des autorisations.',
        'UPDATE'            => 'Mettre à jour les autorisations'
    ],

    'ROLE' => [
        1 => 'Rôle',
        2 => 'Rôles',

        'ASSIGN_NEW'          => 'Assigner un nouveau rôle',
        'CREATE'              => 'Créer un rôle',
        'CREATION_SUCCESSFUL' => 'Rôle <strong>{{name}}</strong> créé avec succès',
        'DELETE'              => 'Supprimer le rôle',
        'DELETE_CONFIRM'      => 'Êtes-vous certain de vouloir supprimer le rôle <strong>{{name}}</strong>?',
        'DELETE_DEFAULT'      => "Vous ne pouvez pas supprimer le rôle <strong>{{name}}</strong> parce que c'est un rôle par défaut pour les utilisateurs nouvellement enregistrés.",
        'DELETE_YES'          => 'Oui, supprimer le rôle',
        'DELETION_SUCCESSFUL' => 'Rôle <strong>{{name}}</strong> supprimé avec succès',
        'EDIT'                => 'Modifier le rôle',
        'HAS_USERS'           => "Vous ne pouvez pas le faire parce qu'il y a encore des utilisateurs qui ont le rôle <strong>{{name}}</strong>.",
        'INFO_PAGE'           => "Page d'information pour le rôle {{name}}",
        'MANAGE'              => 'Gérer les rôles',
        'NAME'                => 'Nom du rôle',
        'NAME_EXPLAIN'        => 'Spécifiez le nom du rôle',
        'NAME_IN_USE'         => 'Un rôle nommé <strong>{{name}}</strong> existe déjà',
        'PAGE_DESCRIPTION'    => 'Une liste des rôles de votre site. Fournit des outils de gestion pour modifier et supprimer des rôles.',
        'PERMISSIONS_UPDATED' => 'Autorisations mises à jour pour le rôle <strong>{{name}}</strong>',
        'UPDATED'             => 'Détails mis à jour pour le rôle <strong>{{name}}</strong>'
    ],

    'SYSTEM_INFO' => [
        '@TRANSLATION'  => 'Informations sur le système',

        'DB_NAME'       => 'Base de donnée',
        'DB_VERSION'    => 'Version DB',
        'DIRECTORY'     => 'Répertoire du projet',
        'PHP_VERSION'   => 'Version de PHP',
        'SERVER'        => 'Logiciel server',
        'SPRINKLES'     => 'Sprinkles chargés',
        'UF_VERSION'    => 'Version de UserFrosting',
        'URL'           => 'Url racine'
    ],

    'USER' => [
        1 => 'Utilisateur',
        2 => 'Utilisateurs',

        'ADMIN' => [
            'CHANGE_PASSWORD'    => 'Changer le mot de passe',
            'SEND_PASSWORD_LINK' => "Envoyer à l'utilisateur un lien qui lui permettra de choisir son propre mot de passe",
            'SET_PASSWORD'       => "Définissez le mot de passe de l'utilisateur comme"
        ],

        'ACTIVATE'          => "Autoriser l'utilisateur",
        'CREATE'            => 'Créer un utilisateur',
        'CREATED'           => "L'utilisateur <strong>{{user_name}}</strong> a été créé avec succès",
        'DELETE'            => "Supprimer l'utilisateur",
        'DELETE_CONFIRM'    => "Êtes-vous certain de vouloir supprimer l'utilisateur <strong>{{name}}</strong>?",
        'DELETE_YES'        => "Oui, supprimer l'utilisateur",
        'DISABLE'           => "Désactiver l'utilisateur",
        'EDIT'              => "Modifier l'utilisateur",
        'ENABLE'            => "Activer l'utilisateur",
        'INFO_PAGE'         => "Page d'information de l'utilisateur pour {{name}}",
        'PAGE_DESCRIPTION'  => "Une liste des utilisateurs de votre site. Fournit des outils de gestion incluant la possibilité de modifier les détails de l'utilisateur, d'activer manuellement les utilisateurs, d'activer / désactiver les utilisateurs et plus.",
        'LATEST'            => 'Derniers utilisateurs',
        'VIEW_ALL'          => 'Voir tous les utilisateurs'
    ],
    'X_USER' => [
        0 => 'Aucun utilisateur',
        1 => '{{plural}} utilisateur',
        2 => '{{plural}} utilisateurs'
    ]
];
