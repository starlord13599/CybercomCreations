"use strict";
const { Model } = require("sequelize");
module.exports = (sequelize, DataTypes) => {
  class team extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate({ hero }) {
      // define association here
      this.hasMany(hero, { foreignKey: "teamId" });
    }
  }
  team.init(
    {
      name: DataTypes.STRING,
      status: DataTypes.ENUM("active", "inactive"),
    },
    {
      sequelize,
      modelName: "team",
    }
  );
  return team;
};
