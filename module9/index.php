<?php

/**
 * PHP Config
 */
ini_set("display_errors",'0');
//Site info
$site_info=array(
    'title'=>'Shafayat Hossain',
    'logo'=>'logo.png',
    'categories'=>array('Tech','News','Politics','Games','Cricket'),
    'posts'=>array(
        "post-1"=>array(
            'title'             =>'MIT\'s DribbleBot Robot Can Maneuver a Soccer Ball on Various Landscapes',
            'featured_image'    =>'https://www.techeblog.com/wp-content/uploads/2023/04/mit-dribblebot-robot-soccer-ball.jpg',
            'description'       =>'MIT researchers from the Computer Science and Artificial Intelligence Laboratory (CSAIL) have developed DribbleBot, a robot dog capable of maneuvering a soccer ball on various landscapes. Programming this robot required a digital twin of the natural world where a thousand versions of the robot are simulated in parallel in real time, enabling data collection 4,000 times quicker than just using one.DribbleBot can also navigate unfamiliar terrains and recover from falls, thanks to a recovery controller the team built into its system. This specialized controller enables the robot get back up after a fall and switch back to its dribbling controller to continue pursuing the ball. Maneuvering the ball on various landscapes requires the robot to adapt its locomotion to modify the force applied.',
            'author'            =>'Shafayat Hossain',
            'publish_date'      =>'2023-04-04'
        ),
        "post-2"=>array(
            'title'             =>'Hyundai’s Plug & Drive (PnD)-Based Autonomous Robots are Now Making Deliveries at Hotels',
            'featured_image'    =>'https://media.techeblog.com/images/hyundai-autonomous-robots-delivery-hotel.jpg',
            'description'       =>'Hyundai’s Plug & Drive (PnD)-based autonomous robots are now making deliveries at hotels in South Korea. These robots have been configured to have an integrated storage unit on top of a PnD driving unit, paired with a connected screen that displays information for customers. The PnD modular platform combines intelligent steering, braking, in-wheel electric drive and suspension hardware, including a steering actuator for 360°, as well as holonomic rotation.Movement is aided with LiDAR and camera sensors and its autonomous driving capability allows it to find the optimal route within the area to deliver packages to recipients. Plus, these robots can recognize and avoid fixed or moving objects, resulting in a fast delivery time. The first stop for the robot was the Rolling Hills Hotel, where it works room service from 8pm – 10pm daily, bringing food and drinks to guests when they place an order via the Kakao Talk messaging app.',
            'author'            =>'Shafayat Hossain',
            'publish_date'      =>'2023-04-03'
        ),
        "post-3"=>array(
            'title'             =>'This One-Off Hyundai Tuscon ‘Beast’ Concept was Built Exclusively for Sony Pictures “Uncharted” Movie',
            'featured_image'    =>'https://www.techeblog.com/wp-content/uploads/2023/04/nasa-four-astronauts-crewed-artemis-ii-mission-moon.jpg',
            'description'       =>'This modified 2022 Hyundai Tuscon, nicknamed “Beast”, was built exclusively for Sony Pictures’ upcoming “Uncharted” movie, based on the PlayStation video game of the same title. There’s no word yet on where this vehicle appears in the film, but we do know that it will most likely be driven by the street-smart thief Nathan Drake (Tom Holland) who is recruited by seasoned treasure hunter Victor “Sully” Sullivan (Mark Wahlberg) to recover a fortune lost by Ferdinand Magellan 500 years ago. Read more for a video, additional pictures and information.',
            'author'            =>'Shafayat Hossain',
            'publish_date'      =>'2023-04-02'
        ),
        "post-4"=>array(
            'title'             =>'Bicycle Tires Made from Tennis Balls Look Strange, Actually Work',
            'featured_image'    =>'https://www.techeblog.com/wp-content/uploads/2023/04/bicycle-tires-made-from-tennis-balls.jpg',
            'description'       =>'You’ve seen the chainless bike, now check out functional bicycle tires made from tennis balls. Making your own tennis ball tires at home won’t be as simple as it may sound, especially since you’ll not only need to cut out sections of water piping, but also a custom-built tool to press the tennis balls into the pipes.',
            'author'            =>'Shafayat Hossain',
            'publish_date'      =>'2023-04-02'
        )
    ),
    'featured_post'=>array('post-1'),
    'recent_post'=>array('post-1','post-2','post-3'),
    'page_info'=>array(
        'home'=>array(
            'page_title'=>'Home'
        ),
        'blog'=>array(
            'page_title'=>'Blog'
        ),
        'contact'=>array(
            'page_title'=>'Contact Us'
        )
    )
);
function excerpt($title, $cutOffLength) {

    $charAtPosition = "";
    $titleLength = strlen($title);

    do {
        $cutOffLength++;
        $charAtPosition = substr($title, $cutOffLength, 1);
    } while ($cutOffLength < $titleLength && $charAtPosition != " ");

    return substr($title, 0, $cutOffLength) . '...';

}
$page='home';
if($_REQUEST['page'])
$page=$_REQUEST['page'];
$page_info=$site_info['page_info'][$page];
include_once('header.php');
?>
<?php
include_once($page.".php");
?>
<?php
include_once('footer.php');
?>