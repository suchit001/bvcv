const mongoose = require('mongoose');

const employerSchema = mongoose.Schema({
	fname:{
		type: String,
		required:true
	},
	lname:{
		type: String,
		required: true		
	},
	email: {
		type: String,
		required: true
	},
	password: {
		type: String,
		required: true
	},
	rep: {
		type: "number"
	},
	phoneno:{
		type: "number"
	},
	organization:{
		type:String
	}
})


module.exports = mongoose.model('Employer',employerSchema);
