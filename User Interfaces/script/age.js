console.log("age has loaded");

/*
We want to be able to calculate the possible age a user has.​
Store the current year in a variable.​
Store the users birth year in a variable.​
Calculate and save their 2 possible ages based on the stored values.​
Output to the console the users age​ 
You're either   X   or   Y   years old.​*/

let yearCurrent = 2023; // current year
let yearBirth = 1964;	// birth year

let age1 = yearCurrent - yearBirth;
// let age2 = yearCurrent - yearBirth - 1;
let age2 = age1 - 1; //remove redundant code

console.log("You're either " + age1 + " or " + age2 + " years old.");