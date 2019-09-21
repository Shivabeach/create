
(function () {
  "use strict";
  const button = document.createElement('button');
  const attribute = document.createAttribute('id');
  attribute.value = `some-value`;
  button.setAttributeNode(attribute);
  button.innerHTML = 'Click me';
  document.querySelector('.click').appendChild(button);
}) ();