const express = require("express");
const router = express.Router();
const powerController = require("../controller/powerController");
const apiControllers = require("../controller/apiController");
const teamController = require("../controller/teamController");
const villanController = require("../controller/villanController");

router
  .get("/heros", apiControllers.showData)
  .post("/heros", apiControllers.postData)
  .put("/heros/:id", apiControllers.putData)
  .delete("/heros/:id", apiControllers.deleteData);

router
  .get("/powers", powerController.showData)
  .post("/powers", powerController.postData)
  .put("/powers/:id", powerController.putData)
  .delete("/powers/:id", powerController.deleteData);

router
  .get("/teams", teamController.showData)
  .post("/teams", teamController.postData)
  .put("/teams/:id", teamController.putData)
  .delete("/teams/:id", teamController.deleteData);

router
  .get("/villans", villanController.showData)
  .post("/villans", villanController.postData)
  .put("/villans/:id", villanController.putData)
  .delete("/villans/:id", villanController.deleteData);
module.exports = router;
