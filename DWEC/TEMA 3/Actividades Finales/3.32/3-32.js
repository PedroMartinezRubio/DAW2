const ciudades = new Map([
    ["Madrid", [-3.70275, 40.41831]],
    ["Barcelona", [2.15899, 41.38879]],
    ["Valencia", [-0.37966, 39.47391]],
    ["Granada", [-3.60667, 37.18817]],
    ["Murcia", [-1.13004, 37.98704]]
]);

for (const [ciudad, [longitud, latitud]] of ciudades) {
    document.write(`La ciudad ${ciudad} tiene una latitud de ${latitud} y una longitud de ${longitud}<br>`);
}