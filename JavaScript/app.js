// ES6: Declare a Read-Only Variable with the const Keyword

function printManyTimes(str) {
  //  The purpose of use strict is to indicate that the code should be executed in strict mode, With strict mode, you can not, for example, use undeclared variables.
  "use strict";

  // Only change code below this line

  let sentence = str;
  for (let i = 0; i < str.length; i += 2) {
    console.log(sentence);
  }

  // Only change code above this line
}

printManyTimes("InternsProgram");
