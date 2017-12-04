<?php 
date_default_timezone_set('America/Los_Angeles');

$text ='';
$color = '';
$image = '';

//retrieves day of week, 'Sunday'
if(empty($_GET)){
    $day= date('l');
}
else{
    $day=$_GET['day'];
    
}

switch($day){
    case 'Monday':
        $animal= "Lion";
        $image = 'img/monday.jpg';
        $alt   = "A lion";
        $color = 'blue';
        $stat1 ="Second Largest Big Cat.";
        $stat2 ="Lion Babies Aren't Only Called Cubs.";
        $stat3 ="They Once Roamed the Globe.";
        $stat4 ="The Loudest Roar.";
        $quote="There are no lazy veteran lion hunters.";
        $author = "Norman Ralph Augustine";
            
        break;
    case 'Tuesday':
        $animal= "dolphin";
        $image = 'img/tuesday.jpg';
        $alt   = "A dolphin";
        $color = 'green';
        $stat1 ="The closest relatives of dolphins are whales and porpoises. All are members of the order Cetacea.";
        $stat2 ="Dolphins are the only mammals that give birth to its offspring delivering the tail first instead of the head.";
        $stat3 =" Dolphins can communicate with each other by emitting a variety of sounds.";
        $stat4 =" Dolphins are mammals; warm-blooded animals which give birth to live offspring and feed them with breast milk from the mother.";
        $quote=" Do you have a dorsal fin? To train ze dolphin you must zink like ze dolphin! You must be getting inside ze dolphin's head. I am saying to Snowflake, 'Akay!... Akay Akay Akay?' und he is saying 'AKay Akay!' und he is up on ze tail 'Eeeeeeeeee!' und you can quote him!";
        $author = "Ace Ventura";
        break;
    case 'Wednesday':
       $animal= "Bear";
        $image = 'img/wednesday.jpg';
        $alt   = "A bear";
        $color = 'yellow';
        $stat1 ="Bears have an excellent sense of smell, better than dogs or possibly any other mammal.";
        $stat2 ="Bears live as long as 30 years in the wild. One captive brown bear lived to the age of 47.";
        $stat3 ="A bear’s normal heartbeat is 40 beats per minute. A hibernating bear’s heart rate drops to 8 bpm.[";
        $stat4 ="Unlike many mammals, bears can see in color.";
        $quote="Always respect Mother Nature. Especially when she weighs 400 pounds and is guarding her baby.";
        $author = " James Rollins,";
        break;
    case 'Thursday':
     $animal= "Monkey";
        $image = 'img/thursday.jpg';
        $alt   = "A Monkey";
        $color = 'red';
        $stat1 ="Scientists observed female monkeys teaching their young how to floss their teeth.";
        $stat2 ="Monkeys are found almost everywhere on Earth, except for Australia and Antarctica.";
        $stat3 ="Monkeys are long-lived, surviving in the wild anywhere between 10 and 50 years.";
        $stat4 ="A group of monkeys is variously called a troop, barrel, carload, cartload, or tribe.";
        $quote="Monkeys are superior to men in this: when a monkey looks into a mirror, he sees a monkey.";
        $author = "Nelson Mendala";
        break;
    case 'Friday':
      
         $animal= "Zebra";
        $image = 'img/friday.jpg';
        $alt   = "A zebra";
        $color = 'teal';
        $stat1 ="Has stripes";
        $stat2 ="Is black and white";
        $stat3 ="Possesses magic abilities.";
        $quote="Never lick a gift horse in the mouth";
        $author = "some guy";
        break;
    case 'Saturday':
       $animal= "Seal";
        $image = 'img/saturday.jpg';
        $alt   = "A seal";
        $color = 'olive';
      $stat1 ="Bark BARK BARK";
        $stat2 ="BARK";
        $stat3 ="The Loudest Roar.";
        $quote="BARK BARK BARK BARK BARK bark bka bark bark ba bababarkbatk batkb bark";
        $author = "Mr. Seal";
        break;    
    case 'Sunday':
      
     $animal= "Aarvark";
        $image = 'img/sunday.jpg';
        $alt   = "A Aarvark";
        $color = 'pink';
        $stat1 ="I eat ants a lot of ants";
        $stat2 ="Raps for the daily show";
        $stat3 ="no Roar.";
        $quote="Daily and nightly, so tightly, I eat them.";
        $author = "Doctor A";
        break;    
        
        
}

?>
