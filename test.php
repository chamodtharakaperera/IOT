<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/onoff.css">
</head>
<body>
    
<main>
  <h1 class="heading">Click to turn 
    <span class="on">
      <span>
        on
      </span>
    </span>
    <span class="off">
      <span>
        off
      </span>
    </span>
  </h1>
  <button type="button" class="btn">
    <span>
      <b></b>
      <svg viewBox="-5.5 -5.5 71 71" id="circle">
        <circle cx="30" cy="30" r="30" stroke="white" stroke-width="11" fill="transparent"></circle>
      </svg>
    </span>
  </button>
</main>




<script>
        const btn = document.querySelector('.btn');
const heading = document.querySelector('.heading');

let active = false;

const turnOn = () => {
  btn.classList.add('active');
  heading.classList.add('active');
}

const turnOff = () => {
  btn.classList.remove('active');
  heading.classList.remove('active');
}

const toggleAnimation = () => {
  btn.classList.remove('animating');
  active ? turnOn() : turnOff();
};

function clickHandler() {
  active = !active;
  btn.classList.add('animating');
  
  btn.addEventListener('animationend', toggleAnimation);
}

btn.addEventListener('click', clickHandler);



btn.addEventListener('animationend', () => {
  btn.classList.remove('animating');
  if (active === true) {
    btn.classList.add('active');
    heading.classList.add('active');
  } else {
    btn.classList.remove('active');
    heading.classList.remove('active');
  }
});


btn.addEventListener('animationend', () => {
  btn.classList.remove('animating');
  active ? turnOn() : turnOff();
});


    </script>


</body>
</html>