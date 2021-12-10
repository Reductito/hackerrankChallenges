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

## Notes
New function used: `number_format`
- `number_format` will format a number with grouped thousands and can determine how many decimal places the number has. I used this to achieve the 6 decimal places required.
I `foreach`ed through the array, giving +1 to the corresponding number score

Then I created a custom function to calculate a ratio. I did this because trying to divide within the params for `number_format` did not work so I made the `calcRatio` function to avoid having to repeat myself.

Then I simply calculate the ratio for each set of numbers by taking their score and passing it through the `calcRatio` function.

Then I simply echo the results onto the page.

One thing to always remember is that in hackerrank, the easiest way to add a new line without messing with anything is to echo/print/etc `"\n"`
