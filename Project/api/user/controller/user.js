const { User } = require('../../../db/models');

module.exports = {
	test: function(req, res, next) {
		//code goes here
		next();
	},
	getUsers: async function(req, res, next) {
		try {
			const users = await User.findAll();
			res.status(200).json({ status: 1, message: 'Success', users });
		} catch (error) {
			res.json({ message: error.message });
			next(error.message);
		}
	},
	getUser: async function(req, res, next) {
		try {
			const { id } = req.params;
			const user = await User.findByPk(id);

			if (!user) {
				throw new Error(`User with ${id} not found`);
			}

			res.status(200).json({ status: 1, message: 'Success', user });
		} catch (error) {
			res.json({ message: error.message });
			next(error.message);
		}
	},
	postUser: async function(req, res, next) {
		try {
			const { firstName, lastName, age, email } = req.body;

			const user = await User.create({ firstName, lastName, age, email });

			res.status(200).json({ status: 1, message: 'Success', user });
		} catch (error) {
			res.send(error.message);
			next(error.message);
		}
	},
	putUser: async function(req, res, next) {
		try {
			const { firstName, lastName, age, email } = req.body;
			const { id } = req.params;

			const user = await User.update({ firstName, lastName, age, email }, { where: { id: id } });
			res.status(200).json({ status: 1, message: 'Success', user });
		} catch (error) {
			res.send(error.message);
			next(error.message);
		}
	},
	deleteUser: async function(req, res, next) {
		try {
			const { id } = req.params;

			const user = await User.destroy({ where: { id: id } });

			res.status(200).json({ status: 1, message: 'Success', user });
		} catch (error) {
			res.send(error.message);
			next(error.message);
		}
	}
};
