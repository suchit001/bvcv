const request = require('request');

request('http://192.168.0.65:3000/employee/disp', { json: true }, (err, res, body) => {
  if (err) { return console.log(err); }
  console.log(res);
});