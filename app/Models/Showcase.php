<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Showcase extends Model
{
    use SoftDeletes;

    /**
     * The attributes default values.
     *
     * @var array
     */
    protected $attributes = ['layout' => '{}'];

    public function getLayoutAttribute($value) {
        
        $value = [
            "cells" => [
                [
                    "position" => [
                        "x" => 0,
                        "y" => 0,
                    ],
                    "size" => [
                        "width" => 2,
                        "height" => 2.5
                    ],
                    "content" => [
                        [
                            "type" => "image",
                            "position" => ["x" => 0, "y" => 0],
                            "size" => ["width" => 1, "height" => 1],
                            "image" => [
                                "url" => "brooke-cagle-39374.jpg",
                                "position" => ["x" => 0, "y" => 0],
                                "size" => ["width" => 1, "height" => 1]
                            ]
                        ]
                    ]
                ],
                [
                    "position" => [
                        "x" => 2,
                        "y" => 0,
                    ],
                    "size" => [
                        "width" => 1,
                        "height" => 1.5
                    ],
                    "content" => [
                        [
                            "type" => "product",
                            "position" => ["x" => 0, "y" => 0],
                            "size" => ["width" => 1, "height" => 1],
                            "product" => [
                                "image" => [
                                    "url" => "benjamin-bortels-324343.jpg",
                                    "position" => ["x" => 0, "y" => 0],
                                    "size" => ["width" => 1, "height" => 1]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "position" => [
                        "x" => 3,
                        "y" => 0,
                    ],
                    "size" => [
                        "width" => 1.5,
                        "height" => 1.5
                    ],
                    "content" => [
                        [
                            "type" => "product",
                            "position" => ["x" => 0, "y" => 0],
                            "size" => ["width" => 1, "height" => 1],
                            "product" => [
                                "image" => [
                                    "url" => "benjamin-bortels-324343.jpg",
                                    "position" => ["x" => 0, "y" => 0],
                                    "size" => ["width" => 1, "height" => 1]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "position" => [
                        "x" => 4.5,
                        "y" => 0,
                    ],
                    "size" => [
                        "width" => 1.5,
                        "height" => 1.5
                    ],
                    "content" => [
                        [
                            "type" => "product",
                            "position" => ["x" => 0, "y" => 0],
                            "size" => ["width" => 1, "height" => 1],
                            "product" => [
                                "image" => [
                                    "url" => "benjamin-bortels-324343.jpg",
                                    "position" => ["x" => 0, "y" => 0],
                                    "size" => ["width" => 1, "height" => 1]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "position" => [
                        "x" => 2,
                        "y" => 1.5,
                    ],
                    "size" => [
                        "width" => 1,
                        "height" => 1.5
                    ],
                    "content" => [
                        [
                            "type" => "product",
                            "position" => ["x" => 0, "y" => 0],
                            "size" => ["width" => 1, "height" => 1],
                            "product" => [
                                "image" => [
                                    "url" => "benjamin-bortels-324343.jpg",
                                    "position" => ["x" => 0, "y" => 0],
                                    "size" => ["width" => 1, "height" => 1]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "position" => [
                        "x" => 3,
                        "y" => 1.5,
                    ],
                    "size" => [
                        "width" => 3,
                        "height" => 2
                    ],
                    "content" => [
                        [
                            "type" => "image",
                            "position" => ["x" => 0, "y" => 0],
                            "size" => ["width" => 1, "height" => 1],
                            "image" => [
                                "url" => "benjamin-bortels-324343.jpg",
                                "position" => ["x" => 0, "y" => 0],
                                "size" => ["width" => 1, "height" => 1]
                            ]
                        ]
                    ]
                ],
                [
                    "position" => [
                        "x" => 0,
                        "y" =>2.5,
                    ],
                    "size" => [
                        "width" => 2,
                        "height" => 1.5
                    ],
                    "content" => [
                        [
                            "type" => "image",
                            "position" => ["x" => 0, "y" => 0],
                            "size" => ["width" => 1, "height" => 1],
                            "image" => [
                                "url" => "benjamin-bortels-324343.jpg",
                                "position" => ["x" => 0, "y" => 0],
                                "size" => ["width" => 1, "height" => 1]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        return $value;

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = ["title"];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'layout' => 'array',
    ];
}