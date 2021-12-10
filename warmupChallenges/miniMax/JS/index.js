function miniMaxSum(arr) {
    arr.sort((a, b) => a - b);
    let arrSmall = arr.slice();
    let arrBig = arr.slice();
    arrSmall.pop();
    arrBig.shift();
    console.log(arrSmall.reduce((a, b) => a + b, 0), arrBig.reduce((a, b) => a + b, 0));
}