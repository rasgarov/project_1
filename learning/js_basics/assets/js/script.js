//#region Chalishma
// console.log("" + 1 + 0);//1    //10
// console.log("" - 1 + 0);//-1   
// console.log(true + false);//1  
// console.log(6 / "3");//2
// console.log(4 + 5 + "px");//9px
// console.log("$" + 4 + 5);//$9  //$45
// console.log("2" * "3");//6
// console.log("4" - 2);//2
// console.log("4px" - 2);//NaN
// console.log(7 / 0);//Infinity
// console.log("-9" + 5);//-4   //-95
// console.log("-9" - 5);//-14
// console.log(null + 1);//1
// console.log(undefined + 1);//NaN
//#endregion

//#region alert, prompt, confirm and string, int, boolean convert


//#region prompt, confirm, alert, const, if, else
// const name = prompt(`Dear user, please write your name:`);
// const userAge = prompt(`Dear ${name}, please write your age:`);
// const acception = confirm(`Dear ${name}, are you sure that you are ${userAge} years old ?`);
// if (acception) {
//     alert(`Welcome ${name}. You accepted that you are ${userAge} years old.`);
// } else {
//     alert(`Welcome ${name}. You did not accepted that you are ${userAge} years old.`);
// }
//#endregion

//#region convert string to number from prompt 
// const number1 = Number(prompt("Enter first number")); //first way
// const number2 = +(prompt("Enter second number")); //second way
// alert(`SUM is ${number1 + number2}`);
//#endregion

//#region convert to Boolean to see if data is not empty 
// const number1 = Number(prompt("Enter first number"));
// const number2 = Number(prompt("Enter second number"));
// if (Boolean(number1) && Boolean(number2)) {
//     alert(`SUM is ${number1 + number2}`);
// } else {
//     console.error("no data entered");
// }
//#endregion


//#endregion

//#region Math.Power or **
// const numberToPower = Number(prompt("enter number to get 8th power result"));
// let powerResult;
// if (Boolean(numberToPower)) {
//     // powerResult = numberToPower ** 8;
//     // powerResult = Math.pow(numberToPower, 8);
//     console.log(powerResult);
// } else {
//     console.warn("wrong data recieved");
// }
//#endregion

//#region get index and last index of char or string part
// const name = "Azerbaijan";
// console.log(name.indexOf("i")); // 6
// console.log(name.lastIndexOf("a")); //8
// console.log(name.indexOf("jan")); // 7
// console.log(name.lastIndexOf("baijan")); //4
// console.log(name.indexOf("jsasdsadadan")); //-1
//#endregion

//#region get 4 digit number from user and find sum of all digits
// let numberFromUser = Number(prompt("Enter 4 digit number, to find sum of all digits"));
// let sum = 0;
// if (Boolean(numberFromUser) && numberFromUser.toString().length == 4) {
//     for (var j = 0; j < 4; j++) {
//         sum += Number(String(numberFromUser)[j]);
//     }
//     alert(`Sum of digits is: ${sum}`);
// } else if (Boolean(numberFromUser) && numberFromUser.toString().length != 4) {
//     alert("Number you entered is not 4 digit number, please try again");
// } else {
//     alert("You did not entered a number, please try again");
// }
//#endregion

//#region get number 0-5 from user and write it's name SWITCH
// const stringFromUser = prompt("enter number between 0 and 5");
// // console.log(stringFromUser);
// const numberFromUser = parseInt(stringFromUser);
// // console.log(numberFromUser);
// switch (numberFromUser) {
//     case 1:
//         alert("One");
//         break;
//     case 2:
//         alert("Two");
//         break;
//     case 3:
//         alert("Three");
//         break;
//     case 4:
//         alert("Four");
//         break;
//     case 5:
//         alert("Five");
//         break;
//     default:
//         alert("Number is not between 0 and 5");
//         break;
// }
//#endregion

//#region SWITCH EXAMPLE 2
// const num = +prompt("enter number");
// switch (num) {
//     case 1:
//     case 2:
//     case 3:
//         alert("wrong choice");
//         break;
//     case 4:
//         alert("true choice");
//         break;
//     default:
//         alert("write correct number");
//         break;
// }
//#endregion

//#region TERNARY simple of IF choice


