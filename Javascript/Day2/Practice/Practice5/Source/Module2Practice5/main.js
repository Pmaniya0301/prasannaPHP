let arr = [1,2,3,4,5,6];

arr.push(7);

console.log(arr);

arr.pop();

console.log(arr);

let removedElement = arr.shift();

console.log("Removed Element " + removedElement);
console.log("array after element removal "+ arr);

//also it will be leave blank sapce so therefor we use pop or shift 
delete arr[3];
console.log(arr);


