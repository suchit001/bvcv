const MongoClient = require('mongodb').MongoClient;
var ObjectId = require('mongodb').ObjectId;
const url = "mongodb+srv://suchitgupta:suchit007@mongodb-8o0dv.mongodb.net/newdb?retryWrites=true&w=majority";
const client = new MongoClient(url, { useNewUrlParser: true });

var flag = 2;
console.log('yeppers');
//CREATE COLLECTION
if(flag == 1)
{
	MongoClient.connect(url,function(err,db) {
	if (err) throw err;
	var dbv = db.db("mynewdb");
	dbv.createCollection("testcollection",function(err,res){
		if (err) throw err;
		console.log("Collection created brooo!!");
		db.close();
	});
});
}

//INSERT DOCUMENT
else if(flag == 2)
{
	MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  var dbo = db.db("mynewdb");
  var myobj = { name: "Manjyor", address: "Kandivali", rollno: 63, branch: "A" };
  dbo.collection("employee").insertOne(myobj, function(err, res) {
    if (err) throw err;
    console.log("1 document inserted");
    socket.emit('dbreply','Document Inserted');
    db.close();

    //TO INSERT MANY ENTRIES AT ONCE
  //   dbo.collection("customers").insertMany(myobj, function(err, res) {
  //   if (err) throw err;
  //   console.log("Number of documents inserted: " + res.insertedCount);
  //   db.close();
  // });

  });
});
}

//FIND DOCUMENT
else if(flag == 3)
{
	MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  var dbo = db.db("mynewdb");
  dbo.collection("employee").findOne({name:"Srihari Nair"}, function(err, result) {
    if (err) throw err;
    console.log(result);
    db.close();
  });
// // FIND ALL DOCUMENTS

//     dbo.collection("employer").find({_id:ObjectId("5d9f57d1310f8c06718f4ca3")}).toArray(function(err, result) {
//     if (err) throw err;
//     console.log(result);
//     db.close();
//   });

//    // REQUESTING OF SPECIFIC FIELDS OF DOCUMENTS **WITH LIMIT FUNCTION**
//     dbo.collection("employer").find({_id = "5d9f57d1310f8c06718f4ca3"}, { projection: { _id: 1, name: 1, Founder: 1 } }).limit(5).toArray(function(err, result) {
//     if (err) throw err;
//     console.log(result);
//     db.close();
//   });

 // FIND SPECIFIC RECORD OF DOCUEMENT
  var query = { address: "Park Lane 38" };
  dbo.collection("customers").find(query).toArray(function(err, result) {
    if (err) throw err;
    console.log(result);
    db.close();
  });

 // REGULAR EXPRESSION FIND QUERY
  var query = { name: /^S/ };
  dbo.collection("employee").find(query).toArray(function(err, result) {
    if (err) throw err;
    console.log(result);
    db.close();
  });

});
}



//UPDATION QUERY
else if(flag == 4)
{
	MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  var dbo = db.db("mynewdb");
  // var myquery = { name: "Srihari Nair" };
  // var newvalues = { $set: {address: "Thakur Complex" } };
  // dbo.collection("employee").updateOne(myquery, newvalues, function(err, res) {
  //   if (err) throw err;
  //   console.log("1 document updated");
  //   db.close();
  // });


  //UPDATE MANY DOCUMENTS AT ONCE : CAN ALSO ADD NEW ENTRIES IN THE DOCUMENT

    var myquery = { name: /^S/ };
  var newvalues = {$set: {company_id: "5d9f57d1310f8c06718f4ca3" } };
  dbo.collection("employee").updateMany(myquery, newvalues, function(err, res) {
    if (err) throw err;
    console.log(res.result.nModified + " document(s) updated");
    db.close();
  });


});
}


//JOIN FUNCTIONS
else if(flag == 5)
{
	MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  var dbo = db.db("mynewdb");
  dbo.collection('employee').aggregate([
  	{"$project": { "compid": { "$toString": "$_id" }}},
    { $lookup:
       {
         from: 'employer',
         localField: 'company_id',
         foreignField: 'compid',
         as: 'company_details'
       }
     }
    ]).toArray(function(err, res) {
    if (err) throw err;
    console.log(JSON.stringify(res));
    db.close();
  });
});
}