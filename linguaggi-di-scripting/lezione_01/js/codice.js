let i = 0;
i = i + 10;
console.log(i); //10

i = "stringa" + "ciao"; 
console.log(i); //stringaciao

i = i + 1;
console.log(i); //stringaciao1

i = i * 1;
console.log(i); //NaN

i = 0;
i = i + true;
console.log(i); //1

i = 0;
i = i + false;
console.log(i); //0

i = true + false;
console.log(i); //1

i = "stringa";
i = i + true;
console.log(i); //stringatrue

i = 0 == false;
console.log(i); //true

i = 0 === false;
console.log(i); //false

i = 0 == "0";
console.log(i); //true

let y; // undefined
y = y + 1; 
console.log(y);//NaN

let m = null;
m = m + 1;
console.log(m); //1 

let x = 0;
x = 10/x;
console.log(x);//infinity

let u = 10/3;
u = 10 * u;
console.log(u); //33.333333333333336

let z;
