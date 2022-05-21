<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Option;

class DefaultDataInsert extends Seeder
{
    

    public function run()
    {

        $questions = [
            [
                'title' => 'PHP stands for -',
                'options' =>[ 
                    [
                        'title' => 'Hypertext Preprocessor',
                        'is_right' => 1
                    ],[
                        'title' => 'Pretext Hypertext Preprocessor',
                        'is_right' => null
                    ],[
                        'title' => 'Personal Home Processor',
                        'is_right' => null
                    ],[
                        'title' => 'None of the above',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Who is known as the father of PHP?',
                'options' =>[ 
                    [
                        'title' => 'Drek Kolkevi',
                        'is_right' => null
                    ],[
                        'title' => 'List Barely',
                        'is_right' => null
                    ],[
                        'title' => 'Rasmus Lerdrof',
                        'is_right' => 1
                    ],[
                        'title' => 'None of the above',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Variable name in PHP starts with -',
                'options' =>[ 
                    [
                        'title' => '! (Exclamation)',
                        'is_right' => null
                    ],[
                        'title' => '$ (Dollar)',
                        'is_right' => 1
                    ],[
                        'title' => '& (Ampersand)',
                        'is_right' => null
                    ],[
                        'title' => '# (Hash)',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Which of the following is the default file extension of PHP?',
                'options' =>[ 
                    [
                        'title' => '.php',
                        'is_right' => 1
                    ],[
                        'title' => '.hphp',
                        'is_right' => null
                    ],[
                        'title' => '.xml',
                        'is_right' => null
                    ],[
                        'title' => '.html',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Which of the following is not a variable scope in PHP?',
                'options' =>[ 
                    [
                        'title' => 'Extern',
                        'is_right' => 1
                    ],[
                        'title' => 'Local',
                        'is_right' => null
                    ],[
                        'title' => 'Static',
                        'is_right' => null
                    ],[
                        'title' => 'Global',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Ajax is used for creating _____.',
                'options' =>[ 
                    [
                        'title' => 'Web applications',
                        'is_right' => 1
                    ],[
                        'title' => 'Desktop applications',
                        'is_right' => null
                    ],[
                        'title' => 'System applications',
                        'is_right' => null
                    ],[
                        'title' => 'Both A. and B.',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Ajax stands for ______.',
                'options' =>[ 
                    [
                        'title' => 'Asynchronous JavaScript and XML',
                        'is_right' => 1
                    ],[
                        'title' => 'Asynchronous JSON and XML',
                        'is_right' => null
                    ],[
                        'title' => 'Asynchronous Java and XML',
                        'is_right' => null
                    ],[
                        'title' => 'Asynchronous JavaScript and XMLHttpRequest',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'What server support Ajax?',
                'options' =>[ 
                    [
                        'title' => 'WWW',
                        'is_right' => null
                    ],[
                        'title' => 'SMTP',
                        'is_right' => null
                    ],[
                        'title' => 'HTTP',
                        'is_right' => 1
                    ],[
                        'title' => 'All of the above',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Which of the following feature makes the Ajax unique?',
                'options' =>[ 
                    [
                        'title' => 'It can work with all the databases',
                        'is_right' => null
                    ],[
                        'title' => 'It is a server-side application can also be used to create servers',
                        'is_right' => null
                    ],[
                        'title' => 'It can use Python & C++ for programming',
                        'is_right' => null
                    ],[
                        'title' => 'It makes data requests asynchronously',
                        'is_right' => 1
                    ]
                ]
            ],[
                'title' => 'Ajax sends data to a web server _____.',
                'options' =>[ 
                    [
                        'title' => 'in the background',
                        'is_right' => 1
                    ],[
                        'title' => 'before loading the page',
                        'is_right' => null
                    ],[
                        'title' => 'with reloading the page',
                        'is_right' => null
                    ],[
                        'title' => 'All of the above',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Ajax updates a web page ____ reloading the page.',
                'options' =>[ 
                    [
                        'title' => 'with',
                        'is_right' => null
                    ],[
                        'title' => 'without',
                        'is_right' => 1
                    ]
                ]
            ]
        ];

        foreach($questions as $val){
            $q = new Question;
            $q->title = $val['title'];
            $q->status = '1';
            $q->save();

            foreach($val['options'] as $oval){
                $o = new Option;
                $o->question_id = $q->id;
                $o->title = $oval['title'];
                $o->is_right = $oval['is_right'];
                $o->save();
            }
        }
    }
}
