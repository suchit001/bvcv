const mongoose = require('mongoose');

const employeeSchema = mongoose.Schema({
	fname:{
		type: String,
	},
	lname:{
		type: String,
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
	resume: {
		phoneno: {
			type: "number"
		},
		education: {
			institution_name: String,
			startd: String,
			endd: String,
			grade: {
				type: "number"
			},
			degree: String,
			studid:{
				type:"number"
			},
			verif:{
				type:String,
				default:null
			}
		},
		workexp: {
			orgname: String,
			designation: String,
			startd: String,
			endd: String,
			description: String,
			verif:{
				type:"number",
				default:0
			}			
		},
		responsib: {
			title: String,
			description: String
		},
		certification: {
			program: String,
			orgname: String,
			startd: String,
			endd: String,
			description: String
		},
		project: {
			title: String,
			startd: String,
			endd: String,
			description: String,
			link: String
		},
		skill: {
			skill: String,
			rating: String,
		},
		adddet: {
			title: String,
			description: String
		}
	}
})


module.exports = mongoose.model('Employee',employeeSchema);
