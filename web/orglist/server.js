const ejs = require("ejs").__express;
const express = require('express');
const app = express();
var path = require('path');
app.engine('.ejs', ejs);

app.set("views", path.join(__dirname,"views"));
app.set("view engine", "ejs");

// Following the "Single query" approach from: https://node-postgres.com/features/pooling#single-query

const { Pool } = require("pg"); // This is the postgres database connection module.

// This says to use the connection string from the environment variable, if it is there,
// otherwise, it will use a connection string that refers to a local postgres DB
const connectionString = process.env.DATABASE_URL;

// Establish a new connection to the data source specified the connection string.
const pool = new Pool({connectionString: connectionString});


app.set('port', process.env.PORT);
app.use(express.static(__dirname + 'public'));

app.get("/", (req, res) => res.render('pages/home'));
app.get("/login", (req, res) => res.render('pages/login'));
app.get('/validlogin', login);
//app.get('/user', userMaint);
//app.get('/member', mbrMaint);
//app.get('/organization', orgMaint);
//app.get('/position', posMaint);
//app.get('/calling', submitCalling);

// Start the server running
app.listen(app.get('port'), function() {
  console.log('Node app is running on port', app.get('port'));
});

// Function to login in the user validating their password and
// assigning their permissions
function login(request, response) {
  var username = request.query.username;
  var password = request.query.password;

  validateLogin(username,password, function(error, result) {
    if (error || result == null || result.length != 1) {
      console.log('Error validating user');
      response.render('pages/loginfail');
    } else {
      console.log("User " + username + " successfully logged in.");
      userAccess = result[1];
      userId = result[0];
      console.log(userAccess);
      console.log(userId);
      var parameters = {uname: username};
      response.render('pages/loggedin', parameters);
    }
  });
}

function validateLogin(username,password, callback) {
  console.log("Validating user login with user name: " + username);

  // Set up the SQL that we will use for our query. Note that we can make
  // use of parameter placeholders just like with PHP's PDO.
  var sql = "SELECT userid, useraccessrights FROM users WHERE username = $1 and password = $2";

  // We now set up an array of all the parameters we will pass to fill the
  // placeholder spots we left in the query.
  var params = [username,password];

  // This runs the query, and then calls the provided anonymous callback function
  // with the results.
  pool.query(sql, params, function(err, result) {
    // If an error occurred...
    if (err) {
      console.log("Error in query: ")
      console.log(err);
      callback(err, null);
    }

    // Log this to the console for debugging purposes.
    if (result.length > 0)
      console.log("Valid user found");
    else
      console.log('User not found');


    // When someone else called this function, they supplied the function
    // they wanted called when we were all done. Call that function now
    // and pass it the results.

    // (The first parameter is the error variable, so we will pass null.)
    callback(null, result.rows);
  });

}
