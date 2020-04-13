<?php
include_once ('./functions.php');
include_once ('./helpers.php');
$is_auth = rand(0, 1);

$user_name = 'Robin'; // укажите здесь ваше имя

$array[] = ['title'=>'Цитата', 'type'=>'post-quote', 'description'=>'Мы в жизни любим только раз, а после ищем лишь похожих', 'login'=>'Лариса', 'avatar'=>'userpic-larisa-small.jpg'];
$array[] = ['title'=>'Игра престолов', 'type'=>'post-text', 'description'=>'Не могу дождаться начала финального сезона своего любимого сериала!', 'login'=>'Владик', 'avatar'=>'userpic.jpg'];
$array[] = ['title'=>'Наконец, обработал фотки!', 'type'=>'post-photo', 'description'=>'rock-medium.jpg', 'login'=>'Виктор', 'avatar'=>'userpic-mark.jpg'];
$array[] = ['title'=>'Моя мечта', 'type'=>'post-photo', 'description'=>'coast-medium.jpg', 'login'=>'Лариса', 'avatar'=>'userpic-larisa-small.jpg'];
$array[] = ['title'=>'Лучшие курсы', 'type'=>'post-link', 'description'=>'www.htmlacademy.ru', 'login'=>'Владик', 'avatar'=>'userpic.jpg'];


$array[1]['description'] = crop('Церковь - это не здание, церковь - это, прежде всего люди, прихожане, мы с вами. От нас многое зависит. Один батюшка с матушкой просто всех не вытянут, тем более забот у них - “выше крыши” всегда. Это и воскресная школа и приход, и организация молодёжи (та же “Гармония”).
Что я хотел бы сказать: нужно нам (прихожанам), как-то собраться всем и поговорить. Мы же община, нас объединил сам Господь под сводами нашей церкви. Почему бы не развить эту тему дальше?
Что если мы начнём друг-другу помогать? С самых простых вещей. 100% у нас на приходе есть люди, которые что то умеют делать лучше остальных, например: штукатурить или вязать варежки или у кого-то есть грузовая машина, что бы что то куда-то отвезти… Почему бы не разузнать это и не обращаться именно к этим людям? За услуги конечно нужно платить, но так - мы будем платить “денюжку” своим же. Да и, мне кажется, что в этом случае мы хотя бы будем знать к какому человеку мы обращаемся.
Давно пора понять, что мы не просто так собрались. Помогать друг-другу, не это ли одна из заповедей?.. Нам нужно своими действиями показывать, что мы вместе, что мы не просто пришли, постояли, (хорошо, если помолились :) ) и разошлись в ночи…
У нас (прихожан) появится действительно серьёзная, добрая сила, которая будет помогать другим не просто потому что на вопрос:
Ты Православный?
Мы будем отвечать что то типа:
Конечно… Я каждое воскресенье в церковь хожу...
Но и еще что-то. Что то осязаемое, что можно будет поставить в пример тем же нашим детям. Ведь вера в Бога подразумевает именно помощь ближнему. После прочтения этой статьи, напишите Ваше отношение к такой идее или, возможно, у Вас появятся какие-то свои предложения?.. Будем рады их обсудить и самое главное - воплотить в жизнь.');

$main = include_template('main.php', ['array'=>$array]);

print(include_template('layout.php', ['main'=>$main, 'is_auth'=>$is_auth, 'user_name'=>$user_name]));
?>
