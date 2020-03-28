const express = require('express');
const router = express.Router();
const Employer = require('../models/employer');
const Employee = require('../models/employee');
const passwordhash = require('password-hash');
const VerificationRequest = require('../models/verif');

router.get('/disp',async (req,res)=>{
	try{
	const emp = await Employer.find();
	console.log(emp);
	res.json(emp);
}catch(err)
{
	res.json({message:err});	
}
})

router.post('/login',async(req,res)=>{
	try{
	console.log(req.body);
	const user = await Employer.find({email: req.body.email});
	if(!user){
		res.json({message:"User not found"});
	}
	else if(passwordhash.verify(req.body.password,user[0].password))
	{
		res.json(user);
	}
	else
	{
		res.json({message:"Password Incorrect"});

	}
}catch(err){
	res.json({message:err});
}
})

router.post('/signup',(req,res)=>{
	console.log(req);
	const user = new Employer({
		fname:req.body.fname,
		lname:req.body.lname,
		email: req.body.email,
		password: passwordhash.generate(req.body.password),
		rep: 100
	});
	user.save()
	.then(data =>{
		res.json(data);
	})
	.catch(err=>{
		res.json({message:err});
	})
})

router.post('/verifreq',async (req,res)=>{
	try{
	const reqs = await VerificationRequest.find({verifemail:req.body.email});
	console.log(reqs);
	res.json(reqs);
}catch(err)
{
	res.json({message:err});	
}
})

router.post('/verifcomplete',async (req,res)=>{
	try{
	console.log(req.body);
	
	var reqs = await VerificationRequest.deleteOne({verifemail:req.body.verifemail,sendemail:req.body.sendemail});
	console.log(reqs);
	res.json(reqs);
}catch(err)
{
	res.json({message:err});	
}
})

module.exports = router;