//#region IF version
// let number = 10;
// let isPositive = undefined;
// if (number < 0) {
//     isPositive = false;
// } else {
//     isPositive = true;
// }
// console.log(isPositive);//Output: true
//#endregion

//#region TERNARY version
// let number = 10;
// let isPositive = undefined;
// isPositive = number < 0 ? false : true;
// console.log(isPositive);
//#endregion


//#endregion

//#region TERNARY EXAMPLE 2
// const cins = prompt("Enter your sex M or F");
// let gender = cins == 'M' ? 'Male' : 'Female';
// alert(gender);
//#endregion

//#region FUNCTION Basics


//// 1
// function calculate(a, b) {
//     let z = a + b;
//     return z;
// }
// alert(calculate(3, 4));

////2
// function lengthOfName(name) {
//     return name.toString().length;
// }
// alert(lengthOfName("Rashid"));

////3
// let nameArr = [];
// function addToArrValues(name, name2, name3) {
//     nameArr.push(name, name2, name3);
// }
// addToArrValues("Rashid", "Nicat", "Samir");
// alert(nameArr);

////4
// function findGreatestValue(x, y, z) {
//     let greatestValue = x > y ? x : y;
//     greatestValue = greatestValue > z ? greatestValue : z;
//     return greatestValue;
// }
// alert(findGreatestValue(12, 129, 4));


//#endregion

//#region +1 and +10 to text of Paragraph


////1
// document.querySelector("button").addEventListener("click", function () {
//     let pNumber = +document.querySelector("p").innerText;
//     pNumber++;
//     document.querySelector("p").innerText = pNumber;
// })

////2
// document.querySelector("button").addEventListener("click", increaseByTen);
// function increaseByTen() {
//     let pNumber = +document.querySelector("p").innerText;
//     pNumber += 10;
//     document.querySelector("p").innerText = pNumber;
// }


//#endregion

//#region USD to AZN converter
// function usdToAznSum(usdToConvert, aznCount) {
//     const azn = usdToConvert * 1.70;
//     return `Your have ${azn + aznCount} AZN.`;
// }
// const usd = +prompt("Enter USD to convert");
// const aznHave = +prompt("Enter AZN you have");
// console.log(usdToAznSum(usd, aznHave));
//#endregion

//#region While loop Basics


////1
// const limit = 200;
// let accountBalance = 500;
// while (accountBalance > limit) {
//     accountBalance -= 100;
// }
// console.log(accountBalance);

////2
// let userNumberToDecrease = +prompt("enter number to decrease by 1");
// while (Boolean(!userNumberToDecrease)) {
//     userNumberToDecrease = +prompt("enter number to decrease by 1");
// }
// while (userNumberToDecrease > 0) {
//     console.log(userNumberToDecrease);
//     userNumberToDecrease--;
// }
// console.log(`Cycle is over. Finish number is : ${userNumberToDecrease}`);

////3
// let userInput = +prompt("enter 2 digit number");
// while (userInput < 93) {

//     userInput += 7;
// }
// console.log(userInput);

////4
// let startNumber = 14;
// let finishNumber = 100;
// let countOfDividers = 0;
// while (startNumber < finishNumber) {
//     if (startNumber % 7 == 0) {
//         console.log(startNumber);
//         countOfDividers++;
//     }
//     startNumber++;
// }
// console.log(countOfDividers);

////5
// let startNumber = 10;
// let finishNumber = 100;
// let sumOfOddNumbers = 0;
// while (startNumber < finishNumber) {
//     if (startNumber % 2 != 0) {
//         sumOfOddNumbers += startNumber;
//         // console.log(startNumber);
//     }
//     startNumber++;
// }
// console.log(sumOfOddNumbers);

////6
// let cycleTime = +prompt("enter cycle time");
// while (cycleTime > 0) {
//     cycleTime--;
//     console.log("i know how to use cycles");
// }

////7 Get simple numbers under input number
// let userInput = prompt("enter number to show all simple digits start from your number to 0 in decreasing order.")
// 1, 7, 11
// let count = 1;
// let arr = [];
// let copyInput = userInput;
// let copyInput2 = userInput;
// while (copyInput > 1) {
//     arr.push(copyInput);
//     copyInput--;
// }
// while (copyInput2 > 1) {
//     if (copyInput2 % 2 == 0 || copyInput2 % 3 == 0 || copyInput2 % 5 == 0 || copyInput2 % 7 == 0) {
//         arr.splice(arr.indexOf(copyInput2), 1);
//     }

