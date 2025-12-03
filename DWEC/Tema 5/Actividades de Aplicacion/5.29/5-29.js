let patron = /^https:\/\/[^ñ]+\.es$/;

document.write(patron.test("https://google.es") + "<br>"); // true
document.write(patron.test("http://google.es") + "<br>"); // false
document.write(patron.test("https://ñoogle.es") + "<br>"); // false
document.write(patron.test("https://google.com") + "<br>"); // false
document.write(patron.test("https://example.es") + "<br>"); // true