const express = require('express');
const app = express();

/**
 * @api {get} /users To get the list of all users
 * @apiName Fetch all Users
 * @apiGroup Users
 */

app.get('/users', (req, res) => {
	res.send('hello from test route of users');
});

/**
 * @api {post} /postUsers to add new user
 * @apiName Add new user
 * @apiGroup Users
 * 
 */

app.listen(3000, () => {
	console.log('http://localhost:3000/');
});
