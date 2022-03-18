// Sync File Functions
// Line By Line Read Karto
// const { readFileSync , writeFileSync} = require('fs');

// console.log("Start");
// const first = readFileSync('./Try/first.txt','utf8');
// const second = readFileSync('./Try/second.txt','utf8');
// console.log(first + second);

// writeFileSync(
//     './Try/MSDhoni.txt',
//     `Here is The Result : ${first} ${second}`,
//     {flag : 'a'}
// );

// console.log("Done");
// console.log("Starting New One");

// Async File Functions
const { readFile , writeFile} = require('fs');

console.log("Starting");
readFile('./Try/first.txt', 'utf8' , (err,result) => {
    if(err) {
        console.log(err);
        return;
    }
    const first = result;
    readFile('./Try/second.txt','utf8',(err,result) => {
        if(err) {
            console.log(err);
            return;
        }
        const second = result;
        writeFile('./Try/MSDhoni-async.txt',
        `Here is The Result : ${first} ${second}`,
        (err , result) => {
            if(err) {
                console.log(err);
                return;
            }
            console.log("Done With The Task");
        })
        
    })
} )

console.log("Starting The Next One");