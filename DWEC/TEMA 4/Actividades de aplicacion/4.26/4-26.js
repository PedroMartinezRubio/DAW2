let array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

function diagonal(array){
    for(let i = 0; i < array.length; i++){
        if(i === 0){
            array[i][1] = 0;
            array[i][2] = 0;
        }else if(i === 1){
            array[i][0] = 0;
            array[i][2] = 0;
        }else if(i === 2){
            array[i][0] = 0;
            array[i][1] = 0;
        }
    }

    for(let i = 0; i < array.length; i++){
        for(let j = 0; j < array[i].length; j++){
            document.write(array[i][j]);
        }
        document.write("<br>");
    }
}

diagonal(array);