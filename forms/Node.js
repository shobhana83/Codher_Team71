var mysql = require('score');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "tamilhacks"  
});  
con.connect(function(err) {  
if (err) throw err;  
console.log("Connected!");  
var sql = "INSERT INTO scores (totalscore) VALUES ('1')";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("1 record inserted");  
});