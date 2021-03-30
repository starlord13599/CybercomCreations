const dotenv = require("dotenv");
dotenv.config();
const PORT = process.env.PORT || 3000;
const express = require("express");
const app = express();
const chalk = require("chalk");
const confirm = require("prompt-confirm");
const ejsLayout = require("express-ejs-layouts");
const portastic = require("portastic");
const { initialize, displayMigrations } = require("./helpers/migrations");
require("./core/connection");

//STATIC
app.use(express.static("public"));
app.use("/css", express.static(__dirname + "public/css"));
app.use("/img", express.static(__dirname + "public/img"));
app.use("/js", express.static(__dirname + "public/js"));

//MIDDLEWARE
app.use(ejsLayout);

//TEMPLATE ENGINE
app.set("view engine", "ejs");
app.set("layout", "./layouts/oneColumn.ejs");

//INITIALIZE SERVER
initialize()
  .then((result) => {
    displayMigrations(result);

    //* to find the available ports

    portastic
      .find({
        min: 3000,
        max: 3010,
      })
      .then((result) => {
        let port = result[0];

        new confirm(
          `The available port is ${port}.Do you want to run on port ${port}?`
        )
          .run()
          .then((answer) => {
            if (answer) {
              app.listen(port, () => {
                console.log(`running on http://localhost:${port}`);
              });
            }
          })
          .catch((err) => {});
      })
      .catch((err) => {});

    //* /to find the available ports
  })
  .catch((err) => {
    console.log(chalk.red(err));
    process.exit();
  });
