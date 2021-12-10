## Notes
New function used: `number_format`
- `number_format` will format a number with grouped thousands and can determine how many decimal places the number has. I used this to achieve the 6 decimal places required.
  I `foreach`ed through the array, giving +1 to the corresponding number score

Then I created a custom function to calculate a ratio. I did this because trying to divide within the params for `number_format` did not work so I made the `calcRatio` function to avoid having to repeat myself.

Then I simply calculate the ratio for each set of numbers by taking their score and passing it through the `calcRatio` function.

Then I simply echo the results onto the page.

One thing to always remember is that in hackerrank, the easiest way to add a new line without messing with anything is to echo/print/etc `"\n"`
