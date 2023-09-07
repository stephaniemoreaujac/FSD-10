console.log("convert.js");

let celsius, fahrenheit, lbs, kg;

/*
Store a Celsius temperature into a variable.
Save the converted Fahrenheit temperature in a variable
C to F = Multiply by 9, then divide by 5, then add 32
Output to the console.	X   C is    Y   F.
*/

celsius = 40;
fahrenheit = ( ( celsius * 9 ) / 5 ) + 32;
console.log(celsius + "C is " + fahrenheit + "F");

/*
 Store a Fahrenheit temperature into a variable.
Save the converted Celsius temperature in a variable
F to C = Subtract 32, then multiply by 5, then divide by 9
Output to the console.	X   F is    Y   C.
*/

fahrenheit = 32;
celsius = ( ( fahrenheit - 32 ) * 5) / 9;
console.log( fahrenheit + "F is " + celsius + "C");

/*
Store a weight value in pounds
Save the converted kilogram weight in a variable
KG = LBS / 2.2046
Output to the console.	X   lbs is  Y   kg.
*/
lbs = 120;
kg = lbs / 2.2046;
console.log(lbs + "lbs is " + kg + "kg");


/*
Store a weight value in kilograms
Save the converted pounds weight in a variable
LBS = KG / 0.454
Output to the console. X   kg is  Y   lbs.
*/

kg = 60;
lbs = kg / 0.454;
console.log(kg + "kg is " + lbs + "lbs");