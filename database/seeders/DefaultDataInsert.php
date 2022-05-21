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
            ],[
                'title' => 'Who developed jQuery, and in which year it was first released?',
                'options' =>[ 
                    [
                        'title' => 'John Richard in 2001',
                        'is_right' => null
                    ],[
                        'title' => 'Mark Bensman in 2004',
                        'is_right' => null
                    ],[
                        'title' => 'John Resig in 2006',
                        'is_right' => 1
                    ],[
                        'title' => 'None of the above',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'jQuery is a -',
                'options' =>[ 
                    [
                        'title' => 'JavaScript method',
                        'is_right' => null
                    ],[
                        'title' => 'JavaScript library',
                        'is_right' => 1
                    ],[
                        'title' => 'JSON library',
                        'is_right' => null
                    ],[
                        'title' => 'PHP method',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Which of the following sign is used as a shortcut for jQuery?',
                'options' =>[ 
                    [
                        'title' => 'the % sign',
                        'is_right' => null
                    ],[
                        'title' => 'the & sign',
                        'is_right' => null
                    ],[
                        'title' => 'the $ sign',
                        'is_right' => 1
                    ],[
                        'title' => 'the @ sign',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => '$(this) in jQuery is used when -',
                'options' =>[ 
                    [
                        'title' => 'an HTML element references the entire document',
                        'is_right' => null
                    ],[
                        'title' => 'an HTML element references its own action',
                        'is_right' => 1
                    ],[
                        'title' => 'an HTML element references the action of its parent element',
                        'is_right' => null
                    ],[
                        'title' => 'All of the above',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Which of the following jQuery method is used to hide the selected elements?',
                'options' =>[ 
                    [
                        'title' => 'The hidden() method',
                        'is_right' => null
                    ],[
                        'title' => 'The hide() method',
                        'is_right' => 1
                    ],[
                        'title' => 'The visible(false) method',
                        'is_right' => null
                    ],[
                        'title' => 'The display(none) method',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'HTML stands for -',
                'options' =>[ 
                    [
                        'title' => 'HighText Machine Language',
                        'is_right' => null
                    ],[
                        'title' => 'HyperText and links Markup Language',
                        'is_right' => null
                    ],[
                        'title' => 'HyperText Markup Language',
                        'is_right' => 1
                    ],[
                        'title' => 'None of these',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'The correct sequence of HTML tags for starting a webpage is -',
                'options' =>[ 
                    [
                        'title' => 'Head, Title, HTML, body',
                        'is_right' => null
                    ],[
                        'title' => 'HTML, Body, Title, Head',
                        'is_right' => null
                    ],[
                        'title' => 'HTML, Head, Title, Body',
                        'is_right' => null
                    ],[
                        'title' => 'HTML, Head, Title, Body',
                        'is_right' => 1
                    ]
                ]
            ],[
                'title' => 'Which of the following element is responsible for making the text bold in HTML?',
                'options' =>[ 
                    [
                        'title' => '<pre>',
                        'is_right' => null
                    ],[
                        'title' => '<a>',
                        'is_right' => null
                    ],[
                        'title' => '<b>',
                        'is_right' => 1
                    ],[
                        'title' => '<br>',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Which of the following tag is used for inserting the largest heading in HTML?',
                'options' =>[ 
                    [
                        'title' => '<h3>',
                        'is_right' => null
                    ],[
                        'title' => '<h1>',
                        'is_right' => 1
                    ],[
                        'title' => '<h5>',
                        'is_right' => null
                    ],[
                        'title' => '<h6>',
                        'is_right' => null
                    ]
                ]
            ],[
                'title' => 'Which of the following tag is used to insert a line-break in HTML?',
                'options' =>[ 
                    [
                        'title' => '<br>',
                        'is_right' => 1
                    ],[
                        'title' => '<a>',
                        'is_right' => null
                    ],[
                        'title' => '<pre>',
                        'is_right' => null
                    ],[
                        'title' => '<b>',
                        'is_right' => null
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
