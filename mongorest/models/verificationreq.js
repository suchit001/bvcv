const mongoose = require('mongoose');

const verifschema = mongoose.Schema({
	reqemail: String,
	veremail: String,
	currentdate:Date,
	description: String
})

module.exports = mongoose.model('VerificationRequest',verifschema);