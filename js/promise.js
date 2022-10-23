// let promise1 = new Promise((resolve, reject) => {
//     reject('fsafasdf');
// })

// promise1.then((resolve) => {
//     console.log('resolved');
// }).catch(err => {
//     console.log('rejected');
// })

// p1 8 min
// p2 9 min
// p3 2 min
// p4 4 min
// p5 1 min


// console.log("console.log");


const getData = async () => {
   await fetch('https://jsonplaceholder.typicode.com/posts')
    .then((resp) => resp.json())
    .then((result) => console.log(result))
    console.log("fasdfasfasdf");
} 

getData();



