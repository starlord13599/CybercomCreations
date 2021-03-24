"use strict";
const { Model } = require("sequelize");
module.exports = (sequelize, DataTypes) => {
  class power extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate({ hero }) {
      // define association here
      this.belongsTo(hero);
    }
  }
  power.init(
    {
      primaryPower: DataTypes.STRING,
      secondaryPower: DataTypes.STRING,
      utility: DataTypes.STRING,
    },
    {
      sequelize,
      modelName: "power",
    }
  );
  return power;
};
