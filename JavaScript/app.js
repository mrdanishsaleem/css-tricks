// ES6: Write Arrow Functions with Parameters without the argument parentheses

const myConcat = (arr1, arr2) => {
  "use strict";
  return arr1.concat(arr2);
};

console.log(myConcat([1, 2], [3, 4, 5]));
