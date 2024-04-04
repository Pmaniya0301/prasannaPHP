function stringcheck() {
    let arr = ["abc", "abcc", "abcdd"];
    let result = [];

    arr.forEach(element =>{
        for (let i = 0; i < element.length; i++) {
            for (let j = 0; j < element.length; j++) {
                if(element.charAt(i) == element.charAt(j)){
                    break;
                }else{
                    result.push(element);
                }
            }
        }
    })

    console.log(result);

}
