## Description
Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers. Then print the respective minimum and maximum values as a single line of two space-separated long integers.

For example, `arr = [1, 3, 5, 7, 9]`

The minimum sum is `1 + 3 + 5 + 7 = 16` and the maximum sum is `3 + 5 + 7 + 9 = 24`. The function prints `16 24`

miniMaxSum has the following parameter(s):

- `arr`: an array of  integers

Prints:
- `int` x2: two space-separated integers on one line: the minimum sum and the maximum sum.

## Notes
First I `arr.sort` the array. The callback `(a, b) => a - b` can be used when you want to sort numbers in ascending order. If you just do `arr.sort()` it can cause issues because it converts values to strings and compares their UTF values, this can cause issues where `44` is weighted as being 'smaller' than EG `9`.

Then I `arr.slice()` the array twice, without putting any params in the `slice()` to effectively create two clones of the array. I can now mutate these arrays without changing the original array.

I know that the smallest value will be the first entry and the biggest value will be the last entry because of the `arr.sort()` I did earlier.

Therefore all I need to do is `arrSmall.pop()` the array which will contain the minimum sum, which takes off the final entry of the array which I already know is the biggest.

Then I `arrBig.shift()` the array which will contain the maximum sum. `shift()` is the reverse of `pop()`, it takes out the first element of the array, which I already know will be the smallest.


