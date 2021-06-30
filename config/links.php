<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Links identifiers length
    |--------------------------------------------------------------------------
    |
    | This option defines the length of id generated for shortened urls.
    | Fewer characters means there will be a greater chance of collisions,
    | please adapt accordingly to the number of your installation.
    | Only newly created links will be affected.
    |
    */

    'length' => 5,

    /*
    |--------------------------------------------------------------------------
    | Links identifiers characters
    |--------------------------------------------------------------------------
    |
    | This option defines the characters used to generate links, the provided
    | default omits ambiguous chars such as O I 1.
    |
    */

    'characters' => 'ABCDEFGHJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz123456789',

];
