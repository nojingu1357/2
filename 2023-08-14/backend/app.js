const express = require("express");
const app = express();
const port = 3000;
const database = require("./database");

const SELECT = "SELECT * FROM topic";

app.get(["/api/topic", "/"], (req, res) => {
  database.query(SELECT, (err, data) => {
    if (err) {
      console.log(err);
    } else {
      res.send({ data });
      console.log({ data });
    }
  });
});

app.listen(port, () => {
  console.log("express is running");
});
