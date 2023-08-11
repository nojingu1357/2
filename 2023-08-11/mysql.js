require("dotenv").config(); // 환경 변수 로드

const pug = require("pug");
const mysql = require("mysql");
const express = require("express");
const path = require("path");

const app = express();
const port = 3000;
app.set("view engine", "pug");
app.set("views", "view");

const conn = mysql.createConnection({
  host: process.env.DB_HOST,
  port: process.env.DB_PORT,
  user: process.env.DB_USER,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_DATABASE,
});

const sql = "SELECT * FROM money";

conn.query(sql, (err, rows) => {
  if (err) {
    console.log(err);
  }
  for (const row of rows) {
    console.log("---------------------------------------");
    console.log("id : ", row.id);
    console.log("money : ", row.money);
    console.log("bank : ", row.bank);
    console.log("description : ", row.description);
    console.log("date : ", row.created);
    console.log("total : ", row.total);
    console.log(Date());
  }
});

//--------------------------------------------------------------------------------------
/*
function getClock() {
  const date = new Date();

  const hours = String(date.getHours()).padStart(2, "0");
  const minutes = String(date.getMinutes()).padStart(2, "0");
  const seconds = String(date.getSeconds()).padStart(2, "0");

  const clock = `${hours}:${minutes}:${seconds}`;

  app.get("/", (req, res) => {
    res.render("mainP.pug", { clock: clock });
  });
}

getClock();

setInterval(getClock, 1000);
  
템플릿에서는 실시간 변동을 제공하지 않는다 
실시간 refresh를 사용한 다이나믹한 페이지를 만들고 싶다면 html을 사용해야 한다
*/
//--------------------------------------------------------------------------------------

app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "mainP.html"));
});

app.listen(port, () => {
  console.log("is running now");
});
