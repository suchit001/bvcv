const express = require('express');
const router = express.Router();
const Employee = require('../models/employee');
const passwordhash = require('password-hash');
const Resume = require('../models/testmodel');
const VerificationRequest = require('../models/verif');


router.post('/test',async(req,res)=>{
	try{
	console.log(req.body.email);
	var empname = req.body.email;
	const post = await Employee.find({ email: empname});
	var wk = post[0]['resume']['workexp'];
	console.log(wk.length);
	res.json(post);
}catch(err){
	res.json({message:err});
}
})

router.post('/resume/',async(req,res)=>{
	try{
	var empname = req.body.email;
	var emp = await Employee.find({ email: empname});
	var reqs = await VerificationRequest.find({verifemail:req.body.verifemail,sendemail:req.body.email});	
	emp = emp[0];
	reqs = reqs[0];

	res.json({"resume":emp.resume,"req":reqs});
}catch(err){
	res.json({message:err});
}
})

router.post('/updateres',async(req,res)=>{
	try{
	// const employee = await Employee.find({ email: req.body.email});
	// console.log(post);
	const employee = await Employee.updateOne({email:req.body.email},{$set:{resume:req.body.resume}});
	res.json(employee);
}catch(err){
	res.json({message:err});
}
})


router.post('/verifreq',async(req,res)=>{
	console.log(req.body.sendemail);
	const verif = new VerificationRequest({
		sendemail: req.body.sendemail,
		verifemail: req.body.verifemail,
		description: req.body.description,
		workexp: req.body.workexp,
		val:req.body.val
	});
	verif.save()
	.then(data =>{
		res.json(data);
	})
	.catch(err=>{
		res.json({message:err});
	})
})



router.post('/eres',(req,res)=>{
	console.log(req);
	const resume = new Resume({
		username:req.body.username,
		school: req.body.school,
		jr_college:req.body.jr_college,
		undergrad_college:req.body.undergrad_college,
		job1: req.body.job1,
		job2: req.body.job2,
		job3: req.body.job3
	});
	console.log(resume);
	resume.save()
	.then(data =>{
		res.json(data);
	})
	.catch(err=>{
		res.json({message:err});
	})
})

// router.get('/all', async (req,res)=>{
// 	try{
// 	const allposts = await Employee.find();
// 	res.json(allposts);
// }catch(err)
// {
// 	res.json({message:err});
// }
// })

// //NEW EMPLOYEE
// router.post('/signup',(req,res)=>{
// 	console.log(req.body);
// 	const user = new User({
// 		name: req.body.name,
// 		email: req.body.email
// 	});
// 	user.save()
// 	.then(data =>{
// 		res.json(data);
// 	})
// 	.catch(err=>{
// 		res.json({message:err});
// 	})
// })

router.post('/resume',(req,res)=>{
	console.log(req.body);
	const resume = new Resume({
		name: req.body.name,
		lname: req.body.lname,
		dob:req.body.dob,
		school: req.body.school,
		spercent: req.body.spercent,
		college: req.body.college,
		cpercent: req.body.cpercent,
		underg: req.body.underg,
		cgpa: req.body.cgpa,
		pg: req.body.pg,
		pcgpa: req.body.pcgpa,
		company: req.body.company,
		role: req.body.role,
		strtdate: req.body.strtdate,
		enddate: req.body.enddate
	})
	resume.save()
	.then(data =>{
		res.json(data);
	})
	.catch(err=>{
		res.json({message:err});
	})
})

//---------------------------------------------------------------------------------------------------------------

// //ALL EMPLOYEES
// router.get('/all', async (req,res)=>{
// 	try{
// 	const allposts = await User.find();
// 	res.json(allposts);
// }catch(err)
// {
// 	res.json({message:err});
// }
// })


router.get('/disp',async (req,res)=>{
	try{
	const emp = await Employee.find();
	console.log(emp);
	res.json(emp);
}catch(err)
{
	res.json({message:err});	
}
})

//NEW EMPLOYEE
router.post('/signup',(req,res)=>{
	console.log(req.body);
	const user = new Employee({
		fname: req.body.fname,
		lname: req.body.lname,
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


//FIND EMPLOYEE
router.get('/find/:empName',async(req,res)=>{
	try{
	const post = await Employee.findById(req.params.empName);
	res.json(post);
}catch(err){
	res.json({message:err});
}
})

router.post('/findemp/',async(req,res)=>{
	try{
	console.log(req.body.email);
	var empname = req.body.email;
	const post = await Employee.find({ email: empname});

	res.json(post);
}catch(err){
	res.json({message:err});
}
})

router.post('/login',async(req,res)=>{
	try{
	console.log(req.body);
	const user = await Employee.find({email: req.body.email});
	if(!user){
		console.log("User not found");
		res.json({message:"User not found"});
	}
	else if(passwordhash.verify(req.body.password,user[0].password))
	{
		console.log(user);
		res.json(user);
	}
	else
	{
		console.log("Password Incorrect");
		res.json({message:"Password Incorrect"});

	}
}catch(err){
	res.json({message:err});
}
})

//CONTACT FORM
router.post('/contact',async(req,res)=>{
	const contact = new Contact({
		cname: req.body.cname,
		cemail: req.body.cemail,
		subject: req.body.subject,
		message: req.body.message		
	})
	contact.save()
	.then(data =>{
		res.json(data);
	})
	.catch(err=>{
		res.json({message:err});
	})
})

router.post('/update',async(req,res)=>{
	console.log(req.body.username);
	const filter = {username:req.body.username};
	const update = {rep:110};
	// const userdash = await User.find({username: req.body.username});
	// console.log("userdash:"+userdash);
	const user = await Employee.updateOne({username:req.body.username},{$set:{rep:1500}});
	console.log(user);
	// let doc = await User.findOneAndUpdate(filter, update);
	// console.log(doc);
	res.json(user);
})

router.post('/reps',async(req,res)=>{
	var emp1 = req.body.user1;
	var emp2 = req.body.user2;
	console.log(req.body);
	console.log(req);
	const temp = await Employee.find({ username: emp1});
	rep1 = temp[0].rep;
	const temp2 = await Employee.find({ username: emp2});
	rep2 = temp2[0].rep;
	const post = {rep1:rep1,rep2:rep2};
	console.log(post);
	res.json(post);
})

router.post('/Repsdone',async(req,res)=>{
	const user1 = await Employee.updateOne({username:req.body.user1},{$set:{rep:req.body.rep1}});
	const user2 = await Employee.updateOne({username:req.body.user2},{$set:{rep:req.body.rep2}});
	res.json("Thanks for the rep!!");

})

// router.post('/verifreq',async(req,res)=>{
// 	const vreq = new VerificationRequest({
// 		username: req.body.username,
// 		verifier: req.body.verifier,
// 	})
// 	vreq.save()
// 	.then(data =>{
// 		res.json(data);
// 	})
// 	.catch(err=>{
// 		res.json({message:err});
// 	})
// })


module.exports = router;

