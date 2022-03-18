const { Console } = require('console');
const os = require('os')

// Info About Current User
console.log(os.userInfo());

// mETHOD rETURNS System uptime in seconds
console.log(`The System Uptime is ${os.uptime()} seconds`);

const currentOS = {
    name : os.type(),
    release : os.release(),
    totalMem : os.totalmem(),
    freeMem : os.freemem(),
}

console.log(currentOS);