//     copyInput2--;
// }
// for (let i = 0; i < arr.length; i++) {
//     console.log(arr[i]);
// }
// if (userInput > 0 && userInput < 3) {
//     console.log(2);
// } else if (userInput > 2 && userInput < 5) {
//     console.log(3);
//     console.log(2);
// } else if (userInput > 4 && userInput < 7) {
//     console.log(5);
//     console.log(3);
//     console.log(2);
// } else if (userInput > 6) {
//     console.log(7);
//     console.log(5);
//     console.log(3);
//     console.log(2);
// }


//#endregion

//#region FOR loop Basics


////1
// let reqem = 1;
// for (let index = 1; index < 10; index++) {
//     reqem *= index;
// }
// console.log(reqem);

////2
// let userName = "Asgarov Rashid Tahir";
// for (let index = 0; index < userName.length; index++) {
//     userName[index] == " " ? index : console.log(userName[index]);
// }

////3 Reverse user input string without reverse function and with reverse function
////////3.1
// let metn = prompt("enter message to reverse");
// let reversedText = "";
// for (let i = metn.length - 1; i >= 0; i--) {
//     reversedText += metn[i];

// }
// console.log(reversedText);

////////3.2
// let metn = prompt("enter message to reverse");
// let arr = metn.split("");
// console.log(arr);
// let reversedArr = arr.reverse();
// console.log(reversedArr);
// let result = reversedArr.join("");
// console.log(result);

////////3.2.1
// let metn = prompt("enter message to reverse");
// console.log(metn.split("").reverse().join(""));

////4 FOR LOOP with BREAK and CONTINUE
////////4.1
// let textWithDot = "asjdhjsa . lkdsafjlkajd odafpopodiafnnlkndaf. dsakjf . adsf dsafdsafdsa.";
// for (let i = 0; i < textWithDot.length; i++) {
//     if (textWithDot[i] == ".") {
//         console.log(i);
//         break;
//     }
// }

////////4.2
// let textWithDot = "asjdhjsa . lkdsafjlkajd odafpopodiafnnlkndaf. dsakjf . adsf dsafdsafdsa.";
// for (let i = 0; i < textWithDot.length; i++) {
//     if (textWithDot[i] != ".") {
//         continue;
//     } else {
//         console.log(i);
//         break;
//     }
// }


//#endregion

//#region Array Basics


////1
// const students = ["Rasim", "Cavad", "Asim"];
// students.push("Tofiq");
// students.shift();
// console.log(...students);

////2
// const textForConvert = "32,31,34,36,31";
// const arrFromText = textForConvert.split(",");
// const changedTextFromArr = arrFromText.join(";");
// console.log(changedTextFromArr);

////3
// const numArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// const [num1, num2, ...newArr] = numArr;
// console.log(num1, num2);
// console.log(...newArr);

////4 Find Max number in array
////////4.1
// const numbers = '1,2,-4,4,-7';
// const newArr = numbers.split(",");
// console.log(Math.min(...newArr));

////////4.2
// const numbers = '1,2,-4,4,-7,8,-45,88';
// const newArr = numbers.split(",");
// let min = +newArr[0];
// for (let i = 1; i < newArr.length; i++) {
//     if (min > +newArr[i]) {
//         min = +newArr[i];
//     }
// }
// console.log(min);

////5
// const arr = [1, 2, 3, 4, 5];
// const spreadArr = [...arr];
// for (let i = 0; i < spreadArr.length; i++) {
//     spreadArr[i] *= 2;
// }
// console.log(...arr);
// console.log(...spreadArr);

////6
// const newArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 3, 4, 22, 15, 1];
// function findMax(arr) {
//     return Math.max(...newArr);
// }
// console.log(`Max number is ${findMax(...newArr)}`);

////7 Slice and Splice
////////7.1 Slice
// const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// const slicedArr = arr.slice(4, 10);
// console.log(...slicedArr);
// console.log(...arr);

