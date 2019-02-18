<!DOCTYPE html>
<html lang="en">

<?php
   $imagename[1] = "spinaltap.jpg";
   $imagename[2] = "spinaltap.jpg";
   $imagename[3] = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/child.svg";
   $imagename[4] = "spinaltap.jpg";
   $imagename[5] = "spinaltap.jpg";
   $imagename[6] = "spinaltap.jpg";
   $imagename[7] = "spinaltap.jpg";
   $imagename[8] = "spinaltap.jpg";
   $imagename[9] = "spinaltap.jpg";
   $imagename[10] = "spinaltap.jpg";
   $imagename[11] = "spinaltap.jpg";
   $imagename[12] = "spinaltap.jpg";
   $imagename[13] = "spinaltap.jpg";
   $imagename[14] = "spinaltap.jpg";
   $imagename[15] = "spinaltap.jpg";
   $imagename[16] = "spinaltap.jpg";
   $imagename[17] = "spinaltap.jpg";
   $imagename[18] = "spinaltap.jpg";
   $imagename[19] = "spinaltap.jpg";
   $imagename[20] = "spinaltap.jpg";
   $imagename[21] = "spinaltap.jpg";
?>

<head>
   <title>::: Char's 21 Photos for 21 Years :::</title>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
   <style>

html,body,div,span,h1,h2,h3,h4,h5,h6,p,pre,a,code,em,img,ol,ul,li,
table,tr,th,td,b,u,i,center {
   border: 0; font-weight: inherit; font-style: inherit;
   font-size: 100%; font-family: inherit; vertical-align: baseline;
   background: transparent; margin: 0; padding: 0;
   outline: none; text-decoration: none; list-style: none; }


body {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/snow-bg.svg) no-repeat top center #82d8cb;
  background-size: cover;
}

/* title graphic */
.title {  
  display: flex;
  align-items: center;
  justify-content: center; 
}

.title img {
  width: 90%;
  height: auto;
}





.grid-1 {
  display: grid; width: 96%; max-width: 900px; margin: 2% auto;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: auto;
  grid-gap: 25px;
  grid-template-areas:    "t        t       t"
                          "d7       d20     d12"
                          "d2       d14     d4"
                          "d5       d1      d16"
                          "d10      d11     d18"
                          "d13      d3      d15"
                          "d6       d17     d8"
                          "d19      d9      d21";
}

@media only screen and (min-width: 500px) {
   .grid-1 {
    grid-template-columns: repeat(6, 1fr);
    grid-template-areas: "t     t     t     d2      d7      d8"
                         "t     t     t     d4      d11     d12"
                         "d6    d1    d21   d21     d9      d20"
                         "d17   d18   d21   d21     d5      d13"
                         "d3    d19   d16   d14     d10     d15";
  }
}

  .title { grid-area: t; }

<?php
   for ($i=1; $i<22; $i++)
      {
      echo '.day-' . $i . ' { grid-area: d' . $i . '; }';
//      echo '.day-' . $i . ' .back { background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/child.svg); }';
      echo '.day-' . $i . ' .back { background: url(' . $imagename[$i] . '); }';
      }
?>



/* door styles */

.grid-1 input {
  display: none;
}

label {
  perspective: 1000px;
  transform-style: preserve-3d;
  cursor: pointer;

  display: flex;
  min-height: 100%;
  width: 100%;
  height: 120px;
}

.door {
  width: 100%;
  transform-style: preserve-3d;
  transition: all 300ms;
  border: 2px dashed transparent;
  border-radius: 10px;
}

  .door div {
    position: absolute;
    height: 100%;
    width: 100%;
    backface-visibility: hidden;
    
    border-radius: 6px;

    display: flex;
    align-items: center;
    justify-content: center;
    
    /* typography */
    font-family: 'Kalam', cursive;
    color: #385052;
    font-size: 2em;
    font-weight: bold;
    text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2);
  }

  .door .back {
      background-size: contain;
      background-position: center center;
      background-repeat: no-repeat;
      background-color: #2e313d;
      transform: rotateY(180deg);
  }

  label:hover .door {
    border-color: #385052;
  }

  :checked + .door {
    transform: rotateY(180deg);
  }


/* footer styles */
footer {
  text-align: center;
  padding: 2em 0;
}  
  footer a {
      color: #2e313d;
  } 
    footer a:hover {
          text-decoration: none;
    }


   </style>
</head>

<body>
   <?php
   $today= strtotime(date("Y-m-d"));
//TESTING TESTING TESTING
$today = strtotime("2019-03-15");
   //2019-03-05 all closed
   //2019-03-06 will open 1st
   //2019-03-26 all open
   $birthdayDate = strtotime("2019-03-26");
   $daysToGo = round(($birthdayDate-$today)/60/60/24);
//   $todayarray = preg_split('/-/',$imagename[$daysToGo]);
//   preg_match_all('/(.+?).ogg/',$todayarray[2],$todayarray[2]);


//print_r($todayarray);
echo $daysToGo;

   ?>





<div class='support-grid'></div>
<section class='grid-1'>
  <div class='title'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/merry-xmas.svg'>
  </div>



<?php
   for ($i=1; $i<22; $i++)
      {
      echo '<div class="day-' . $i . '"><label><input type="checkbox"><div class="door">';
      echo '<div class="front">' . $i . '</div><div class="back"></div>';
      echo '</div></input></label></div>';
      }
?>


</section>
<footer></footer>



</body>
</html>

