<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $m7_imgs = $this->imgloop(5,'murasaki/m7_');
        $hey_imgs = $this->imgloop(3,'heyvideo/hey_');
        $cha_imgs = $this->imgloop(3,'chamoji/cha_');
        $nst_imgs = $this->imgloop(6,'nstpictures/nst_');
        $gnn_imgs = $this->imgloop(4,'gnn/gnn_');

        return response()->json([
            '0' =>  [
                        'title' => 'Murasaki7',
                        'cap'   => "Visit <a href='http://www.murasaki7.com/en' target='_blank'>Murasaki7</a>",
                        'cover' => asset('assets/images/murasaki/murasaki7.png'),
                        'site'  => "https://www.murasaki7.com/en",
                        'imgs'  =>  [   
                                        $m7_imgs
                                    ]
                    ],
            '1' =>  [
                        'title' => 'Heyvideo',
                        'cover' => asset('assets/images/heyvideo/heyvideo.png'),
                        'site'  => "https://heyvideo.app/en",
                        'imgs'  =>  [   
                                        $hey_imgs
                                    ]
                        ],
            '2' =>  [
                        'title' => 'Chamoji',
                        'cover' => asset('assets/images/chamoji/chamoji.png'),
                        'site'  => "https://www.chamoji.com/en",
                        'imgs'  =>  [   
                                        $cha_imgs
                                    ]
                        ],
            '3' =>  [
                        'title' => 'NST Pictures',
                        'cover' => asset('assets/images/nstpictures/nstpicture.png'),
                        'site'  => "https://nstpictures.com/",
                        'imgs'  =>  [   
                                        $nst_imgs
                                    ]
                        ],
            '4' =>  [
                        'title' => 'Game News Ninja',
                        'cover' => asset('assets/images/gnn/gnn.png'),
                        'site'  => "https://www.gamenewsninja.com",
                        'imgs'  =>  [   
                                        $gnn_imgs
                                    ]
                    ],

        ]);
    }

    function imgloop($max_img,$asset_path){
        $imgs = array();
        for ($i=1; $i <= $max_img; $i++) { 
            array_push($imgs, asset('assets/images/'.$asset_path.$i.'.png'));
        }

        return $imgs;
    }



}