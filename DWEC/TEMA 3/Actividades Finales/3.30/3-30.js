let followers = new Set();
followers.add("Juan");
followers.add("Maria");
followers.add("Santi");
followers.add("Lucia");
followers.add("Mario");

followers.delete("Santi");
followers.delete("lucia");

followers.add("Sebastian");
followers.add("Marta");
followers.add("Raul");
followers.add("Mirian");
followers.add("Sara");
followers.add("Dani");
followers.add("Pedro");

let cantidad = 0;

for (const persona of followers) {
    cantidad++;
}
console.log("La cuenta tiene " +cantidad+ " de seguidores:");
console.log(followers);
