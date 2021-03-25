const { team } = require("../models");

const teamController = {
  //to display data
  async showData(req, res) {
    const Team = await team.findAll();

    return res.json({
      team: Team,
    });
  },

  // to save data
  async postData(req, res) {
    const { name, status } = req.body;

    const Team = await team.create({
      name,
      status,
    });

    res.json(Team);
  },

  //to update data
  async putData(req, res) {
    try {
      let id = req.params.id;

      let { name, status } = req.body;
      let Team = await team.findByPk(id);

      console.log(await Team.countHeros({ raw: true }));

      // Team = await Team.update({ name, status }, { where: { id: id } });

      return res.json(Team);
    } catch (error) {
      return res.send(error);
    }
  },

  //to delete data
  async deleteData(req, res) {
    try {
      let id = req.params.id;

      let Team = await team.findByPk(id);
      if (!Team) {
        throw "Team was not found";
      }

      Team = await team.destroy({ where: { id: id } });
      res.json(Team);
    } catch (error) {
      res.send(error);
    }
  },
};

module.exports = teamController;
