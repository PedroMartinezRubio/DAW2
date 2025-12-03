let patron = /[0-9]+[\.\,][0-9]{2}\s\€/;

document.write(patron.test("9.99 €") + "<br>");  // true
document.write(patron.test("15,50 €") + "<br>"); // true
document.write(patron.test("100.00 €") + "<br>"); // true
document.write(patron.test("9.9 €") + "<br>");   // false
document.write(patron.test("9,999 €") + "<br>"); // false
document.write(patron.test("9-99 €") + "<br>");  // false