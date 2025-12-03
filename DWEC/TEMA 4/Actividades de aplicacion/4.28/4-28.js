let array1 = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

let array2 = [
    [8, 2, 2, 4],
    [5, 12, 7, 8],
    [9, 10, 5, 12],
    [8, 9, 15, 16]
];

function pintarNuevoArray(array1, array2){
    let array3 = [
        [ , , , ],
        [ , , , ],
        [ , , , ],
        [ , , , ]
    ];
    for(let i = 0; i < array1.length; i++){
        for(let j = 0; j < array1[i].length; j++){
            if(array1[i][j] === array2[i][j]){
                array3[i][j] = array1[i][j];
            }else{
                array3[i][j] = 0;
            }
        }
    }

    for(let i = 0; i < array3.length; i++){
        for(let j = 0; j < array3[i].length; j++){
            document.write(array3[i][j] + " ");
        }
        document.write("<br>");
    }
}

pintarNuevoArray(array1, array2);