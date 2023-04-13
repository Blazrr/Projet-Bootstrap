<?php

require 'classes/Course.php';

$cours1 = new Course(
    "Les bases de PHP", 
    "https://picsum.photos/seed/picsum/600/300",
    "Adapté aux débutants",
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.",
    [
        'Les variables',
        'Les conditions',
        'Les boucles',
        'Les tableaux',
        'Les classes',
        'Interaction avec une base de données'
    ],
    70,
    790,
    '14/03/2022 au 18/03/2022',
    'Nicolas R.',
    'A distance',
    'Débutant'
);

$cours2 = new Course(
    'Gestion de projet',
    'https://picsum.photos/seed/picsum/600/300',
    'Piloter des projets au quotidien',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [
        'Cahier des charges',
        'Les méthodes des gestions de projets',
        'Les intervenants',
        'La communication'
    ],
    35,
    490,
    'sept 2022',
    'Nicolas R.',
    'A distance',
    'Intermédiaire'
);

$cours3 = new Course(
    'SEO',
    'https://picsum.photos/seed/picsum/600/300',
    'Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [],
    35,
    490,
    'juin 2023',
    'Pierre C.',
    'Présentiel',
    'Débutant'
);

$cours4 = new Course(
    'Community manager',
    'https://picsum.photos/seed/picsum/600/300',
    'Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [],
    35,
    490,
    'juin 2023',
    'Pierre C.',
    'Présentiel',
    'Débutant'
);

$cours5 = new Course(
    'Administrateur système',
    'https://picsum.photos/seed/picsum/600/300',
    'Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [],
    35,
    490,
    'juin 2023',
    'Pierre C.',
    'Présentiel',
    'Débutant'
);

$cours = [$cours1, $cours2, $cours3, $cours4, $cours5];

//var_dump($cours);