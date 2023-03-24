let a = 50; // declared First
let b = 100;

if (true) {
  let a = 60; // declared Again
  var c = 10;
  console.log(a / c); // 6
  console.log(b / c); // 10
}

console.log(c); // 10
console.log(a); // 50
