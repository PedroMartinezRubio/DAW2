function escapeHTML(text) {
  const map = {
    '&': 'y',
    '"': 'doblesComillas',
    '<': 'menor que',
    '>': 'mayor que'
  };

  return text.replace(/[&"<>]/g, c => map[c]);
}


document.writeln(escapeHTML("Sal & Pimienta") + "<br>");
document.writeln(escapeHTML('5 < 10 y 10 > 5') + "<br>");
document.writeln(escapeHTML('" Hola Mundo "') + "<br>");