////////7.2 Rest operator as Slice
// const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// const [num1, num2, num3, num4, ...newArr] = arr;
// console.log(...arr);
// console.log(...newArr);

////////7.3 Splice
// const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// const newArr = arr.splice(0, 5, 10, 20, 30, 40, 50);
// console.log(arr);

////8 FOR EACH
////////8.1
// const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// function arrayFunc(deyer, ind) {
//     console.log(`Arrayda movcud deyer ${deyer}, ve indeksi ${ind}`);
// }

////////8.2
// const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// arr.forEach(function (deyer, ind) {
//     console.log(`Arrayda movcud deyer ${deyer}, ve indeksi ${ind}`);
// });

////////8.3
// const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// arr.forEach((name, ind) => {
//     console.log(`Arrayda movcud deyer ${name}, ve indeksi ${ind}`);
// });

////////8.4
// const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// arr.forEach((num, index) => {
//     arr[index] = num * 2;
// })
// console.log(...arr);

////////8.5 Find min and max number in array with forEach
// const arr = [1, 55, 7, 3, 74, 234, 8, 4, 234, -5, 213, 11, 234, 27, 46];
// function returnMaxandMinofArray(inputArr) {
//     let minNum = inputArr[0];
//     let maxNum = inputArr[0];
//     inputArr.forEach(num => {
//         if (minNum > num) {
//             minNum = num;
//         }
//         if (maxNum < num) {
//             maxNum = num;
//         }
//     });
//     return `Max number in array is ${maxNum}, Min number in array is ${minNum}`;
// }
// console.log(returnMaxandMinofArray(arr));

////////8.6 Function that accept array and return only negative values
// const arr = [1, 2, -5, 3, 74, -69, 59, 81, -9];
// function returnNegatives(arrayToFilter) {
//     const negativesArr = [];
//     arrayToFilter.forEach(num => {
//         if (num < 0) {
//             negativesArr.push(num);
//         }
//     });
//     const negativeString = negativesArr.join("\n");
//     return negativeString;
// }
// console.log(returnNegatives(arr));

////9 MAP - change in array, FIND - find first in array, FILTER - filter all in array
////////9.1 MAP
// const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// const newArr = arr.map(num => {
//     return num * 2;
// });
// console.log(...newArr);

////////9.2 FIND
// const textArray = ["Rashid", "Samir", "Asim", "Ceyhun", "Rad", "Sir", "Asi", "Ceyh"];
// function findThreeSymbolText(arr) {
//     const firstFound = arr.find(text => {

//         return String(text).length == 3;

//     })
//     if (firstFound != undefined || firstFound != null) {
//         return firstFound;
//     }
//     else {
//         return 'No 3 symbol text found';
//     }
// }
// console.log(findThreeSymbolText(textArray));

////////9.3 FILTER
// const textArray = ["Rashid", "Samir", "Asim", "Ceyhun", "Rad", "Sir", "Asi", "Ceyh"];
// const newArr = textArray.filter(char => {
//     return String(char)[0] == 'A';
// })
// console.log(...newArr);

////10 
// const arrNums2 = [2, 4, 1, 3, 9, 6, 7, 5, 8];
// const arrNames2 = ["Esalo", "Abune", "Deletur", "Basaloq", "Cinnamon", "Gerrard", "Falanor"];
// const arrNums = [...arrNums2];
// const arrNames = [...arrNames2];
// const newAZnums = arrNums.sort((a, b) => a - b);
// console.log(newAZnums);
// const newZAnums = arrNums.sort((a, b) => b - a);
// console.log(newZAnums);
// const newAZnames = arrNames.sort((a, b) => b > a ? -1 : 0);
// console.log(newAZnames);
// const newZAnames = arrNames.sort((a, b) => a > b ? -1 : 0);
// console.log(newZAnames);
// console.log(`old ${arrNums2},${arrNames2}`);


//#endregion

//#region Objects Basics
////1 Creating objects and using
////////1.1
// const userObj = {
//     name: 'Rashid',
//     surname: 'Asgarov',
//     level: 78,
//     isBanned: false,
//     dateOfBirth: '12/08/1996'
// };
// console.log(`${userObj.surname} ${userObj.name} adli istifadecinin leveli ${userObj.level}.`);

