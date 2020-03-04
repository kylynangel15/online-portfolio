<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function getPortfolio(Request $request)
    {
        $m7_imgs = $this->imgloop(5,'murasaki/m7_');
        $hey_imgs = $this->imgloop(3,'heyvideo/hey_');
        $cha_imgs = $this->imgloop(3,'chamoji/cha_');
        $nst_imgs = $this->imgloop(6,'nstpictures/nst_');
        $gnn_imgs = $this->imgloop(4,'gnn/gnn_');

        return response()->json([
            '0' =>  [
                        'title' => 'Murasaki7',
                        'subtitle' => 'Puzzle RPG Game',
                        'cap'   => "Visit 
                                    <a href='http://www.murasaki7.com/en' target='_blank'>Murasaki7 EN</a> | 
                                    <a href='http://www.murasaki7.com/jp' target='_blank'>Murasaki7 JP</a>",
                        'cover' => asset('assets/images/murasaki/murasaki7.png'),
                        'site'  => "https://www.murasaki7.com/en",
                        'imgs'  =>  [   
                                        $m7_imgs
                                    ]
                    ],
            '1' =>  [
                        'title' => 'Heyvideo',
                        'subtitle' => 'Video Maker App',
                        'cap'   => "Visit 
                                    <a href='http://heyvideo.app/en' target='_blank'>Heyvideo EN</a> | 
                                    <a href='http://heyvideo.app/jp' target='_blank'>Heyvideo JP</a>",
                        'cover' => asset('assets/images/heyvideo/heyvideo.png'),
                        'site'  => "https://heyvideo.app/en",
                        'imgs'  =>  [   
                                        $hey_imgs
                                    ]
                        ],
            '2' =>  [
                        'title' => 'Chamoji',
                        'subtitle' => 'Face Filter App',
                        'cap'   => "Visit 
                                    <a href='http://chamoji.com/en' target='_blank'>Chamoji EN</a> | 
                                    <a href='http://chamoji.com/jp' target='_blank'>Chamoji JP</a>",
                        'cover' => asset('assets/images/chamoji/chamoji.png'),
                        'site'  => "https://www.chamoji.com/en",
                        'imgs'  =>  [   
                                        $cha_imgs
                                    ]
                        ],
            '3' =>  [
                        'title' => 'NST Pictures',
                        'subtitle' => 'Cinematic Wedding Films',
                        'cap'   => "Visit 
                                    <a href='https://nstpictures.com/' target='_blank'>NST Pictures</a>",
                        'cover' => asset('assets/images/nstpictures/nstpicture.png'),
                        'site'  => "https://nstpictures.com/",
                        'imgs'  =>  [   
                                        $nst_imgs
                                    ]
                        ],
            '4' =>  [
                        'title' => 'Game News Ninja',
                        'subtitle' => 'Game News, Articles, Blogs',
                        'cap'   => "Visit 
                                    <a href='https://gamenewsninja.com' target='_blank'>Game News Ninja</a>",
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

    public function getSkills(Request $request)
    {   
        return response()->json([ 
        ['title' =>  'Laravel',     'img'   => asset('assets/images/laravel.png'),  'rate' => '70'],
        ['title' =>  'Wordpress',   'img'   => asset('assets/images/wordpress.png'),'rate' => '60'],
        ['title' =>  'PHP',         'img'   => asset('assets/images/php.png'),      'rate' => '75'],
        ['title' =>  'C++',         'img'   => asset('assets/images/devc.png'),     'rate' => '60'],
        ['title' =>  'VB.NET',      'img'   => asset('assets/images/vb.net.png'),   'rate' => '60'],
        ['title' =>  'SQL Database','img'   => asset('assets/images/mysql.png'),    'rate' => '70'],
        ['title' =>  'NPM',         'img'   => asset('assets/images/npm.png'),      'rate' => '50'],
        ['title' =>  'YARN',        'img'   => asset('assets/images/yarn.png'),     'rate' => '50'],
        ['title' =>  'REST API',    'img'   => asset('assets/images/restapi.png'),  'rate' => '70'],
        ['title' =>  'Vue JS',      'img'   => asset('assets/images/vue.png'),      'rate' => '70'],
        ['title' =>  'SASS',        'img'   => asset('assets/images/sass.png'),     'rate' => '75'],
        ['title' =>  'HTML',        'img'   => asset('assets/images/html.png'),     'rate' => '75'],
        ['title' =>  'CSS',         'img'   => asset('assets/images/css.png'),      'rate' => '75'],
        ['title' =>  'Javascript',  'img'   => asset('assets/images/js.png'),       'rate' => '75'],
        ['title' =>  'Photoshop',   'img'   => asset('assets/images/ps.png'),       'rate' => '75'],
        ]);
    }


    public function downloadResume(Request $request)
    {
        return Storage::disk('public')->download('kylyn_angel_luterte_resume.pdf');
    }


}