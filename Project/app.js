const dotenv = require('dotenv');
dotenv.config();
const PORT = process.env.PORT || 3000;
const express = require('express');
const app = express();
const fs = require('fs');
const chalk = require('chalk');
const confirm = require('prompt-confirm');
const ejsLayout = require('express-ejs-layouts');
const morgan = require('morgan');
const { initialize, displayMigrations } = require('./helpers/migrations');
const { findFreePort } = require('./helpers/port');
require('./core/connection');

//STATIC
app.use(express.static('public'));
app.use('/css', express.static(__dirname + 'public/css'));
app.use('/img', express.static(__dirname + 'public/img'));
app.use('/js', express.static(__dirname + 'public/js'));

//MIDDLEWARE
app.use(morgan(':remote-addr| :method| :total-time[2] ms| :status| :date[web]'));
app.use(ejsLayout);

//TEMPLATE ENGINE
app.set('view engine', 'ejs');
app.set('layout', './layouts/oneColumn.ejs');

//ROUTES
app.get('/', (req, res, next) => {
	fs.readFile('/not-exsists', (err, data) => {
		if (err) {
			next(err);
		}
		console.log(data);
	});
	res.send('HEllo');
});

//INITIALIZE SERVER
initialize()
	.then((result) => {
		displayMigrations(result);

		findFreePort()
			.then(async (freePort) => {
				let answer = true;
				if (!(freePort === 3000)) {
					answer = await new confirm(
						`Port ${freePort} is available.Do you want to run on port ${freePort}?`
					).run();
				}

				if (!answer) {
					throw new Error('Cannot start the server');
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
