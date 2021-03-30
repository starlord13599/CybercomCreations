"use strict";
const { Model } = require("sequelize");

module.exports = (sequelize, DataTypes) => {
  class hero extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate({ power, team, villan, faught }) {
      this.hasOne(power, { foreignKey: "heroId", as: "battle" });
      this.belongsTo(team);
      this.belongsToMany(villan, { through: faught });
    }
  }
  hero.init(
    {
      name: DataTypes.STRING,
      age: {
        type: DataTypes.INTEGER,
        validate: {
          isInt: {
            msg: "Age  must be a number",
          },
        },
      },
      place: DataTypes.STRING,
      teamId: DataTypes.INTEGER,
    },
    {
      sequelize,
      modelName: "hero",
    }
  );
  return hero;
};
