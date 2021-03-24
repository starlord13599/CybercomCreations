const { power, hero, team } = require("../models");

const powerController = {
  //to display data
  async showData(req, res) {
    const Power = await power.findAll({ include: [hero] });

    return res.json({
      power: Power,
    });
  },

  // to save data
  async postData(req, res) {
    const { heroId, primaryPower, secondaryPower, utility } = req.body;
    const Power = await power.create({
      heroId,
      primaryPower,
      secondaryPower,
      utility,
    });

    res.json(Power);
  },

  //to update data
  async putData(req, res) {
    try {
      let id = req.params.id;

      let { heroId, primaryPower, secondaryPower, utility } = req.body;
      let Power = await power.findByPk(id);

      if (!Power) {
        throw "Power was not found";
      }

      Power = await Power.update(
        { heroId, primaryPower, secondaryPower, utility },
        { where: { id: id } }
      );

      return res.json(Power);
    } catch (error) {
      return res.send(error);
    }
  },

  //to delete data
  async deleteData(req, res) {
    try {
      let id = req.params.id;

      let Power = await power.findByPk(id);
      if (!Power) {
        throw "Power was not found";
      }

      Power = await power.destroy({ where: { id: id } });
      res.json(Power);
    } catch (error) {
      res.send(error);
    }
  },
};

module.exports = powerController;