////////1.2
// const userObj = {
//     "istifadeci adi": 'Rashid',
//     "istifadeci soyadi": 'Asgarov',
//     "istifadeci leveli": 78,
//     "istifadeci ban olubmu": false,
//     "istifadeci dogum tarixi": '12/08/1996'
// };
// console.log(`${userObj["istifadeci soyadi"]} ${userObj["istifadeci adi"]} adli istifadecinin leveli ${userObj["istifadeci leveli"]}.`);

////////1.3
// const userObj = {
//     "istifadeci adi": 'Rashid',
//     "istifadeci soyadi": 'Asgarov',
//     "istifadeci leveli": 78,
//     "istifadeci ban olubmu": false,
//     "istifadeci dogum tarixi": '12/08/1996',
//     userAddress: {
//         zip: 'AZ0100',
//         locate: 'Haydar Aliyev ave.',
//         home: 74
//     }
// };
// console.log(userObj.userAddress.zip);

////////1.4 Adding new param to Object
// const userObj = {
//     name: 'Rashid',
//     surname: 'Asgarov',
//     level: 78,
//     isBanned: false,
//     dateOfBirth: '12/08/1996'
// };
// console.log(userObj.status);//undefined
// userObj.status = "enabled";
// console.log(userObj.status);//enabled

////////1.5 Mutiple users in obj array
// const users = [
//     {
//         id: 1,
//         name: "Rashid",
//         phone: 994997087828
//     },
//     {
//         id: 2,
//         name: "Tarana",
//         phone: 994559992408
//     },
//     {
//         id: 3,
//         name: "Nurlana",
//         phone: 994997087848
//     }
// ];
// console.log(users[0].name, users[1].name, users[2].name);

////////1.6 Deleting property in obj
// const users = {
//     id: 1,
//     name: "Rashid",
//     phone: 994997087828
// };
// console.log(`Below is shown user details:\n
// id: ${users.id}\n
// name: ${users.name}\n
// phone: ${users.phone}
// `);
// delete users.phone;
// console.log(users);

////2 Tasks to Objects
////////2.1
// const person = {
//     name: "Rashid",
//     gender: "Male",
//     birthday: "08/12/1996"
// };
// console.log(person.birthday);

////////2.2
// const userDetails = {
//     name: 'Asgarov Rashid',
//     level: 78,
//     colorsLiked: ['black', 'red'],
//     dob: '08/12/1996'
// };
// userDetails.age = 28;
// delete userDetails.dob;
// console.log(userDetails);

////3 Using methods(functions) in Objects
////////3.1
// const stul = {
//     ayaqSayi: 4,
//     reng: 'qara',
//     parcha: 'deri',
//     firma: 'ikea',
//     qiymet: 100,
//     ucuzlashdirOnManat() {
//         stul.qiymet -= 10;
//     },
//     bahalashdirOnManat() {
//         stul.qiymet += 10;
//     }
// };
// console.log(stul.qiymet);
// stul.ucuzlashdirOnManat();
// console.log(stul.qiymet);
// stul.ucuzlashdirOnManat();
// console.log(stul.qiymet);
// stul.bahalashdirOnManat()
// console.log(stul.qiymet);

////4 Using This in function in Objects
// const user = {
//     name: 'Rashid',
//     age: 27,
//     isBanned: false,
//     getData() {
//         console.log(`
//         Userin adi: ${this.name}
//         Userin yashi: ${this.age}
//         User ban olunubmu: ${this.isBanned == true ? 'Beli' : 'Xeyr'}
//         `);
//     },
//     changeName(nam) {
//         this.name = nam;
//     }
// };
// console.log(user.name); //Rashid
// user.changeName("Cavad");
// console.log(user.name); //Cavad

////5 Tasks to Objects PART - 2
// const user = {
//     name: 'Rashid',
//     age: 27,
//     isBanned: false,
//     setAge(age) {
//         this.age = age;
//         return this.age;
//     },
//     getYearsBeforeRetirement() {
//         const retirementAge = 65;
//         const leftYears = retirementAge - this.age;
//         this.leftYears = leftYears;
//         return this.leftYears;
//     }
// }
// console.log(user);
// console.log(`
// ${user.getYearsBeforeRetirement()}
// `);//38
// console.log(`
// ${user.setAge(64)}
// `);//64
// console.log(`
// ${user.getYearsBeforeRetirement()}
// `);//1

