let diccionario = new Map([
    ["Español", ["Hola", "Como", "Estas", "Tu", "Hoy"]],
    ["Ingles", ["Hello", "How", "Are", "You" , "Today"]],
    ["Frances", ["Bonjour", "Comme", "Ces", "Toi", "Aujourd'hui"]],
    ["Aleman", ["Hallo", "Wie", "Diese", "Du", "Heute"]]
]);

for (let [idioma, [p1, p2, p3, p4, p5]] of diccionario) {
    document.write(`Idioma: ${idioma} - ${p1} / ${p2} / ${p3} / ${p4} / ${p5} <br>`);
}