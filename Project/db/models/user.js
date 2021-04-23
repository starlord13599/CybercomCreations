'use strict';
const { Model } = require('sequelize');
module.exports = (sequelize, DataTypes) => {
	class User extends Model {
		/**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
		static associate(models) {
			// define association here
		}
	}
	User.init(
		{
			firstName: {
				type: DataTypes.STRING,
				allowNull: false,
				validate: { notNull: { args: true, msg: 'firstName cannot be empty' } }
			},
			lastName: {
				type: DataTypes.STRING,
				allowNull: false,
				validate: { notNull: { args: true, msg: 'Last Name cannot be empty' } }
			},
			email: {
				type: DataTypes.STRING,
				allowNull: false,
				validate: {
					notNull: { args: true, msg: 'Email cannot be empty' },
					isEmail: { args: true, msg: 'The email is not valid' }
				}
			},
			age: {
				type: DataTypes.INTEGER,
				allowNull: false,
				validate: {
					notNull: { args: true, msg: 'Age cannot be empty' },
					isInt: { args: true, msg: 'Age must oonly be a number' }
				}
			}
		},
		{
			sequelize,
			modelName: 'User'
		}
	);
	return User;
};