////6 Task to reverse strings in text if string length is more than or equal to 5
// function newReverseBigStrings(text) {
//     let newWord = "";
//     const arr = text.split(' ');
//     arr.forEach((item, index) => {
//         if (arr[index].length < 5) {
//             newWord += arr[index];
//             newWord += " ";
//         }
//         if (arr[index].length >= 5) {
//             for (let i = arr[index].length - 1; i >= 0; i--) {
//                 newWord += arr[index][i];
//             }
//             newWord += " ";
//         }
//     });
//     return newWord;
// }
// console.log(newReverseBigStrings("Salamlar bir defe de duzunu denen de."));



//#endregion

//#region Classes Basics


////1
// class Telebe {
//     name;
//     surname;
//     age;

// }
// const telebe1 = new Telebe();
// telebe1.age = 27;
// telebe1.name = "Rashid";
// telebe1.surname = "Asgarov";
// telebe1.colors = ["red", "green", "blue"];
// console.log(telebe1);

////2
// class Telebe {
//     constructor(age2, name2, surname2) {
//         this.age = age2;
//         this.name = name2;
//         this.surname = surname2;
//         this.colors = ["red", "green", "blue"];
//     }
// }
// const telebe1 = new Telebe(27, "Rashid", "Asgarov");
// console.log(telebe1);

////3 Using Methods in Classes
// class Car {
//     constructor(price, mark, year) {
//         this.price = price;
//         this.mark = mark;
//         this.year = year;
//         this.firm = "Chevrolet"
//     }
//     decreasePriceOneHundred() {
//         this.price -= 100;
//     }
// }
// const mashin1 = new Car(3000, "Cruze", 2023);
// console.log(mashin1.price);
// mashin1.decreasePriceOneHundred();
// console.log(mashin1.price);

////4 Self training classes
// class Person {
//     constructor(fullName, age, birthPlace) {
//         this.fullName = fullName;
//         this.age = age;
//         this.birthPlace = birthPlace;
//     }
//     decreaseAge() {
//         this.age -= 20;
//     }
// }
// class ARTO extends Person {//Inheritance
//     constructor(fullName, age, birthPlace, departments, openDate) {
//         super(fullName, age, birthPlace);
//         this.departments = departments;
//         this.openDate = openDate;
//     }
//     decreaseAge() {//Polymorphism
//         this.age -= 10;
//     }
// }
// class Developer extends ARTO {
//     constructor(salary, fullName, age, birthPlace, departments, openDate, workYears) {
//         super(fullName, age, birthPlace, departments, openDate);
//         this.salary = salary;
//         this.workYears = workYears;
//     }
//     decreaseAge() {//Polymorphism
//         this.age -= 5;
//     }
// }
// const dev1 = new Developer(3000, "Rashid Asgarov", 27, "Azerbaijan", "IT", "13/02/2023", 31);
// console.log(dev1);
// dev1.decreaseAge();
// console.log(dev1);

////5 Encapsulation
////////5.1
// class Car {
//     constructor(model_, maxSpeed_, company_) {
//         let model = model_;
//         let maxSpeed = maxSpeed_;
//         let company = company_;
//         this.setCompany = (companyName) => {
//             company = companyName;
//         }
//         this.getCompany = () => {
//             return company;
//         }
//         this.setMaxSpeed = (newSpeed) => {
//             maxSpeed = newSpeed;
//         }
//         this.getMaxSpeed = () => {
//             return maxSpeed;
//         }
//         this.setModel = (newModel) => {
//             model = newModel;
//         }
//         this.getModel = () => {
//             return model;
//         }
//     }
// }

// const mashin1 = new Car();
// mashin1.setCompany("CHEVROLET");
// mashin1.setMaxSpeed(220);
// mashin1.setModel("Cruze");
// console.log(`${mashin1.getCompany()} / ${mashin1.getModel()} / ${mashin1.getMaxSpeed()}`);

