let patron = /[0-23]{2}:[0-59]{2}/;

document.write(patron.test("12:30") + "<br>"); // true
document.write(patron.test("25:00") + "<br>"); // false
document.write(patron.test("09:75") + "<br>"); // false
document.write(patron.test("00:00") + "<br>"); // true