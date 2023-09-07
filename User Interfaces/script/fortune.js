console.log("fortune.js loaded");

/*
Your fortune is soon to be revealed​
Store the following information in variables​
Number of children​
Partner's name​
Job Title​
Geographical Location​
Name for a Dog​
Output to the console the users fortune​
*/

//let numKids = 4; // not always best to hardcode values
let numKids;
let partner, job, geoLocation, dog, fortune;

partner = "Bob";
job = "Teacher";
geoLocation = "New York";
dog = "Fluffy";
numKids = 4;

//-- setup fortune
// different wasy to concatenate a string
fortune = "You will be a ";
fortune += job;
fortune += " who will one day marry ";
fortune += partner;
fortune += " and live in " + geoLocation + " with your " + numKids + " kids and your dog " + dog;

console.log(fortune);