////////5.2
// class Room {
//     constructor(windowQuantity, wallpaperColor, roomSize) {
//         this.windowQuantity = windowQuantity;
//         this.wallpaperColor = wallpaperColor;
//         let roomSizeD = roomSize;
//         this.setRoomSizeD = (size, role) => {
//             if (role == "admin") {
//                 roomSizeD = size;
//             } else {
//                 return 'you don not have access';
//             }

//         }
//         this.getRoomSizeD = () => {
//             return roomSizeD;
//         }
//     }
// }

// const otaq = new Room(3, "red");
// console.log(otaq.setRoomSizeD(64, "user"));

////6 Task 1,2
// class Person {
//     constructor(surname, name, age, gender) {
//         this.surname = surname;
//         ////variant-1
//         // this.name = name;
//         this.age = age;
//         this.gender = gender;
//         ////variant-2
//         let nameMeth = name;
//         this.setName = (nameNew) => {
//             nameMeth = nameNew;
//         }
//         this.getName = () => {
//             return nameMeth;
//         }
//     }
//     ////variant-1
//     // rename(ad) {
//     //     this.name = ad;
//     // }
// }
// class Admin extends Person {
//     constructor(surname, name, age, gender, role, id) {
//         super(surname, name, age, gender);
//         this.role = role;
//         this.id = id;
//     }
// }
// class Player extends Admin {
//     constructor(surname, name, age, gender, role, id, level) {
//         super(surname, name, age, gender, role, id);
//         this.level = level;
//     }
// }
// const person1 = new Person("Asgarov", "Rashid", 27, "Male");
// const admin1 = new Admin("Zeynalov", "Isa", 26, "Male", "admin-role", 1);
// const player1 = new Player("Haciyev", "Efqan", 25, "Male", "admin-role", 1, 78);
// ////variant-1
// // player1.rename("Ziya");
// // console.log(person1.name);
// // console.log(admin1.name);
// // console.log(player1.name);

// ////variant-2
// player1.setName("Ziya");
// console.log(person1.getName());
// console.log(admin1.getName());
// console.log(player1.getName());


//#endregion

//#region JS Basics Tasks


////1
// const headingToDelete = document.querySelector("h1");
// headingToDelete.remove();
// const unorderedList = document.querySelector("ul");
// const newLiElement = document.createElement("li");
// newLiElement.textContent = "TITAN RTX";
// unorderedList.childNodes[3].appendChild(newLiElement);//insert into 3rd child
// unorderedList.insertBefore(newLiElement, unorderedList.firstChild);//insert at beginning

////2
// const headingText = document.querySelector("h1");
// headingText.textContent = "GeForce 20 Series";
// const getLiWithSpecifiedClass = document.querySelectorAll(".primary");
// getLiWithSpecifiedClass.forEach((item, index) => {
//     getLiWithSpecifiedClass[index].style.backgroundColor = "#ebebeb";
// })

////3
// const getFirstLi = document.querySelector("ul").childNodes[1];//1
// const getFirstLi = document.querySelector("ul").firstElementChild;//2
// console.log(getFirstLi.textContent);

////4
// console.log(document.querySelector("ul").parentElement);
// console.log(document.querySelector("ul").previousElementSibling);
// console.log(document.querySelector("ul").children);
// console.log(document.querySelector("ul").firstElementChild);

////5
// const myList = document.querySelectorAll("li");
// myList.forEach((item, index) => {
//     myList[index].classList.add("item");
//     if (!myList[index].classList.contains("primary")) {
//         myList[index].classList.add("secondary");
//     }
// })

////6
// const myButton = document.querySelector("button");
// myButton.onclick = function () {
//     myButton.classList.toggle("red");
// }

////7
// const btn = document.querySelector("button");
// btn.addEventListener("click", btnFunc)
// function btnFunc(event) {//1
//     event.target.textContent = "Rashid";
// }
// function btnFunc(e) {//2
//     e.target.textContent = "Rashid";
// }

////8
// var ulItems = document.querySelectorAll("button");
// ulItems.forEach((item, index) => {
//     item.addEventListener("click", addListen);
// })
// function addListen(e) {
//     e.target.style.textDecoration = "line-through";
//     ulItems.forEach((item, index) => {
//         item.removeEventListener("click", addListen);
//     })
// }

