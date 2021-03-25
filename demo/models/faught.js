"use strict";
const { Model } = require("sequelize");
module.exports = (sequelize, DataTypes) => {
  class faught extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate({ hero, villan }) {
      // define association here
      this.belongsTo(hero);
      this.belongsTo(villan);
    }
  }
  faught.init(
    {
      heroId: DataTypes.INTEGER,
      villanId: DataTypes.INTEGER,
    },
    {
      sequelize,
      modelName: "faught",
    }
  );
  return faught;
};
