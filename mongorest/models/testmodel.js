const mongoose = require('mongoose');

const resSchema = mongoose.Schema({
	username:{
		type:String,
		required:true
	},
	school: {
		type:String,
		required:true
	},
	jr_college:{
		type: String,
		required:true
	},
	undergrad_college:{
		type: String,
		required: true		
	},

	job1: {
		type: String,
		required: true
	},
	job2: {
		type: String,
		required: true
	},
	job3: {
		type: String,
		required: true
	},
})


module.exports = mongoose.model('Resume',resSchema);
