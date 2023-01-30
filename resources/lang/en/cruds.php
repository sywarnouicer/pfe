<?php
return [
    'welcome' => [
        'domains' => 'Domains',
         'measures' => 'Controls',
         'controls' => 'Measurements',
         'action_plans' => "Action Plans",
         'next_controls' => 'Checks scheduled for the next 30 days',
         'control_status' => 'Measurement status',
         'control_planning' => 'Schedule measure',        
    ],
     'action' => [
         'index' => 'Action plans',
         'show' => 'Action Plan',
         'fields' => [
             'clause' => 'Clause',
             'name' => 'Name',
             'action' => 'Action plan',
             'plan_date' => 'Planning date',
             'next_date' => 'Review date',
             'rating' => 'Score',
             'objective' => 'Objective',
             'observation' => 'Observation',
             'action_plan' => 'Action Plan'
         ],
     ],
     'control' => [
         'description' => '',
         'fields' => [
             'action_plan' => 'Action Plan',
             'attributes' => 'Attributes',
             'choose_domain' => 'Choose domain',
             'choose_period' => 'Choose a period',
             'domain' => 'Domain',
             'indicator' => 'Function',
             'measure' => 'Measure',
             'model' => 'Model',
             'name' => 'Name',
             'next' => 'Next',
             'note' => 'Note',
             'objective' => 'Objective',
             'observations' => 'Observations',
             'plan_date' => 'Planning date',
             'period' => 'Period',
             'periodicity' => 'Periodicity',
             'planned' => 'Planned',
             'realisation_date' => 'Realization date',
             'realized' => 'Realized',
             'evidence' => 'Evidence',
             'score' => 'Score',
             'status' => 'State',
             'status_done' => 'Done',
             'status_todo' => 'To do',
             'status_all' => 'All',
         ],
         'checklist' => 'Checklist',
         'list' => 'List of controls',
         'edit' => 'Edit security check',
         'history' => 'Schedule',
         'make' => 'Make a check',
         'plan' => 'Schedule a check',
         'radar' => 'Security checks status',
         'title' => 'Measurements',
         'title_singular' => 'Measurement',
     ],
     'measure' => [
         'title' => 'Control',
         'fields' => [
             'domain' => 'Domain',
             'clause' => 'Clause',
             'name' => 'Name',
             'objective' => 'Objective',
             'attributes' => 'Attributes',
             'model' => 'Model',
             'indicator' => 'Indicator (Red, Orange, Green)',
             'action_plan' => 'Action Plan',
             'owner' => 'Responsible',
             'periodicity' => 'Periodicity',
         ],
         'show' => 'Control',
         'index' => 'List of controls',
         'create' => 'Add control',
         'edit' => 'Edit a control',

     ],
     'domain' => [
         'fields' => [
             'name' => 'Name',
             'description' => 'Description',
         ],
         'add' => 'Add Domain',
         'edit' => 'Edit Domain',
         'show' => 'Domain',
         'index' => 'List of domains',
         'choose' => 'Choose domain',
         'title' => 'Domain'
     ],
     'document' => [
         'title' => 'Document',
         'description' => 'Description',
         'list' => 'List of documents',
         'index' => 'Documents',
         'fields' => [
             'name' => 'Name',
             'control' => 'Control',
             'size' => 'Size',
             'hash' => 'Hash',
         ],
         'model' => [
             'control' => 'Control Model',
             'report' => 'Magamenet meeting report',
         ],
         'count' => 'Number of documents',
         'total_size' => 'Total Size',
     ],
     'export' => [
         'index' => 'Export Data',
     ],
     'login' => [
         'title' => 'Enter a password',
         'identification' => 'Identification',
         'connection' => 'Connection',
     ],
     'user' => [
         'index' => 'List of users',
         'edit' => 'Edit User',
         'add' => 'Add User',
         'fields' => [
             'login' => 'Login',
             'name' => 'Name',
             'title' => 'Title',
             'role' => 'Role',
             'password' => 'Password',
             'email' => 'email',
            'language' => 'Language',
         ],
         'roles' => [
             'admin' => 'Administrator',
             'user' => 'User',
             'auditor' => 'Auditor'
         ],
     ],
];