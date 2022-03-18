const sayHi = require('./Modules');
// Import Object Directly
const names = require('./Modules3');
// Import Each Element Individually
const {omkar,ravi} = require('./Modules3');
const data = require('./Module4');
console.log(data)
sayHi("Abhijit");
require('./Module5')
// With Object
// sayHi(names.omkar);
// sayHi(names.vishal);
// sayHi(names.ravi);

// Without Object
sayHi(omkar);
sayHi(ravi);