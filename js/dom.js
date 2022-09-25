// id

// const p = document.getElementById('p1');

// p.style.color ="red"
// p.innerHTML = "Hello, world!"

// const img = document.getElementById('image');

// console.log(img);
// img.src = "https://via.placeholder.com/150"


// class
// const p = document.getElementsByClassName('p1');

// p[0].innerHTML = "Hello, world!"

// p[1].style.color = "green"


// tag 

// const p = document.getElementsByTagName('p');

// console.log(p);

// queryselector queryselectorAll

// const p = document.querySelector('#p1');
// const p = document.querySelector('.p1');
// const p = document.querySelector('p');

// const p = document.querySelectorAll('.p1');
// const p = document.querySelectorAll('p');

// console.log(p);

// const ul = document.getElementById('ul');

// console.log(ul.childNodes);

// create Element

const body = document.querySelector('#div');

const button = document.createElement('button');

button.innerHTML = "Click Me!"
button.style.backgroundColor = "red";
button.type = "button"


body.appendChild(button)







