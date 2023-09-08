console.log("age has loaded");

/*
We want to be able to calculate the possible age a user has.​
Store the current year in a variable.​
Store the users birth year in a variable.​
Calculate and save their 2 possible ages based on the stored values.​
Output to the console the users age​ 
You're either   X   or   Y   years old.
-----
Using your previously created file we are going to implement functions to make our code reusables
Create a function that will take a user's birth year as the only parameter.
This function should validate that the provided birth year is a number 

​*/

/**
 * Outputs users age based on their birth year.
 * @param {number} yearBirth The users birth year
 */
function guessAge(yearBirth){
	yearBirth = parseInt(yearBirth);
	if (isNaN(yearBirth)){
		console.log("Not a number");
		return;
	}

	let yearCurrent = 2023; // current year
	//let yearBirth = 1964;	// birth year

	let age1 = yearCurrent - yearBirth;
	// let age2 = yearCurrent - yearBirth - 1;
	let age2 = age1 - 1; //remove redundant code

	console.log("You're either " + age1 + " or " + age2 + " years old.");

}



