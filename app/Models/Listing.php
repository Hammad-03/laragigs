<?php

namespace App\Models;

Class Listing {
    public static function all() {
    return [
        [
            'id' => 1,
            'title' => 'Title 1',
            'description' => 'Description 1'
        ],
        [
            'id' => 2,
            'title' => 'Title 2',
            'description' => 'Description 2'
        ],
       [
            'id' => 3,
            'title' => 'Title 3',
            'description' => 'Description 3'
        ]

       ];
    }

    public static function find($id) {
           $listings = self::all();

           foreach ($listings as $listing) {
               if ($listing['id'] == $id) {
                   return $listing;
               }
           }
        }
}