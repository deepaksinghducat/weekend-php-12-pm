// []

// let array = [10,20,30,40,50];

// console.log(array);

// new Array

// let array = new Array(10,20,30);

// console.log(array);

// Array.of

// let array = Array.of(10,20,30);

// console.log(array);

// Array.from

// let array = Array.from([10,20,30]);

// console.log(array);


// push and pop

// let array = [10,20,30,40,50];

// array.push(10);

// console.log(array);

// array.pop();

// console.log(array);


// unshift and shift

// let array = [10,20,30,40,50];
// console.log(array);

// array.unshift(100);
// console.log(array);

// array.shift();

// console.log(array);

// indexof / splice


// let array = [10,30,50,40,80,14];

// let index = array.indexOf(400);

// if(index > -1)
// array.splice(index,1);

// console.log(array);


// slice

// let array = [10,30,50,40,80,14];

// let newArray = array.slice(0,2);

// console.log(array, newArray);

// find, filter , map

let array = [10,30,50,40,80,14,40];

// let findData = array.find((value, key, arr) => value === 40 )

// console.log(findData);

// let filteredArray = array.filter((value,key, arr) => value === 40);

// console.log(filteredArray);

// let mapedArray = array.map((value,key) => value*2);

// console.log(mapedArray,array);

// reduce 

let sum = array.reduce((sum,value) => sum + value,0);

console.log(sum);



