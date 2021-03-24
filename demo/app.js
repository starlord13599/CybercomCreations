const express = require("express");
const { sequelize } = require("./models");
const app = express();
const apiRoutes = require("./routes/api");

app.use(
  express.urlencoded({
    extended: true,
  })
);
app.use(express.json());

app.use("/api", apiRoutes);

//SERVER LISTENING
const PORT = process.env.PORT || 3000;

app.listen(PORT, async () => {
  await sequelize
    .authenticate()
    .then(() => {
      console.log("Connected to database");
      console.log(`SERVER RUNNING AT ${PORT}`);
    })
    .catch((err) => {
      console.log(err.message);
      process.exit();
    });
});
