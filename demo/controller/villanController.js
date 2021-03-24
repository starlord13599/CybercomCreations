const { villan } = require("../models");

const villanController = {
  //to display data
  async showData(req, res) {
    const Villan = await villan.findAll();

    return res.json({
      villan: Villan,
    });
  },

  // to save data
  async postData(req, res) {
    const { name } = req.body;
    const Villan = await villan.create({
      name,
    });

    res.json(Villan);
  },

  //to update data
  async putData(req, res) {
    try {
      let id = req.params.id;

      let { name } = req.body;
      let Villan = await villan.findByPk(id);

      if (!Villan) {
        throw "Villan was not found";
      }

      Villan = await Villan.update({ name }, { where: { id: id } });

      return res.json(Villan);
    } catch (error) {
      return res.send(error);
    }
  },

  //to delete data
  async deleteData(req, res) {
    try {
      let id = req.params.id;

      let Villan = await villan.findByPk(id);
      if (!Villan) {
        throw "Villan was not found";
      }

      Villan = await villan.destroy({ where: { id: id } });
      res.json(Villan);
    } catch (error) {
      res.send(error);
    }
  },
};

module.exports = villanController;
