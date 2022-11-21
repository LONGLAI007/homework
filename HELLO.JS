document.writeln("HELLO JAVASCRIPT");
console.log("HELLO WORD");
// alert("HELLO MEN");

let name = "Jonhny";
document.writeln(name);
console.log(name);
name = 'Max';
console.log(name);
// const variable
const PI = 3.14;
console.log(PI);
const color = ['red', 'green', 'yellow', 'blue'];
console.warn(color);
console.log(color[1]);
console.table(color);
console.error(1);
//  Boolean
const isAdmin = true;
const isUser = !true;
const isAnonyMous = !!isUser;
console.log(isAdmin);
console.log(isUser);
console.log(isAnonyMous);
const person = {
    name: 'bounmy',
    phone: '7782 952',
    address: {
        village: 'phonethanao',
        distict: 'saysettha',
        city: 'vientian',
    },
    social: ['fackoob', 'youtube']
}
console.warn(person.name);
console.warn(person.phone)
console.warn(person.address.village)
console.warn(person.social[1])
// how to craye funtion
// test fetch data
// htt mato
async function getApi(){
    try {
        const Url =' https://api.publicapis.org/entries'
        
        const req = await fetch(Url,{
            method:'GET',
        })
        console.log(req)
        const res = await req.json()//convert to jdson
        console.log(res.count)
        for(const item of res.entries){
            // document.write(item.Category)
        }
        //add to body (DOM)
    } catch (error) {
        console.log(error(error))
    }

}
getApi()//call funtion