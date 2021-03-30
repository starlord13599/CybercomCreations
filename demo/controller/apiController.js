const { hero, power, team, villan, faught } = require("../models");

const apiControllers = {
  //to display data
  async showData(req, res) {
    try {
      const Hero = await hero.findAll({
        include: [
          {
            model: villan,
            through: { attributes: [] },
          },
          {
            model: power,
            as: "battle",
          },
        ],
      });

      return res.json(Hero);
    } catch (error) {
      res.send(error.message);
    }
  },

  // to save data
  async postData(req, res) {
    const { name, age, place, teamId } = req.body.heros;
    let hero_id = req.query.id;

    try {
      const Hero = await hero.upsert({ id: hero_id, name, age, place, teamId });

      if (req.body.powers && Object.keys(req.body.powers).length !== 0) {
        const { primaryPower, secondaryPower, utility } = req.body.powers;
        await Hero.createPower({ primaryPower, secondaryPower, utility });
        const powers = await Hero.getPower({ raw: true });
      }

      if (req.body.villans && Object.keys(req.body.villans).length !== 0) {
        console.log(req.body.villans);
        const villans = await villan.bulkCreate(req.body.villans);
        await Hero.addVillans(villans);
      }

      // res.json(Hero);
      res.send(Hero);
    } catch (error) {
      res.json(error.message);
    }
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
