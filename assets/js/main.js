let urls = document.getElementsByTagName('ul');

(function () {
  "use strict";
  const button = document.createElement('button');
  const attribute = document.createAttribute('id');
  attribute.value = `some-value`;
  button.setAttributeNode(attribute);
  button.innerHTML = 'Click me';
  document.querySelector('.click').appendChild(button);
}) ();

//* adding an array
const numbers = [10,20,30,40];
const sum = numbers.reduce((accumulator, currentValue) => {
  return accumulator + currentValue;
}, 0);
console.log(sum);

//! adding arrays
const numbering = [10,20,10,40];
let sums = 0
for (let n of numbering)
  sums += n;
console.log(sums);