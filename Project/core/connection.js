const { sequelize } = require('../db/models');

sequelize
	.authenticate()
	.then(() => {
		console.log('Database connected successfully');
	})
	.catch((err) => {
		console.log(`Database not successfully connected.Error:${err.message}`);
	});
