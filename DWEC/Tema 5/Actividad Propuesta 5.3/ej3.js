let skills = new String(`
  {
    "name": "Alice Smith",
    "id": 101,
    "skills": ["JavaScript", "CSS", "HTML"],
    "name": "Bob Johnson",
    "id": 102,
    "skills": ["Python", "SQL", "Java"]}
`);

console.log(JSON.parse(skills));
let ob = JSON.parse(skills);
for (propiedad in ob) {
    console.log(propiedad);
}