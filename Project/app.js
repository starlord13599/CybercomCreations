const dotenv = require('dotenv');
dotenv.config();
const PORT = process.env.PORT || 3000;
const express = require('express');
const app = express();
const chalk = require('chalk');
const confirm = require('prompt-confirm');
const ejsLayout = require('express-ejs-layouts');
const { initialize, displayMigrations } = require('./helpers/migrations');
const { findFreePort } = require('./helpers/port');
require('./core/connection');

//STATIC
app.use(express.static('public'));
app.use('/css', express.static(__dirname + 'public/css'));
app.use('/img', express.static(__dirname + 'public/img'));
app.use('/js', express.static(__dirname + 'public/js'));

//MIDDLEWARE
app.use(ejsLayout);

//TEMPLATE ENGINE
app.set('view engine', 'ejs');
app.set('layout', './layouts/oneColumn.ejs');

//INITIALIZE SERVER
initialize()
	.then((result) => {
		displayMigrations(result);

		findFreePort()
			.then(async (freePort) => {
				if (!(freePort === 3000)) {
					await new confirm(`Port ${freePort} is available.Do you want to run on port ${freePort}?`).run();
				}

				app.listen(freePort, () => console.log(`Running server on ${freePort}`));
			})
			.catch((err) => {
				console.log(chalk.red(err));
			});
	})
	.catch((err) => {
		console.log(chalk.red(err));
		process.exit();
	});

//TESTING
//TESTING