////9
// var ulItems = document.querySelectorAll("button");
// ulItems.forEach((item, index) => {
//     item.addEventListener("click", addListen);
// })
// function addListen(e) {
//     e.target.style.color = "gray";
// }

////10
// document.body.addEventListener("keydown", (e) => {
//     if (e.key == "Enter") {
//         console.log("Enter is Pressed");
//     }
// })

////11
// msg,msgType,responseNotification
// document.querySelector("form").addEventListener("submit", function (e) {
//     e.preventDefault();
//     console.log(document.querySelector("#msg").value);
//     console.log(document.querySelector("#msgType").value);
//     console.log(document.querySelector("#responseNotification").checked);
// })


//#endregion

//#region FORM Basics


////1
// const loginForm = document.querySelector("form");
// loginForm.addEventListener("submit", function (e) {
//     e.preventDefault();
//     const formData = new FormData(this);
//     console.log(formData.get("username2"));
//     console.log(formData.get("pass2"));
// })

////2
// const loginForm = document.querySelector("form");
// loginForm.addEventListener("submit", function (e) {
//     e.preventDefault();
//     // userPass length must be more than 5
//     const data = new FormData(this);
//     const pass = data.get("userPass");
//     pass.length > 5 ? console.log("access is valid") : console.log("access denied");
// })


//#endregion

//#region API JSON BASICS


////1
// fetch("https://api.genderize.io?name=luc")
//     .then(res => res.json())
//     .then(resp => {
//         console.log(JSON.stringify(resp));
//         console.log(resp['count'])
//     })

////2
// const table = document.createElement("table");
// table.setAttribute("id", "myTable");
// table.innerHTML = `
// <thead>
// <th>From</th>
// <th>To</th>
// <th>Amount</th>
// </thead>
// <tbody id="table_body">

// </tbody>
// `;
// document.body.append(table);
// var tableRef = document.getElementById('myTable').getElementsByTagName('tbody')[0];
// fetch("https://acb-api.algoritmika.org/api/transaction")
//     .then(res => {
//         return res.json();
//     })
//     .then(resp => {
//         resp.forEach(element => {
//             console.log(element);
//             var newRow = `
//            <tr>
//            <td>${element.from}</td>
//            <td>${element.to}</td>
//            <td>${element.amount}</td>
//            </tr>
//            `;
//             tableRef.innerHTML += newRow;
//         });
//     })
//     .catch(error => {
//         console.log(error.message);
//     })

////3
////////3.1 GET
// fetch("https://acb-api.algoritmika.org/api/transaction?from=Sam Stone&to=Joaquin Phoenix")
//     .then(res => res.json())
//     .then(result => {

//         const rest = result[Math.floor(Math.random() * result.length)];
//         console.log(rest);

//     })

////////3.2 POST
// fetch("https://acb-api.algoritmika.org/api/transaction", {
//     method: "POST",
//     headers: {
//         'Content-Type': 'application/json'
//     },
//     body: JSON.stringify({
//         "from": "Rashid",
//         "to": "Nane",
//         "amount": 888
//     })
// })
//     .then(res => res.json())
//     .then(resp => console.log(resp))

////////3.3 SECONDS TIMER
// const headingThree = document.createElement("h3");
// headingThree.innerText = Number(0);
// document.body.append(headingThree);
// setInterval(() => {
//     headingThree.innerText = +headingThree.innerText + 1;
// }, 1000)

////////3.4
// const url = "https://rickandmortyapi.com/api/character/";

// function getRnMCaracter(pers_id) {
//     if (pers_id == 0) {
//         return Promise.reject("Rejected");
//     } else {
//         return fetch(url + pers_id);
//     }
// }
// getRnMCaracter(0).then(res => res.json()).then(resp => console.log(resp)).catch(err => console.log(err));


//#endregion

//#region REACT, LIBRARY, FRAMEWORK, JSX, CODESANDBOX


////1 fake api data async await
// data={
//     name:"Rashid",
//     surname:"Asgarov"
// }
// function myFakeApi(){
//     return new Promise(resolve=>{
// setTimeout(()=>resolve(data),5000);
//     })
// }
// async function getData(){
//     const resp = await myFakeApi();
//     console.log(resp);
// }
// getData();


////2










//#endregion

