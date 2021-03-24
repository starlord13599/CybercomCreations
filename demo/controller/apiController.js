const { hero, power, team, villan, faught } = require("../models");

const apiControllers = {
  //to display data
  async showData(req, res) {
    const Hero = await hero.findAll({ include: [power, team, villan] });

    return res.json({
      hero: Hero,
    });
  },

  // to save data
  async postData(req, res) {
    const { name, age, place, teamId } = req.body;
    const Hero = await hero.create({
      name,
      age,
      place,
      teamId,
    });

    res.json(Hero);
  },

  //to update data
  async putData(req, res) {
    try {
      let id = req.params.id;

      let { name, age, place, teamId } = req.body;
      let Hero = await hero.findByPk(id);

      if (!Hero) {
        throw "User was not found";
      }

      Hero = await Hero.update(
        { name, age, place, teamId },
        { where: { id: id } }
      );

      return res.json(Hero);
    } catch (error) {
      return res.send(error);
    }
  },

  //to delete data
  async deleteData(req, res) {
    try {
      let id = req.params.id;

      let Hero = await hero.findByPk(id);
      if (!Hero) {
        throw "User was not found";
      }

      Hero = await hero.destroy({ where: { id: id } });
      res.json(Hero);
    } catch (error) {
      res.send(error);
    }
  },
};

module.exports = apiControllers;
