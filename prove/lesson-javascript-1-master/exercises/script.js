const quantity = [12, 34, 45, 7, 19];
let total = 0;
let value= 0
for  (value of quantity) {
    if ((value % 2) != 0) {
       
        continue;

    } else {

        total += value
    }


}
console.log(total)