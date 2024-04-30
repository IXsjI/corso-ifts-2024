let validator = require('email-validator');

let isValida = validator.validate('test@email.com');

console.log(isValida);