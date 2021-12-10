## Description
Given a square matrix, calculate the absolute difference between the sums of its diagonals.

For example, the square matrix `arr` is shown below:

`1 2 3`
`4 5 6`
`7 8 9`

The left-to-right diagonal = `1 + 5 + 9 = 15` . The right to left diagonal = `3 + 5 + 9 = 17`. Their absolute difference is `[15-17] = 2` .

diagonalDifference takes the following parameter:
- `int arr[n][m]`: an array of integers

Returns:
- `int`: the absolute diagonal difference

## Notes
I created two loops that run an amount of times equal to the square size.
- The first loop starts at `$arr[$i][$i]` which is `[0][0]`, it then simply goes up by one each time, up to `$arr[$max][$max]`. This is what creates the left to right diagonal line.
- The second loop also starts at `$arr[$i][$i]`, however I created another variable `$t = $n - 1`. `$t` represents the final entry index for each array. It has to include the `- 1` because the arrays are zero indexed.
- Then once the second loop has completed once, the value of `$t` goes down by 1, this is what creates the right to left diagonal line as the loop continues to iterate.
- Because you are calculating the **difference**, you can't just subtract one number from another because if you have EG `2` and `-10` then the difference would be `-8` which is wrong it's `12` (trying to subtract a negative number won't give a positive number).
- Therefore, instead of subtracting, use `abs($number1, $number2);` which gives the **absolute difference** between 2 numbers.
