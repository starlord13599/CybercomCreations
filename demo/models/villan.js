"use strict";
const { Model } = require("sequelize");
module.exports = (sequelize, DataTypes) => {
  class villan extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate({ hero, faught }) {
      this.belongsToMany(hero, { through: faught });
    }
  }
  villan.init(
    {
      name: DataTypes.STRING,
    },
    {
      sequelize,
      modelName: "villan",
    }
  );
  return villan;
};
