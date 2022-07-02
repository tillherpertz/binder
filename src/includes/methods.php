<?php
    $twitch_url = 'https://www.twitch.tv/bindernoisi';
    $git_url = 'https://github.com/tillherpertz';
    $youtube_url = 'https://www.youtube.com/channel/UCCnqLP_YjhfhtYEhKXI2Uqw';

    if (!class_exists('DemoThemeMethods')){
        class DemoThemeMethods {
            public function navigation($pages, $class) {
                $nav = '<ul class="' .$class. '">';

                foreach ($pages as $index => $page) {
                    if ($_SERVER['SCRIPT_NAME'] == $page['name'] . ".php") :
                        $nav .= '<div class="omegalol"></div>';
                        $nav .= '<a href=""><li aria-current="page">' . $page['name'] . '</li></a>';
                    else :
                        $nav .= '<a href="'. $page['url'] .'"><li>'. $page['name'] .'</li></a>';
                    endif;
                }

                $nav .= '</ul>';
                
                return $nav;
            }
        }
    }

    $dtm = new DemoThemeMethods;
?>