## Description
Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. Print the decimal value of each fraction on a new line with  places after the decimal.

This challenge introduces precision problems. The test cases are scaled to six decimal places, though answers with absolute error of up to `10^-4` are acceptable.

For example, `arr = [1, 1, 0, -1, -1]`

There are `n` elements, two positive, two negative and one zero. Their ratios are `2/5 = 0.400000` , `2/5 = 0.400000` and `1/5 = 0.200000` . Results are printed as:

0.400000

0.400000

0.200000

plusMinus has the following parameter(s):

`int arr[n]`: an array of integers

Returns: 
- `float n` x3: The ratio out of the total array count of positive numbers, negative numbers and zeros.