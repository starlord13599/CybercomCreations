"use strict";
module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable("powers", {
      id: {
        allowNull: false,
        autoIncrement: true,
        primaryKey: true,
        type: Sequelize.INTEGER,
      },
      heroId: {
        allowNull: false,
        type: Sequelize.INTEGER,
        unique: true,
        references: {
          model: "heros",
          key: "id",
        },
      },
      primaryPower: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      secondaryPower: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      utility: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      createdAt: {
        allowNull: false,
        type: Sequelize.DATE,
      },
      updatedAt: {
        allowNull: false,
        type: Sequelize.DATE,
      },
    });
  },
  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable("powers");
  },
};
