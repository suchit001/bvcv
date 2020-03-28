const mongoose = require('mongoose');

const verifschema = mongoose.Schema({
	sendemail: String,
	verifemail: String,
	description: String,
	val: String,	
	workexp: {
			orgname: String,
			designation: String,
			startd: String,
			endd: String
	}
})

module.exports = mongoose.model('VerificationRequest',verifschema);